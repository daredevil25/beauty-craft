<?php require APPROOT . "/views/inc/header.php" ?>

<body class="ownViewStaffBody layout-template-2">


   <header class="full-header">
      <div class="header-center verticalCenter">
         <h1 class="header-topic">Purchase Details</h1>
      </div>
      <div class="header-right verticalCenter">
         <!-- you have to specify the user roll ?????????????????????????????????????????????????????????????????????????? -->


         <a href="
         <?php
         echo URLROOT;
         if ($userTypeNo == 2) echo "/OwnDashboard/resources";
         elseif ($userTypeNo == 3) echo "/MangDashboard/resources";
         elseif ($userTypeNo == 4) echo "/ReceptDashboard/resources";
         ?>" class="top-right-closeBtn"><i class="fal fa-times fa-2x "></i></a>

      </div>
   </header>
   <div class="content contentNewRes own ViewCustomer">




<form class="form filter-options" action="">
   <div class="options-container">
      <div class="left-section">
         <div class="row">
            <div class="column">
               <div class="text-group">
                  <label class="label" for="fName">Manifacturer</label>
                  <input type="text" name="" id="fName" placeholder="Resource name here">
               </div>
               <span class="error"> <?php echo " "; ?></span>
            </div>
            <div class="column">
               <div class="text-group">
                  <label class="label" for="fName">Purchase ID</label>
                  <input type="text" name="" id="fName" placeholder="Resource ID here">
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
               <th class="column-center-align col-1">Purchase ID</th>
               <th class="column-center-align col-2">Manufacturer</th>
               <th class="column-center-align col-2">Model No</th>
               <th class="column-center-align col-2">Price</th>
               <th class="column-center-align col-2">Purchase Date</th>
               <th class="column-center-align col-3">Warranty Expiration Date</th>
               <th class="col-7"></th>
            </tr>
         </thead>
<!-- <?php print_r($data); ?> -->
         <tbody>
         <?php foreach ($data as $purchaseD) : ?>
            <tr>
           
                  <td class="column-center-align"><?php echo $purchaseD->purchaseID; ?></td>
                  <td class="column-center-align"><?php echo $purchaseD->manufacturer; ?></td>
                  <td class="column-center-align"><?php echo $purchaseD->modelNo; ?></td>
                  <td class="column-center-align"><?php echo $purchaseD->price; ?></td> 
                  <td class="column-center-align"><?php echo $purchaseD->purchaseDate; ?></td> 
                  <td class="column-center-align"><?php echo $purchaseD->warrantyExpDate; ?></td>                  
                  <td data-lable="Action" class="column-center-align">
                     <span>
                        <!-- <?php if ($userType == "Owner") : ?> -->
                           <a href="<?php echo URLROOT ?>/resources/updateResource/<?php echo $purchaseD->purchaseID; ?>/<?php echo $purchaseD->resourceID; ?>"><i class="ci-edit table-icon btnUpdateResource img-gap"></i></a>
                           <a href="#"><i class="ci-trash table-icon btnRemoveResource img-gap"></i></a> 
                        <!-- <?php endif; ?> -->
                     </span>
                  </td>
            </tr>
            <?php endforeach; ?>

         </tbody>
      </table>
   </div>
</div>
</div>


<!-- Remove Purchase Record model -->
<div class="modal-container remove-resource">
   <div class="modal-box">
      <div class="confirm-model-head">
      <?php print_r($purchaseD->purchaseID); ?>
         <h1>Remove Resource</h1>
      </div>
      <div class="confirm-model-head">
         <p>Are you sure you want to Remove the Resource ? <br> This action cannot be undone after proceeding.</p>
      </div>
      <div class="confirm-model-head">
         <button class="btn btnClose normal ModalButton ModalCancelButton">Close</button>
         <a href="<?php echo URLROOT ?>/resources/removePurchaseRecord/<?php echo $purchaseD->purchaseID; ?>/<?php echo $purchaseD->resourceID; ?>"><button class="btn normal ModalButton ModalBlueButton">proceed</button></a>
      </div>
   </div>
</div>
<!-- End of Remove Purchase Record model -->

<?php require APPROOT . "/views/inc/footer.php" ?>


