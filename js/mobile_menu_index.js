//ЛЕВОЕ МЕНЮ=================
let mobileLeftMenuIndex = document.querySelector(".mobile_left_menu_index");
let boxMenuIndex = document.querySelector(".box_menu_index");
let closeMobileLeftMenuIndex = document.querySelector(".close_mobile_left_menu_index");
let leftHeaderAlphabet = document.querySelector("#left_header_alphabet");

boxMenuIndex.onclick = function(){
   mobileLeftMenuIndex.style.display = "flex";
}
leftHeaderAlphabet.onclick = function(){
   boxAlphabet.style.display = "grid";
   mobileLeftMenuIndex.style.display = "none";
}
closeMobileLeftMenuIndex.onclick = function(){
   mobileLeftMenuIndex.style.display = "none";
}


//ПРАВОЕ МЕНЮ================
let boxAlphabet = document.querySelector(".box_alphabet");
let rightHeaderAlphabet = document.querySelector("#right_header_alphabet");
let closeAlphabetMenuIndex = document.querySelector(".close_alphabet_menu_index");

rightHeaderAlphabet.onclick = function(){
   boxAlphabet.style.display = "grid";
}
closeAlphabetMenuIndex.onclick = function(){
   boxAlphabet.style.display = "none";
}

// rightHeaderAlphabet.onclick = function(){
//    boxAlphabet.classList.add("demo");
// }
// closeAlphabetMenuIndex.onclick = function(){
//    boxAlphabet.classList.remove("demo");
// }