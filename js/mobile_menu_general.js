//Мобильное меню GENERAL===================================
let bgMenuGeneral = document.querySelector("#bg_menu_general");
let mobileMenuGeneral = document.querySelector(".mobile_menu_general");
let closeMobileMenuGeneral = document.querySelector(".close_mobile_menu_general");

bgMenuGeneral.onclick = function(){
   mobileMenuGeneral.style.display = "flex";
}
closeMobileMenuGeneral.onclick = function(){
   mobileMenuGeneral.style.display = "none";
}