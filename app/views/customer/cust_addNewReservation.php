<?php require APPROOT . "/views/customer/cust_headerBar.php"; ?>
<!-- Configure this using session variables later -->
<?php $userID = $_SESSION['userID']; ?>

<div class="content cust new-res">
   <div class="main-container">
      <a href="<?php echo URLROOT ?>/custDashboard/myReservations" class="btn btn-filled btn-black goBackBtn">Go
         Back</a>
      <h1>New Reservation</h1>
      <form action="<?php echo URLROOT; ?>/reservations/newReservationCust" method="post" class="form">
         <div class="row">
            <div class="column">
               <div class="text-group">
                  <label class="label" for="fName">Date</label>
                  <input type="date" id="" name="date" value="<?php echo $data['date']; ?>">
                  <span class="error"><?php echo $data['date_error']; ?></span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="column">
               <div class="dropdown-group">
                  <label class="label" for="lName">Start Time</label>
                  <select name="startTime" id="">
                     <option value="" selected disabled>Select</option>
                     <?php for ($i = 9; $i <= 18; $i += 1) : ?>
                        <?php for ($j = 0; $j <= 50; $j += 10) : ?>
                           <option value="<?php echo $i * 60 + $j; ?>" class=font-numeric <?php if ($data['startTime'] == $i * 60 + $j) echo "selected"; ?>>
                              <?php echo str_pad($i, 2, "0", STR_PAD_LEFT) . ' : ' . str_pad($j, 2, "0", STR_PAD_LEFT); ?>

                           </option>
                        <?php endfor; ?>
                     <?php endfor; ?>
                  </select>
                  <span class="error"><?php echo $data['startTime_error']; ?></span>
               </div>
            </div>
            <div class="column">
               <div class="dropdown-group">
                  <label class="label" for="lName">Service</label>
                  <select name="serviceID" id="" class="serviceSelect">
                     <option value="" selected disabled>Select</option>
                     <?php foreach ($data['servicesList'] as $service) : ?>
                        <option value="<?php echo $service->serviceID ?>"><?php echo $service->name ?></option>
                     <?php endforeach; ?>
                  </select>
                  <span class="error"><?php echo $data['serviceID_error']; ?></span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="column">
               <div class="text-group">
                  <label class="label" for="fName">Duration</label>
                  <input type="text" name="duration" id="fName" disabled class="durationBox">
               </div>
            </div>
            <div class="column">
               <div class="dropdown-group">
                  <label class="label" for="lName">Service Provider</label>
                  <select name="staffID" id="" class="serviceProviderSelect">
                     <option value="" selected disabled>Select service first</option>
                  </select>
                  <span class="error"><?php echo $data['staffID_error']; ?></span>
               </div>

            </div>
         </div>
         <div class="row">
            <div class="text-group">
               <label class="label" for="fName">Remarks</label>
               <textarea name="remarks" id="" cols="30" rows="3" maxlength="200"></textarea>
            </div>
            <span class="error"><?php echo $data['remarks_error']; ?></span>
         </div>

         <button type="submit" class="btn btn-filled btn-theme-red addResBtn">Add Reservation</button>
         <div class="row hideElement">
            <div class="column">
               <div class="text-group">
                  <label class="label" for="fName">Customer</label>
                  <input type="text" name="customerID" id="fName" value="<?php echo $_SESSION['userID']; ?>">
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<script src="<?php echo URLROOT ?>/public/js/home.js"></script>
<script src="<?php echo URLROOT ?>/public/js/fetchRequests.js"></script>
</body>

</html>