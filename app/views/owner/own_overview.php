<?php require APPROOT . "/views/inc/header.php" ?>

<body class="layout-template-1">
   <?php
   $selectedMain = "Overview";
   $selectedSub = "";
   require APPROOT . "/views/owner/own_sidenav.php"
   ?>

   <?php
   $title = "Overview";
   require APPROOT . "/views/inc/headerBar.php"
   ?>

   <!--Content-->
   <div class="content own overview">
      <!-- owner overview Container starts -->
      <div class="ownOverviewContainer">
         <div class="ownOverviewCardContainer">
            <!-- owner overview available managers card starts -->
            <div class="ownOverviewContainerCard1">
               <div class="mang-sub-container-card-title">
                  <p>Available Managers(Today)</p>
               </div>
               <div class="mang-sub-container-card-amount">
                  <p><?php echo $data['activeManagers']?></p>
               </div>
            </div>
            <!-- owner overview available managers card ends -->


            <!-- owner overview total income card starts -->
            <div class="ownOverviewContainerCard2">
               <div class="mang-sub-container-card-title">
                  <p>Total Income(Annual)</p>
               </div>
               <div class="mang-sub-container-card-amount">
                  <p> <?php echo $data['totalIncome'][0]->totalIncome?> LKR</p>
               </div>
            </div>
            <!-- owner overview total income card ends -->

            <!-- owner overview available managers card starts -->
            <div class="ownOverviewContainerCard3">
               <div class="mang-sub-container-card-title">
                  <p>Total Customers</p>
               </div>
               <div class="mang-sub-container-card-amount">
                  <p><?php echo $data['activeCustomers']?></p>
               </div>
            </div>

         </div>

         <!-- owner overview charts card starts -->
         <div class="ownOverviewCharts">

            <!-- owner overview chart1 card starts -->

            <div class="ownOverviewChart1">
               <div class="chartHead">
                  <p> Staff Members </p>
               </div>
               <canvas id="ownOverviewChartAvailableEmployees"></canvas>
            </div>
            <!-- owner overview chart1 card ends -->

            <!-- owner overview chart2 card starts -->
            <div class="ownOverviewChart2">
               <div class="chartHead">
                  <p>Income </p>
               </div>
               <canvas id="ownOverviewChartIncome"></canvas>
            </div>
            <!-- owner overview chart2 card ends -->

         </div>
         <!-- owner overview charts card ends -->

      </div>
      <!-- owner overview Container ends -->
   </div>

   </div>
   <!--End Content-->

   <?php require APPROOT . "/views/inc/footer.php" ?>