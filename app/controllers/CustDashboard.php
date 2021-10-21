<?php

class CustDashboard extends Controller
{
   public function __construct()
   {
      $this->serviceModel = $this->model('ServiceModel');
      $this->reservationModel = $this->model('ReservationModel');
   }
   public function home()
   {
      redirect('CustDashboard/myReservations');
   }

   public function myReservations()
   {
      validateSession([6]);
      $customerID = $_SESSION['userID'];
      $reservationsList = $this->reservationModel->getReservationsByCustomer($customerID);
      $this->view('customer/cust_myReservations', $reservationsList);
   }
   public function profileSettings()
   {
      validateSession([6]);
      $this->view('customer/cust_profileSettings');
   }
}
