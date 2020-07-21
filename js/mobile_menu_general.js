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

//Меню алфавит=============================================
let menuAlphabet = document.querySelector("#menu_alphabet");
let menuAlphabetGeneral = document.querySelector(".menu_alphabet_general");
let closeAlphabetMenuGeneral = document.querySelector(".close_alphabet_menu_general");
let mobileMenuAlphabet = document.querySelector("#mobile_menu_alphabet");//мобильное меню алфавита

menuAlphabet.onclick = function(){
   menuAlphabetGeneral.style.display = "grid";
}
closeAlphabetMenuGeneral.onclick = function(){
   menuAlphabetGeneral.style.display = "none";
}

mobileMenuAlphabet.onclick = function(){//мобильное меню алфавита
   menuAlphabetGeneral.style.display = "grid";
   mobileMenuGeneral.style.display = "none";
}