<?php

class Systemlog
{
    private static function getUserData($name = null, $mobileNo = null)
    {
        if ($name == null)
        {
            $name = Session::getUser("name");
        }
        if ($mobileNo == null)
        {
            $mobileNo = Session::getUser("mobileNo");
        }
        $length = strlen($name);

        if ($length < 22)
        {
            $userName = str_pad($name, 22, ' ', STR_PAD_RIGHT);
        }
        else
        {
            $lastname = end(explode(" ", $name));
            $firstname = str_replace($lastname, '', $name);
            $userName = str_pad($firstname, 22, ' ', STR_PAD_RIGHT);
        }
        return $mobileNo . "\t" . $userName;
    }

    private static function getLogData()
    {
        $ip = $_SERVER['REMOTE_ADDR'];


        $length = strlen($ip);
        if ($length < 10)
        {
            $ip = str_pad($ip, 10, ' ', STR_PAD_RIGHT);
        }
        date_default_timezone_set("Asia/Colombo");
        $time = date('m/d/y h:iA', time());
        return $ip . "\t" . $time;
    }

    public static function signin()
    {
        $log = 'signin';
        $contents = file_get_contents('logfile/syslog.txt');

        $contents .= "\n" . self::getLogData() . "\t" . self::getUserData() . "\t$log";
        file_put_contents('logfile/syslog.txt', $contents);
    }

    public static function signout()
    {
        $log = 'signout';
        $contents = file_get_contents('logfile/syslog.txt');

        $contents .= "\n" . self::getLogData() . "\t" . self::getUserData() . "\t$log";
        file_put_contents('logfile/syslog.txt', $contents);
    }
    public static function changePassword()
    {
        $log = 'change password';
        $contents = file_get_contents('logfile/syslog.txt');

        $contents .= "\n" . self::getLogData() . "\t" . self::getUserData() . "\t$log";
        file_put_contents('logfile/syslog.txt', $contents);
    }
    public static function resetPassword($mobileNo, $name)
    {

        $log = 'reset password';
        $contents = file_get_contents('logfile/syslog.txt');

        $contents .= "\n" . self::getLogData() . "\t" . self::getUserData($mobileNo, $name) . "\t$log";
        file_put_contents('logfile/syslog.txt', $contents);
    }

    public static function createCustomerAccount($mobNo) //System admin
    {
        $log = 'create customer account mobileNo:' . $mobNo;
        $contents = file_get_contents('logfile/syslog.txt');

        $contents .= "\n" . self::getLogData() . "\t" . self::getUserData() . "\t$log";
        file_put_contents('logfile/syslog.txt', $contents);
    }
    public static function createAccount($staffMobileNo) //system admin
    {
        $log = 'create staff account mobileNo:' . $staffMobileNo;
        $contents = file_get_contents('logfile/syslog.txt');

        $contents .= "\n" . self::getLogData() . "\t" . self::getUserData() . "\t$log";
        file_put_contents('logfile/syslog.txt', $contents);
    }

    public static function customerRegister($mobNo, $fName, $lName) //customer
    {
        $log = 'create customer account';
        $contents = file_get_contents('logfile/syslog.txt');
        $name = $fName . ' ' . $lName;
        $length = strlen($name);

        if ($length < 22)
        {
            $userName = str_pad($name, 22, ' ', STR_PAD_RIGHT);
        }
        else
        {
            $lastname = end(explode(" ", $name));
            $firstname = str_replace($lastname, '', $name);
            $userName = str_pad($firstname, 22, ' ', STR_PAD_RIGHT);
        }
        $userData = $mobNo . "\t" . $userName;

        $contents .= "\n" . self::getLogData() . "\t" . $userData . "\t$log";
        file_put_contents('logfile/syslog.txt', $contents);
    }

    public static function downloadSysLog()
    {
        $log = 'download systemLog file';
        $contents = file_get_contents('logfile/syslog.txt');

        $contents .= "\n" . self::getLogData() . "\t" . self::getUserData() . "\t$log";
        file_put_contents('logfile/syslog.txt', $contents);
        return $contents;
    }
    public static function customLog($log)
    {
        $contents = file_get_contents('logfile/syslog.txt');

        $contents .= "\n" . self::getLogData() . "\t" . self::getUserData() . "\t$log";
        file_put_contents('logfile/syslog.txt', $contents);
    }
}






















// function logger($user, $log)
// {
//     if (!file_exists('logfile/syslog.txt'))
//     {
//         file_put_contents('logfile/syslog.txt', "");
//     }

//     $ip = $_SERVER['REMOTE_ADDR'];
//     date_default_timezone_set("Asia/Colombo");
//     $time = date('m/d/y h:iA', time());


//     $contents = file_get_contents('logfile/syslog.txt');


//     $contents .= "\n$ip\t$time\t$user\t$log";


//     file_put_contents('logfile/syslog.txt', $contents);
// }
