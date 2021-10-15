<?php require APPROOT . "/views/inc/header.php" ?>

<body class="layout-template-1">
   <?php
   $selectedMain = "Leaves";
   $selectedSub = "TakeLeave";
   require APPROOT . "/views/manager/mang_sideNav.php"
   ?>

   <?php
   $title = "Take Leave";
   $username = "Sanjana Rajapaksha";
   $userLevel = "Manager";
   require APPROOT . "/views/inc/headerBar.php"
   ?>

   <!--Content-->
   <div class="content">

      <div class="page-top-main-container">
         <a href="#" class="btn btn-filled btn-theme-purple btn-main">Take Leave</a>
      </div>

      <div class="table-container">
         <div class="table2 table2-responsive">
            <table class="table2-hover">

               <thead>
                  <tr>
                     <!-- <th class="column-center-align col-1">Staff ID</th> -->
                     <th class="column-center-align col-2">Leave Date</th>
                     <th class="column-center-align col-3">Marked Date</th>
                     <th class="column-center-align col-4 column-center-align">Reason</th>
                     <th class="col-8"></th>
                  </tr>
               </thead>

               <tbody>
                  <tr>
                     <!-- <td data-lable="Reservation ID" class="column-center-align">M000001</td> -->
                     <td data-lable="Leave Date" class="column-center-align">2021-10-07</td>
                     <td data-lable="Marked Date" class="column-center-align">2021-10-05</td>
                     <td data-lable="Reason" class="column-center-align">Going to the hospital</td>
                     <td class="column-center-align">
                        <span>
                           <a href="#"><i class="ci-edit table-icon"></i></a>
                           <a href="#"><i class="ci-trash table-icon"></i></a>
                        </span>
                     </td>
                  </tr>

                  <tr>
                     <!-- <td data-lable="Reservation ID" class="column-center-align">M000001</td> -->
                     <td data-lable="Leave Date" class="column-center-align">2021-10-07</td>
                     <td data-lable="Marked Date" class="column-center-align">2021-10-05</td>
                     <td data-lable="Reason" class="column-center-align">Going to the hospital</td>
                     <td class="column-center-align">
                        <span>
                           <a href="#"><i class="ci-edit table-icon"></i></a>
                           <a href="#"><i class="ci-trash table-icon"></i></a>
                        </span>
                     </td>
                  </tr>

                  <tr>
                     <!-- <td data-lable="Reservation ID" class="column-center-align">M000001</td> -->
                     <td data-lable="Leave Date" class="column-center-align">2021-10-07</td>
                     <td data-lable="Marked Date" class="column-center-align">2021-10-05</td>
                     <td data-lable="Reason" class="column-center-align">Going to the hospital</td>
                     <td class="column-center-align">
                        <span>
                           <a href="#"><i class="ci-edit table-icon"></i></a>
                           <a href="#"><i class="ci-trash table-icon"></i></a>
                        </span>
                     </td>
                  </tr>

               </tbody>
            </table>
         </div>
      </div>
      <button class="btnOpen normal">Take Leave</button></a>
      <button class="btnOpen normal">Edit Leave</button></a>
      <button class="btnOpen normal">Delete Leave Request</button></a>

      <!-- Take leave model -->
      <div class="modal-container normal">
         <div class="modal-box addItems">
            <h1 class="addItemsModalHead">TakeLeave</h1>
            <form action="" class="form">
               <!-- start main grid 1 -->
               <div class="addItemsModalGrid1">
                  <div class="addItemsModalDetail1">
                     <label class="addItemsModalLable">Date</label><br>
                     <input type="date" class="addItemsModalDate"><br>
                     <span class="error"> <?php echo "Limit has exceeded for the date "; ?></span>
                  </div>
                  <div class="addItemsModalDetail2">
                     <label class="addItemsModalLable">Reason</label>
                     <textarea class="addItemsModalTextArea" name="addItemsModalTextArea" rows="4" cols="50"
                        placeholder="Type the reason here"> </textarea>
                  </div>
               </div>
               <!-- main grid 1 ends -->
               <!-- main grid 3 starts -->
               <div class="addItemsModalGrid3">
                  <div class="addItemsModalbtn1">
                     <button class="btn btnClose normal ModalCancelButton ModalButton">Cancel</button>
                  </div>
                  <div class="addItemsModalbtn2">
                     <button class="btn ModalGreenButton ModalButton">Proceed</button>
                  </div>
               </div>
               <!-- main grid 3 ends -->
            </form>
         </div>
      </div>
      <!-- End of take leave model -->

      <!-- Edit taken leave model -->
      <!-- <div class="modal-container normal">
         <div class="modal-box leave-request">
               <div class="new-type-head">
                  <h1>Edit Leave</h1>
               </div>
               <form action="" class="form">

                  <div class="row">
                     <div class="column">
                           <div class="text-group">
                              <label class="labels" for="serviceName">Date</label><br>
                              <input type="date" name="" id="takeLeaveDate" placeholder="--Select a date--">
                           </div>
                           <span class="error"> <?php echo "Limit has exceeded for the date "; ?></span>
                     </div>
                  </div>
                  <div class="row">
                     <div class="column">
                           <div class="text-group">
                              <label class="labels" for="serviceName">Reason</label><br>
                              <textarea id="takeLeaveReason" class="" name="" rows="4" cols="50">Go to Hospital.......</textarea>
                           </div>
                     </div>
                  </div>

                  <div class="new-type-head">
                     <button class="btn btnClose normal close-type-btn">Close</button>
                     <button class="btn btnClose normal confirm-service-btn">Take</button>
                  </div>

               </form>
         </div>
      </div> -->
      <!-- End of Edit taken leave model -->

      <!-- Leave delete model -->
      <div class="modal-container normal">
         <div class="modal-box">
               <div class="confirm-model-head">
                  <h1>Delete Leave Request ?</h1>
               </div>
               <div class="confirm-model-head">
                  <p>Are you sure you want to delete the leave request? <br> This action cannot be undone after proceeding.</p>
               </div>
               <div class="confirm-model-head">
                  <button class="btn btnClose normal ModalButton ModalCancelButton">Close</button>
                  <button class="btn btnClose normal ModalButton ModalBlueButton">proceed</button>
               </div>
         </div>
      </div>
      <!-- End of Leave delete model -->

   </div>
   <!--End Content-->


   <?php require APPROOT . "/views/inc/footer.php" ?>