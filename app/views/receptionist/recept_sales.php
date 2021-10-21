<?php require APPROOT . "/views/inc/header.php" ?>

<body class="layout-template-1">
   <?php
   $selectedMain = "Sales";
   require APPROOT . "/views/receptionist/recept_sideNav.php"
   ?>

   <?php
   $title = "Sales";
   $username = "Devin Dissanayake";
   $userLevel = "Receptionist";
   require APPROOT . "/views/inc/headerBar.php"
   ?>

   <!--Content-->
   <div class="content recept sales">
      <form class="form filter-options" action="">
         <div class="options-container">
            <div class="left-section">
               <div class="row">
                  <div class="column">
                     <div class="text-group">
                        <label class="label" for="fName">Customer Name</label>
                        <input type="text" name="" id="fName" placeholder="Your first name here">
                     </div>
                     <span class="error"> <?php echo " "; ?></span>
                  </div>
                  <div class="column">
                     <div class="text-group">
                        <label class="label" for="fName">Contact No</label>
                        <input type="text" name="" id="fName" placeholder="Your first name here">
                     </div>
                     <span class="error"> <?php echo " "; ?></span>
                  </div>

                  <div class="column">
                     <div class="dropdown-group">
                        <label class="label" for="lName">Status</label>
                        <select>
                           <option value="" selected>Any</option>
                           <option value="volvo">Active</option>
                           <option value="saab">Inactive</option>
                        </select>
                     </div>
                     <span class="error"> <?php echo " "; ?></span>
                  </div>
               </div>
            </div>
            <div class="right-section">
               <a href="" class="btn btn-filled btn-black">Search</a>
               <!-- <button class="btn btn-search">Search</button> -->
            </div>
         </div>

      </form>

      <div class="table-container">
         <div class="table2 table2-responsive">
            <table class="table2-hover">
               <thead>
                  <tr>
                     <th class="column-center-align col-1">Invoice No</th>
                     <th class="column-center-align col-2">Amount</th>
                     <th class="column-center-align col-3">Type</th>
                     <th class="column-center-align col-4">Date</th>
                     <th class="column-center-align col-5">Status</th>
                     <th class="col-6"></th>
                  </tr>
               </thead>

               <tbody>
                  <tr>
                     <td data-lable="Invoice No" class="column-center-align font-numeric">I000001</td>
                     <td data-lable="Amount" class="column-left-align font-numeric">750.00 LKR</td>
                     <td data-lable="Type" class="column-center-align">Payment</td>
                     <td data-lable="Date" class="column-center-align">2021-10-14</td>
                     <td data-lable="Status" class="column-center-align">
                        <button type="button" class="table-btn green-status-btn text-uppercase">Active</button>
                     </td>
                     <td class="column-center-align">
                        <span>
                           <a href="#"><i class="ci-view-more table-icon"></i></a>
                           <?php if ($userLevel == "Owner") : ?>
                              <a href="#"><i class="ci-trash table-icon btnRemoveCustomer"></i></a>
                           <?php endif; ?>
                        </span>
                     </td>
                  </tr>




               </tbody>
            </table>
         </div>
      </div>
   </div>
   <!--End Content-->

   <?php require APPROOT . "/views/inc/footer.php" ?>