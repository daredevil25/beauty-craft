<?php require APPROOT . "/views/inc/header.php" ?>

<body class="layout-template-1">
   <?php
   $selectedMain = "Analytics";
   $selectedSub = "";
   require  APPROOT . "/views/manager/mang_sideNav.php"
   ?>

   <?php
   $title = "Analytics";
   require APPROOT . "/views/inc/headerBar.php"
   ?>

   <!--Content-->
   <div class="content">
      <h3>This is main option 1</h3>
   </div>
   <!--End Content-->


   <?php require APPROOT . "/views/inc/footer.php" ?>