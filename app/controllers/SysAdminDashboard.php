<?php
class SysAdminDashboard extends Controller
{
   public function __construct()
   {
      Session::validateSession([1]);
   }
   public function home()
   {
      redirect('SysAdminDashboard/systemLog');
   }
   public function systemlog()
   {
      $this->view('systemAdmin/systemAdmin_systemlog');
   }
   public function Customer()
   {
      $this->view('systemAdmin/systemAdmin_customer');
   }
   public function systemLogRecordstore()
   {
      // System log
      $content = Systemlog::downloadSysLog();
      header('Content-Type: application/json; charset=utf-8');
      print_r(json_encode($content));
   }
}
