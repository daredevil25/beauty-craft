/* -------------------sideNav Scripts-------------------- */
/* ------ --- -- - ------------- -------- -- ------------- -- ----*/                                           
/* ----------------- JS ADDED BY DEVIN -------------------*/
/* ------------------------------------------------------ */

// full side nav
// var sideNav = document.querySelector(".sidebar");
// console.log(sideNav);
// sideNav.addEventListener("mouseover", function() {
//    sideNav.classList.add("expanded");
// });
// sideNav.addEventListener("mouseout", function() {
//    sideNav.classList.remove("expanded");
// });

// main menu links
var mainLinks = document.querySelectorAll(".mainOption > .optionLink");

// currently active main link
var activeLink = document.querySelector(".selected");

// main menu link event listener
for (var i = 0; i < mainLinks.length; i++) {
   mainLinks[i].addEventListener('click', selectMainLink);
}

// Marks the main menu link as unselected
function toggleMainSelection(currentMainLink) {
   for (var i = 0; i < mainLinks.length; i++) {
      if (mainLinks[i] != activeLink) {
         if (mainLinks[i] != currentMainLink) {
            mainLinks[i].classList.remove("selected");
         } else {
            mainLinks[i].classList.toggle("selected");
         }
      }
   }
}

// Toggles the submenu
function toggleSubMenu(currentMainLink) {
   for (var i = 0; i < mainLinks.length; i++) {
      var subList = mainLinks[i].parentElement.querySelector('.subMenu');
      // toggle only if a sublist is available
      if (subList) {
         var arrow = mainLinks[i].querySelector('.optionArrow')
         // other sub menus are collapsed
         if (mainLinks[i] != currentMainLink) {
            subList.classList.remove("expanded");
            arrow.classList.remove("rotated180");
         }
         // current sub menu is toggled
         else {
            subList.classList.toggle("expanded");
            arrow.classList.toggle("rotated180");
         }
      }
   }
}

// Marks the main menu link as selected
function selectMainLink() {
   x = this.parentElement.querySelector(".subMenu")
   
   // toggles are performed only if a sidebar is available
   if (x) {
      toggleSubMenu(this);
      toggleMainSelection(this);
   }
}

/* ------------------------------------------------------ */
/* ------------- END OF JS ADDED BY DEVIN ----------------*/
/* ------------------------------------------------------ */