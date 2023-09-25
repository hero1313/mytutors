function closeFunction(){
    document.getElementById("menu").style.width="0px"
    
}
function openrooms(){
    document.getElementById("room-box").style.display="block"
    
}


$( ".fa-bars" ).click(function() {

  $("#menu").css("width", "300px");

});


var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 2,
    spaceBetween: 30,
    loop:true,
    pagination: {
      
      clickable: true,
    },
     autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    breakpoints: {
      340: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      370: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      590: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      690: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      864: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
      964: {
        slidesPerView: 4,
        spaceBetween: 10,
      },

      1124: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      1224: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      1324: {
        slidesPerView: 4,
        spaceBetween: 0,
      },
      1424: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
      1524: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
      1624: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
      1724: {
        slidesPerView: 6,
        spaceBetween: 10,
      },
      1824: {
        slidesPerView: 6,
        spaceBetween: 0,
      },
      1924: {
        slidesPerView: 6,
        spaceBetween: 0,
      },
    
    },
    
  });

  var swiper = new Swiper(".mySwiper21", {
    freeMode: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
     450: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      700: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      900: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 20,
      },}
  });

  