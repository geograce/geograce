//Мобильное меню RIGHT INDEX===============================
let bgRightMenuIndex = document.querySelector("#bg_right_menu_index");
let mobileRightMenuIndex = document.querySelector(".mobile_right_menu_index");
let closeMobileRightMenuIndex = document.querySelector(".close_mobile_right_menu_index");

bgRightMenuIndex.onclick = function(){
   mobileRightMenuIndex.style.display = "flex";
}
closeMobileRightMenuIndex.onclick = function(){
   mobileRightMenuIndex.style.display = "none";
}
//Мобильное меню LEFT INDEX================================
let bgLeftMenuIndex = document.querySelector("#bg_left_menu_index");
let mobileLeftMenuIndex = document.querySelector(".mobile_left_menu_index");
let closeMobileLeftMenuIndex = document.querySelector(".close_mobile_left_menu_index");

bgLeftMenuIndex.onclick = function(){
   mobileLeftMenuIndex.style.display = "flex";
}
closeMobileLeftMenuIndex.onclick = function(){
   mobileLeftMenuIndex.style.display = "none";
}