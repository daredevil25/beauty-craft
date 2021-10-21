<!DOCTYPE html>
<html>

<head>
   <!--Meta-->
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale = 1.0" />

   <title>Beauty Craft</title>

   <!--Style Sheets-->
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
   <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
   <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/home.css">
   <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/icons.css">
   <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/whychoosesUs.css"/>
   <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/homePageFooter.css" />

</head>

<body class="landingPage customerPages">
   <header>
      <nav>
         <div class="logo">
            <a href="index.html">
               <img src="<?php echo URLROOT ?>/public/imgs/logoTextWhite.png" alt="logo">
            </a>
         </div>
         <div class="links">
            <i class="ci ci-x-white closeBtn"></i>
            <ul>
               <li><a href="">Home</a></li>
               <li><a href="">Services</a></li>
               <li><a href="">Staff</a></li>
               <li><a href="">Gallery</a></li>
               <li><a href="">Contact</a></li>
            </ul>
         </div>

         <div class="buttons">
            <?php if (isset($_SESSION['userMobileNo'])) : ?>
            <div class="profileIcon">
               <img src="<?php echo URLROOT ?>/public/imgs/person4.jpg" alt="">
            </div>

            <?php else : ?>
            <a href="<?php echo URLROOT ?>/user/signin" class="btn-landing btnLogin">
               <span>Sign In</span>
            </a>
            <a href="<?php echo URLROOT ?>/customer/register" class="btn-landing btnRegister">
               <span>Register</span>
            </a>
            <?php endif; ?>

            <i class="ci ci-menu-white menuBtn"></i>
         </div>
      </nav>
      <div class="bottom">
         <div class="text">
            <span>Redefining Your </span><span class="red">BEAUTY</span>
         </div>
         <div class="break"></div>
         <div>
            <button class="btn-landing btnMakeRes"> Make a Reservation </button>
         </div>
      </div>
      <div class="profile_menu">
         <ul>
            <li>
               <?php if ($_SESSION['userType'] == 6) : ?>
               <i class="far fa-user"></i>
               <a href="<?php echo URLROOT ?>/custDashboard/myReservations">My Reservations</a>
               <?php else : ?>
               <i class="far fa-user"></i>
               <a href="<?php echo URLROOT ?>/user/provideIntialView">Dashboard</a>
               <?php endif; ?>
            </li>
            <li>
               <i class="far fa-cog"></i>
               <a href="<?php echo URLROOT ?>/custDashboard/profileSettings">Profile Settings</a>
            </li>
            <li>
               <i class="far fa-sign-out"></i>
               <a href="<?php echo URLROOT ?>/user/signout">Sign Out</a>
            </li>
         </ul>
      </div>
   </header>

   <div class="features section WCH ">
      <span class="title">WHY CHOOSE US</span>
      <div class="cardContainer">

         <div class="card1 contentBox">
            <div class="image">
            <img src="<?php echo URLROOT ?>/public/icons/icons8-feedback-117.png" alt="">
            </div>
            <h3>Keeping clients happy</h3>
            <p> We believe all clients should get a better service from Us, so we only use top quality products at the basin area, and at the styling stations. Our salon only uses top quality PROFESSIONAL PRODUCTS, to ensure you get the right result every time.</p>
         </div>

         <div class="card2 contentBox">
         <div class="image">
            <img src="<?php echo URLROOT ?>/public/icons/icons8-man-combing-hair-100.png" alt="">
            </div>
            <h3>Pioneers In industry</h3>
            <p>As a pioneer in the salon industry, we have been providing a number of services with high customer satisfaction in the salon industry for many years.</p>
         </div>

         <div class="card3 contentBox">
            <div class="image">
            <img src="<?php echo URLROOT ?>/public/icons/icons8-hairdresser-100.png" alt="">
            </div>
            <h3>Well experienced team</h3>
            <p>Our service providers have good experience in the industry and we always strive to provide better service to clients.!</p>

         </div>

         <div class="card4 contentBox">
            <div class="image"> 
            <img src="<?php echo URLROOT ?>/public/icons/icons8-valet-parking-100.png" alt="" >
            </div>
            <h3>Free Parking</h3>
            <p>You can park your vehicle in our parking area at no extra charge without any security issues.</p>

         </div>

      </div>
   </div>
   <div class="services section ">
      <span class="title">OUR SERVICES</span>

      <div class="slideshow-container">
         <!-- slide 1 -->
         <div class="mySlides fade">
            <div class="cardContainer">
               <!-- card 1 -->
               <div class="card1">
                  <div class="cardHead">
                     <h3>Hair Cuts</h3>
                  </div>
                  <div class="cardDetails">
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Mens’ Haircut
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs.500
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Ladies’ Haircut (Long Hair)
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs.500
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Ladies’ Haircut (Short Hair)
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs.400
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn ">
                           <label class="CardDetailsLabel">
                              Kids’ Haircut
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs.350
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids’ Haircut
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs.350
                           </span>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- card 2 -->
               <div class="card2">
                  <div class="cardHead">
                     <h3>Hair Cuts</h3>
                  </div>
                  <div class="cardDetails">
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- slide 2 -->

         <div class="mySlides fade">
            <div class="cardContainer">
               <!-- card 1 -->
               <div class="card1">
                  <div class="cardHead">
                     <h3>Hair Cuts</h3>
                  </div>
                  <div class="cardDetails">
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- card 2 -->
               <div class="card2">
                  <div class="cardHead">
                     <h3>Hair Cuts</h3>
                  </div>
                  <div class="cardDetails">
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>



         <!-- slide 2 -->

         <div class="mySlides fade">
            <div class="cardContainer">
               <!-- card 1 -->
               <div class="card1">
                  <div class="cardHead">
                     <h3>Hair Cuts</h3>
                  </div>
                  <div class="cardDetails">
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- card 2 -->
               <div class="card2">
                  <div class="cardHead">
                     <h3>Hair Cuts</h3>
                  </div>
                  <div class="cardDetails">
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>


         <!-- slide 2 -->

         <div class="mySlides fade">
            <div class="cardContainer">
               <!-- card 1 -->
               <div class="card1">
                  <div class="cardHead">
                     <h3>Hair Cuts</h3>
                  </div>
                  <div class="cardDetails">
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- card 2 -->
               <div class="card2">
                  <div class="cardHead">
                     <h3>Hair Cuts</h3>
                  </div>
                  <div class="cardDetails">
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                     <div class="cardRow">
                        <div class="cardColumn">
                           <label class="CardDetailsLabel">
                              Kids Hair cuts
                           </label>
                        </div>
                        <div class="cardColumn">
                           <span class="CardDetailsValue">
                              Rs. 20000
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>




         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
         <a class="next" onclick="plusSlides(1)">&#10095;</a>

      </div>
      <br>

      <div style="text-align:center">
         <span class="dot" onclick="currentSlide(1)"></span>
         <span class="dot" onclick="currentSlide(2)"></span>
         <span class="dot" onclick="currentSlide(3)"></span>
      </div>




   </div>

   <div class="team section MOT-section">
      <span class="title">MEET OUR TEAM</span>
      <div class="horizontal_slider " id="horizontal_slider">
         <section>
            <div class="MOT-box">
               <img src="<?php echo URLROOT ?>/public/imgs/person1.jpg" class="pro-img" alt="">

               <p class="pro-name">Devin Dissanayake</p>
            </div>
         </section>
         <section>
            <div class="MOT-box">
               <img src="<?php echo URLROOT ?>/public/imgs/person2.jpg" class="pro-img" alt="">

               <p class="pro-name">Ravindu Madhubhashana</p>
            </div>
         </section>
         <section>
            <div class="MOT-box">
               <img src="<?php echo URLROOT ?>/public/imgs/person3.jpg" class="pro-img" alt="">

               <p class="pro-name">Ruwanthi Munasinghe</p>
            </div>
         </section>
         <section>
            <div class="MOT-box">
               <img src="<?php echo URLROOT ?>/public/imgs/person1.jpg" class="pro-img" alt="">

               <p class="pro-name">Sanjana Rajapaksha</p>
            </div>
         </section>
         <section>
            <div class="MOT-box">
               <img src="<?php echo URLROOT ?>/public/imgs/person2.jpg" class="pro-img" alt="">

               <p class="pro-name">Devin Dissanayake</p>
            </div>
         </section>
         <section>
            <div class="MOT-box">
               <img src="<?php echo URLROOT ?>/public/imgs/person3.jpg" class="pro-img" alt="">

               <p class="pro-name">Sumudu Perera</p>
            </div>
         </section>
      </div>
   </div>
   <div class="gallery section">
      <span class="title">GALLERY</span>
      <div class="gallarycontent">
         <div class="grid">
            <div class="grid-inner">
               <div class="item">
                  <div class="item-inner"></div>
               </div>
               <div class="item">
                  <div class="item-inner"></div>
               </div>
               <div class="item">
                  <div class="item-inner"></div>
               </div>
               <div class="item">
                  <div class="item-inner"></div>
               </div>
               <div class="item">
                  <div class="item-inner"></div>
               </div>
               <div class="item">
                  <div class="item-inner"></div>
               </div>
               <div class="item">
                  <div class="item-inner"></div>
               </div>
               <div class="item">
                  <div class="item-inner"></div>
               </div>
               <div class="item">
                  <div class="item-inner"></div>
               </div>
               <div class="item">
                  <div class="item-inner"></div>
               </div>

            </div>
         </div>

      </div>

   </div>
   <div class="testimonials section WTS-section">
      <div class="WTS-section-head">
         <span class="title">WHAT THEY SAY</span>
      </div>

      <div class="slideshow-container">

         <div class="mySlides">
            <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias laudantium voluptas animi amet beatae
               aliquid
               praesentium quisquam repellat consequatur rem, quas, voluptatum nisi ipsa, earum nihil sequi corrupti
               commodi
               alias?</q>
            <div class="img-div">
               <img src="<?php echo URLROOT ?>/public/imgs/person1.jpg" alt="">
               <p class="author">- Ruwanthi Munasinghe</p>
            </div>
         </div>

         <div class="mySlides">
            <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ducimus labore a earum unde! Dolor
               asperiores
               rerum deleniti architecto, ab fugiat delectus veniam aut laboriosam nostrum, autem natus dolores,
               cupiditate quam.
               Sed a voluptatibus doloribus iste exercitationem vel doloremque cumque reprehenderit officia, repellendus
               labore
               quasi quam inventore cum nesciunt excepturi eligendi nostrum incidunt quibusdam culpa ab delectus
               beatae.</q>
            <div class="img-div">
               <img src="<?php echo URLROOT ?>/public/imgs/person2.jpg" alt="">
               <p class="author">- Sanjana Rajapaksha</p>
            </div>
         </div>

         <div class="mySlides">
            <q>Voluptatibus, excepturi consequatur! Rerum, ab sapiente magni vel voluptatum eum, nulla neque accusantium
               placeat
               amet quam blanditiis. Officiis exercitationem inventore molestias quam, magni, natus necessitatibus
               minima,
               laboriosam eveniet et similique. Consequatur tenetur sint dicta alias. Omnis amet dolor quae sint quia
               similique.</q>
            <div class="img-div">
               <img src="<?php echo URLROOT ?>/public/imgs/person3.jpg" alt="">
               <p class="author">- Devin Dissanayake</p>
            </div>
         </div>

         <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
         <a class="next" onclick="plusSlides2(1)">&#10095;</a>
      </div>

      <div class="dot-container">
         <span class="dot" onclick="currentSlide2(1)"></span>
         <span class="dot" onclick="currentSlide2(2)"></span>
         <span class="dot" onclick="currentSlide2(3)"></span>
      </div>
   </div>

   <div>
      <div class="homepagefooter">
         <div class="homefooterleft">
            <div class="footerlogosection">
               <img src="<?php echo URLROOT ?>/public/imgs/logoAllWhite.png">
            </div>
         </div>
         <div class="homefootermiddle">
            <div class="homefootermiddledata">
               <div class="footersection1">Stay Connected</div>
               <div class="footersection2">0123456789</div>
               <div class="footersection2">0123456789</div>
               <div class="footersection3">beautycraft@gmail.com</div>
               <div class="footersection4">
                  <img src="<?php echo URLROOT ?>/public/icons/facebook.png" alt="">
                  <img src="<?php echo URLROOT ?>/public/icons/Instagram.png" alt="">

               </div>

            </div>

         </div>
         <div class="homefooterright">
            <div class="footerrighttitle">
               Opening Hours
            </div>
            <div class="footerdatesection">
               <div class="homefooterright-left">
                  <div class="dayfooter">Monday</div>
                  <div class="dayfooter">Tuesday</div>
                  <div class="dayfooter">Wednesday</div>
                  <div class="dayfooter">Thursday</div>
                  <div class="dayfooter">Friday</div>
                  <div class="dayfooter">Saturday</div>
                  <div class="dayfooter">Sunday</div>
               </div>
               <div class="homefooterright-right">
                  <div class="dayfooter">9am - 8pm</div>
                  <div class="dayfooter">9am - 8pm</div>
                  <div class="dayfooter">9am - 8pm</div>
                  <div class="dayfooter">9am - 8pm</div>
                  <div class="dayfooter">9am - 8pm</div>
                  <div class="dayfooter">9am - 8pm</div>
                  <div class="dayfooter">9am - 8pm</div>
               </div>
            </div>
         </div>
      </div>
   </div>

 
   <script src="<?php echo URLROOT ?>/public/js/home.js"></script>

</body>

</html>