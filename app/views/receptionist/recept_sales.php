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
                     <div class="dropdown-group">
                        <label class="label" for="lName">Invoice Type</label>
                        <select id="iTypeSelector">
                           <option value="" selected>All</option>
                           <option value="">Payment</option>
                           <option value="">Refund</option>
                        </select>
                     </div>
                     <span class="error"> <?php echo " "; ?></span>
                  </div>
                  <div class="column">
                     <div class="dropdown-group">
                        <label class="label" for="lName">Status</label>
                        <select id="statusSelector">
                           <option value="" selected>All</option>
                           <option value="">Pending</option>
                           <option value="">Completed</option>
                           <option value="">Voided</option>
                        </select>
                     </div>
                     <span class="error"> <?php echo " "; ?></span>
                  </div>
               </div>
            </div>
            <div class="right-section">
               <button type="button" id="salesFilterBtn" class="btn btn-filled btn-black">Search</button>
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
                     <th class="column-center-align col-4">Date & Time</th>
                     <th class="column-center-align col-5">Status</th>
                     <th class="col-6"></th>
                  </tr>
               </thead>

               <tbody>

                  <?php foreach ($data as $invoice) : ?>
                     <!-- invoice type payment  -->
                     <?php if ($invoice->type == 1) :
                        $statusClassList = ["red", "yellow", "green"];
                        $statusValueList  = ["Voided", "Unpaid", "Paid"];
                        $statusClass = $statusClassList[$invoice->status];
                        $statusValue = $statusValueList[$invoice->status]; ?>
                        <tr>
                           <td data-lable="Invoice No" class="column-center-align font-numeric">Pay_<?php echo $invoice->paymentInvoiceNo ?></td>
                           <td data-lable="Amount" class="column-right-align font-numeric"><?php echo $invoice->amount ?> LKR</td>
                           <td data-lable="Type" class="column-center-align">Payment</td>
                           <td data-lable="Date" class="column-center-align"><?php echo DateTimeExtended::dateToShortMonthFormat($invoice->datetime, "F") ?></td>
                           <td data-lable="Status" class="column-center-align">
                              <button type="button" class="status-btn green text-uppercase <?php echo $statusClass ?>"><?php echo $statusValue ?></button>
                           </td>
                           <td class="column-center-align">
                              <span>
                                 <a href="<?php echo URLROOT . "/ReceptDashboard/invoiceView/" . $invoice->paymentInvoiceNo . "/" . $invoice->type ?>"><i class="ci-view-more table-icon"></i></a>
                              </span>
                           </td>
                        </tr>
                     <?php else :
                        $statusClassList = ["red", "yellow"];
                        $statusValueList  = ["Voided", "Refunded"];
                        $statusClass = $statusClassList[$invoice->status];
                        $statusValue = $statusValueList[$invoice->status]; ?>
                        <tr>
                           <td data-lable="Invoice No" class="column-center-align font-numeric">Ref_<?php echo $invoice->refundInvoiceNo ?></td>
                           <td data-lable="Amount" class="column-right-align font-numeric"><?php echo $invoice->amount ?> LKR</td>
                           <td data-lable="Type" class="column-center-align">Refund</td>
                           <td data-lable="Date" class="column-center-align"><?php echo $invoice->datetime ?></td>
                           <td data-lable="Status" class="column-center-align">
                              <button type="button" class="status-btn green text-uppercase <?php echo $statusClass ?>"><?php echo $statusValue ?></button>
                           </td>
                           <td class="column-center-align">
                              <span>
                                 <a href="<?php echo URLROOT . "/ReceptDashboard/invoiceView/" . $invoice->refundInvoiceNo . "/" . $invoice->type ?>"><i class="ci-view-more table-icon"></i></a>
                              </span>
                           </td>
                        </tr>
                     <?php endif; ?>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <!--End Content-->

   <?php require APPROOT . "/views/inc/footer.php" ?>
