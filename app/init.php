<?php

// Loading config
require_once 'config/config.php';

// Loading helpers
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';
require_once 'helpers/data_validation_helper.php';
require_once 'helpers/sms_helper.php';
require_once 'helpers/time_date_format_helper.php';
require_once 'helpers/toastNotificationsHelper.php';
require_once 'helpers/system_log_helper.php';

spl_autoload_register(function ($className)
{
   try{
require_once 'core/' . $className . '.php';
   }
catch(Exception $e)
{
   
}
 
});


// require_once 'core/Application.php';
// require_once 'core/Controller.php';
// require_once 'core/Database.php';
