<?php
class Leaves extends Controller
{
   public function __construct()
   {

      $this->LeaveModel = $this->model('LeaveModel');
   }

   public function responceForLeaveRequest($staffID, $leaveDate)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST')
      {
         if ($_POST['action'] == "approve")
         {
            $responce = 1;
            $this->LeaveModel->addLeaveResponce($responce, $staffID, $leaveDate);
         }
         elseif ($_POST['action'] == "reject")
         {
            $responce = 0;
            $this->LeaveModel->addLeaveResponce($responce, $staffID, $leaveDate);
         }
         header('location: ' . URLROOT . '/MangDashboard/leaveRequests');
      }
   }

   public function oneleaveRequest($staffID, $leaveDate)

   {
      // Session::validateSession([6]);

      $oneLeaveDetails = $this->LeaveModel->getOneLeaveDetail($staffID, $leaveDate);
      $casualCountOfRelevantMonth = $this->LeaveModel->getRelevantMonthsLeaveCount($staffID, $leaveDate, 1);
      $medicalCountOfRelevantMonth = $this->LeaveModel->getRelevantMonthsLeaveCount($staffID, $leaveDate, 2);
      $leaveLimits = $this->LeaveModel->getLeaveLimitsForManagerApproval();

      $remainingCasual = $leaveLimits[0]->generalLeave - $casualCountOfRelevantMonth;
      $remainingMedical = $leaveLimits[0]->medicalLeave - $medicalCountOfRelevantMonth;

      $oneLeaveDetails = [
         'leaveDetails' => $oneLeaveDetails[0],
         'medicalCount' => $medicalCountOfRelevantMonth,
         'casualCount' => $casualCountOfRelevantMonth,
         'remainingCasual' => $remainingCasual,
         'remainingMedical' => $remainingMedical
      ];
      // print_r($oneLeaveDetails['leaveDetails']);
      // die("hhh");
      $this->view('manager/mang_leaveRequests', $oneLeaveDetails);
   }


   //Service provider and receptionist leaves view
   public function leaves()
   {
      Session::validateSession([4, 5]);

      $leaveData = $this->LeaveModel->getLeaveRecordsBystaffID(Session::getUser("id"));
      $leaveLimit = $this->LeaveModel->getGeneralLeaveLimit();

      // die ($leaveLimit);
      $leaveCount = $this->LeaveModel->getCurrentMonthLeaveCount(Session::getUser("id"));
      $remainingLeaveCount = $leaveLimit - $leaveCount;
      // print_r($leaveData);
      // die("hi");
      $data = [
         'date' => '',
         'reason' => '',
         'leavetype' => '',
         'date_error' => '',
         'reason_error' => '',
         'type_error' => '',
         'dateValidationError' => '',
         'staffID' => Session::getUser("id"),
         'tableData' => $leaveData,
         'haveErrors' => 0,
         'reasonentered' => '',
         'remainingCount' => $remainingLeaveCount,
         'leaveexceed' => '',
         'dateValidationMsg' => ''

      ];

      if ($_SERVER['REQUEST_METHOD'] == 'POST')
      {


         // check exsisting dates
         // $checkDate = $this->LeaveModel->checkExsistingDate($data['date']);
         // $this->leaveRequestDateValidate($data);


         if ($_POST['action'] == "addleave")
         {

            $data = [
               'date' => isset($_POST['leavetype']) ? trim($_POST['date']) : '',
               'reason' => isset($_POST['leavetype']) ? trim($_POST['reason']) : '',
               'leavetype' => isset($_POST['leavetype']) ? trim($_POST['leavetype']) : '',
               'date_error' => '',
               'reason_error' => '',
               'type_error' => '',
               'dateValidationError' => '',
               'staffID' => Session::getUser("id"),
               'tableData' => $leaveData,
               'haveErrors' => 0,
               'remainingCount' => $remainingLeaveCount,
               'leaveexceed' => 0,
               'dateValidationMsg' => ''
            ];


            $today = date('Y-m-d');
            $data['date_error'] = emptyCheck($data['date']);
            $data['reason_error'] = emptyCheck($data['reason']);
            $data['type_error'] = emptyCheck($data['leavetype']);

            if (empty($data['date_error']) && empty($data['reason_error']) && empty($data['type_error']))
            {

               $alreadyRequestedDay = $this->LeaveModel->checkExsistingLeaveRequestDay($data['date']);
               $haveReservation = $this->LeaveModel->checkHaveReservationByDate($data['date'], Session::getUser("id"));
               $isSalonClosed = $this->LeaveModel->checkSalonClosedDates($data['date']);
               // $alreadyRequestedDay = 0;


               if ($isSalonClosed == 1)
               {
                  $dateValidationMsg = "Salon Closed";
               }
               else
               {
                  if ($alreadyRequestedDay == 1)
                  {
                     $dateValidationMsg = "The date You entered is already exit";
                  }
                  else
                  {
                     if ($haveReservation == 1)
                     {
                        $dateValidationMsg = "Can not request a leave,You have ongoing reservations.";
                     }
                     else
                     {
                        $dateValidationMsg = "";
                     }
                  }
               }
               if (empty($dateValidationMsg))
               {
                  if ($data['leavetype'] == 1) //general
                  {
                     $this->LeaveModel->requestleave($data);
                     // redirect to this view
                     redirect('Leaves/leaves');
                  }
                  else if ($data['leavetype'] == 2) //medical
                  {
                     $d = date_parse_from_format("Y-m-d", $data['date']);
                     $count = $this->LeaveModel->getLeaveCountOfSelectedMonth($d["month"], $d["year"], Session::getUser("id"), 2);
                     $leaveLimit = $this->LeaveModel->getMedicalLeaveLimit();
                     if ($count >= $leaveLimit)
                     {
                        $data['dateValidationMsg'] = 'Can not send leave request,Medical limit exceeded';
                        $data['haveErrors'] = 1;
                        $this->provideLeaveRequestReleventView($data);
                     }
                     else
                     {
                        // $haveReservation = $this->LeaveModel->checkHaveReservationByDate($data['date'], Session::getUser("id"));
                        // print_r($haveReservation);
                        // die('hh');
                        $this->LeaveModel->requestleave($data);
                        // redirect to this view
                        redirect('Leaves/leaves');
                     }
                  }
               }
               else
               {
                  $data['haveErrors'] = 1;
                  $data['reason_error'] = 'Can not send the leave request.';
                  $this->view('serviceProvider/serProv_leaves', $data);
               }
            }


            else
            {

               $data['haveErrors'] = 1;
               $this->provideLeaveRequestReleventView($data);
               $this->view('serviceProvider/serProv_leaves', $data);
            }
         }
         else if ($_POST['action'] == "cancel")
         {
            $data['haveErrors'] = 0;
            redirect('Leaves/leaves');
         }
         else
         {
            redirect('Leaves/leaves');
         }
      }

      else
      {
         $data = [
            'date' => '',
            'reason' => '',
            'leavetype' => '',
            'date_error' => '',
            'reason_error' => '',
            'type_error' => '',
            'dateValidationError' => '',
            'staffID' => Session::getUser("id"),
            'tableData' => $leaveData,
            'haveErrors' => 0,
            'reasonentered' => '',
            'remainingCount' => $remainingLeaveCount,
            'leaveexceed' => '',
            'dateValidationMsg' => ''

         ];
         $this->provideLeaveRequestReleventView($data);
         //  $this->view('serviceProvider/serProv_leaves', $data);
      }
   }

   public function provideLeaveRequestReleventView($data)
   {
      Session::validateSession([4, 5]);
      if (Session::getUser("type") == 4)
      {
         $this->view('receptionist/recept_leaves', $data);
      }

      else if (Session::getUser("type") == 5)
      {
         $this->view('serviceProvider/serProv_leaves', $data);
      }
   }

   public function leaveRequestDateValidate($date)
   {

      // die("ooooo");

      Session::validateSession([4, 5]);
      // $date = file_get_contents('input://php');
      // $date = json_decode($date, true);

      $alreadyRequestedDay = $this->LeaveModel->checkExsistingLeaveRequestDay($date);
      $haveReservation = $this->LeaveModel->checkHaveReservationByDate($date, Session::getUser("id"));
      $isSalonClosed = $this->LeaveModel->checkSalonClosedDates($date);
      // $alreadyRequestedDay = 0;
      header('Content-Type: application/json; charset=utf-8');

      if ($isSalonClosed == 1)
      {
         $dateValidationMsg = "Salon Closed";
      }
      else
      {
         if ($alreadyRequestedDay == 1)
         {
            $dateValidationMsg = "The date You entered is already exit";
         }
         else
         {
            if ($haveReservation == 1)
            {
               $dateValidationMsg = "Can not request a leave,You have ongoing reservations.";
            }
            else
            {
               $dateValidationMsg = "";
            }
         }
      }

      print_r(json_encode($dateValidationMsg));
   }
   public function leaveRequestTypeValidate($date, $leaveType)
   {
      Session::validateSession([4, 5]);

      $d = date_parse_from_format("Y-m-d", $date);
      $data = [
         'month' => $d["month"],
         'year' => $d["year"],
         'user' => Session::getUser("id"),
         'lType' => $leaveType,
      ];
      $count = $this->LeaveModel->getLeaveCountOfSelectedMonth($d["month"], $d["year"], Session::getUser("id"), $leaveType);
      $validationError = '';
      if ($leaveType == 1)
      {
         $leaveLimit = $this->LeaveModel->getgeneralLeaveLimit();
         $lType = 'general';
      }
      else if ($leaveType == 2)
      {
         $leaveLimit = $this->LeaveModel->getMedicalLeaveLimit();
         $lType = 'medical';
      }

      if ($count >= $leaveLimit)
      {
         $validationError = 'Monthly ' . $lType . ' leave limit exceed.';
      }
      else
      {
         $validationError = '';
      }



      header('Content-Type: application/json; charset=utf-8');
      print_r(json_encode($validationError));
   }

   public function leaveRequestCancel($date)
   {
      Session::validateSession([4, 5]);
      $this->LeaveModel->cancelLeaveRequest($date, Session::getUser("id"));
   }
   public function getSelectedLeaveDetails($date)
   {
      Session::validateSession([4, 5]);
      $ldata = $this->LeaveModel->getSelectedLeaveDetails($date, Session::getUser("id"));
      header('Content-Type: application/json; charset=utf-8');
      print_r(json_encode($ldata));
   }
   public function checkIfDatePossibleForMangLeave($selectedDate)
   {
      $dateState = $this->LeaveModel->checkForDateState($selectedDate);
      $response = "";

      date_default_timezone_set("Asia/Colombo");
      $today = date('Y-m-d');
      $nextDates = date('Y-m-d', strtotime(' + 2 month'));

      if ($selectedDate > $nextDates)
         $dateState = 4;

      if ($selectedDate <= $today)
         $dateState = 3;

      if ($dateState == 4)
         $response = "Select a date between 2 months";
      elseif ($dateState == 3)
         $response = "Select a valid date";
      elseif ($dateState == 1)
         $response = "The date You entered is already exit";
      else
         $response = "";

      header('Content-Type: application/json; charset=utf-8');
      print_r(json_encode($response));
   }
   public function checkIfDatePossibleForMangMedicalLeave($selectedType, $selectedDate, $st = null)
   {
      $mangMedicalLeaveLimit = $this->LeaveModel->getmangMedicalLeaveLimit();
      $mangMedicalLeaveCount = $this->LeaveModel->getMangRelevantMonthLeaveCount(Session::getUser("id"), 2, $selectedDate);
      $remainingMedical = $mangMedicalLeaveLimit - $mangMedicalLeaveCount;

      // if($st == 1 && $selectedType=2){
      //    $remainingMedical=$remainingMedical+1;
      //    $response = "";
      // }
      if ($selectedType == 2 && $remainingMedical <= 0)
         $response = "You can't take anymore medical leaves for this month";
      else
         $response = "";

      header('Content-Type: application/json; charset=utf-8');
      print_r(json_encode($response));
   }
}
