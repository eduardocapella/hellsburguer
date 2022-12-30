let menuMobile = document.querySelector(".menu-mobile");
let mainNavigation = document.querySelector(".main-navigation");

menuMobile.addEventListener("click", () => {
     menuMobile.classList.toggle('active');
     mainNavigation.classList.toggle('active');

});
$('.menu-mobile').on('click',function(){
     $('.btn-franqueado').show(); // aparece o div
     
 });

    

