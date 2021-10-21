  <!--Header(Top Bar)-->
  <header>
     <!--Header left section-->
     <div class="header-left verticalCenter">
        <i class="fas fa-bars fa-2x header-menu_icon"></i>
        <h1 class="header-title"><?php echo $title ?></h1>
     </div>
     <!--End header left section-->

     <!--Header profile section-->

     <div class="header-profile">
        <img class="header-profilepic" src="<?php echo URLROOT ?>/public/imgs/person1.jpg"></img>
        <span class="header-username"><?php echo $username ?></span>
        <span class="header-userRole"><?php echo $userType ?></span>
        <div class="header-profile-arrow">
           <i class="fas fa-chevron-down"></i>
        </div>
     </div>
     <!--Header profile menu-->
     <div class="profile_menu">
        <ul>
           <li>
              <i class="far fa-user"></i>
              <a href="<?php echo URLROOT ?>/home">Home Page</a>
           </li>
           <li>
              <i class="far fa-cog"></i>
              <a href="<?php echo URLROOT ?>/staffUser/profile">Profile Settings</a>
           </li>
           <li>
              <i class="far fa-sign-out"></i>
              <a href="<?php echo URLROOT ?>/user/signout">Sign Out</a>
           </li>
        </ul>
     </div>
     <!--End header profile menu-->
  </header>
  <!--End Header(Top Bar)-->