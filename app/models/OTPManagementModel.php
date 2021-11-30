<?php
class OTPManagementModel extends Model
{
   // OTP type number
   // mobileVerification = 1
   // passwordReset      = 2

   //  TODO : add OTP timeout process properly
   public function requestOTP($mobileNo, $type)
   {
      // Check if isOTPExists
      $result = $this->getOTP($mobileNo, $type);

      // OTP generated already
      if ($result)
      {
         $timeDiff = getTimeDiff($result->timestamp);
         var_dump($timeDiff);

         if ($timeDiff[0] > 5 || $timeDiff[0] == 5 && $timeDiff[1] > 0)
            $timeout = true;
         else
            $timeout = false;

         // OTP timeout
         if ($timeout)
         {
            $OTP = $this->generateNewOTP();
            return $OTP;
         }

         // no timeout
         else
         {
            return false;
         }
      }
      // OTP not generated
      else
      {
         $OTP = $this->generateNewOTP();
         return $OTP;
      }
   }

   // TODO : Hash OTP if possible
   // Remember to dehash when verifying 
   public function storeOTP($mobileNo, $OTP, $type)
   {
      $timestamp = getCurrentTimeStamp();

      // Updates the OTp if key already exists
      $SQLquery = "
      INSERT INTO otpverification (mobileNo, OTP, timestamp, type) 
      VALUES(:mobileNo, :OTP, :timestamp, :type) ON DUPLICATE KEY UPDATE 
      mobileNo =  :mobileNo, OTP = :OTP, timestamp = :timestamp, type = :type;";
      $this->customQuery(
         $SQLquery,
         [
            ':mobileNo' => $mobileNo,
            ':OTP' => $OTP,
            ':timestamp' => $timestamp,
            ':type' => $type
         ]
      );
   }

   private function getOTP($mobileNo, $type)
   {
      $results = $this->getSingle("otpverification", "*", ["mobileNo" => $mobileNo, "type" => $type]);
      return $results;
   }

   public function verifyOTP($mobileNo, $enteredOTP, $type)
   {
      $results = $this->getOTP($mobileNo, $type);
      if ($results)
      {
         if (strcmp($results->OTP, $enteredOTP) == 0)
            return true;
      }
      return false;
   }

   public function removeOTP($mobileNo, $type)
   {
      $this->delete("OTPverification", ["mobileNo" => $mobileNo, "type" => $type]);
   }

   // Generates OTP
   private function generateNewOTP()
   {
      $generator = "7305192864";
      $otp = "";

      for ($i = 1; $i <= 6; $i++)
      {
         $otp .= substr($generator, (rand() % (strlen($generator))), 1);
      }

      return $otp;
   }
}