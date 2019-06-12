(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  $('.product-cycle .owl-carousel').owlCarousel({
    stagePadding: 300,
    loop:true,
    margin:15,
    nav:false,
    autoplay:true,
    responsive:{
        0:{
            items:1,
    stagePadding: 0    
        },
        600:{
            items:1,
    stagePadding: 20
    
        },
        1000:{
            items:1
        }
    },
    dots:false,
    dotsContainer: '#carousel-custom-dots',
    autoplayHoverPause:true,
    afterAction: function(el){
      debugger;
      //remove class active
      this
      .$owlItems
      .removeClass('active')
      $(".owl-dot").removeClass("active-cycle");
      //add class active
      this
      .$owlItems //owl internal $ object containing items
      .eq(this.currentItem + 1)
      .addClass('active')    
       } 
      
       
})
$('.product-cycle .owl-dot').click(function () {
  $('.product-cycle .owl-carousel').trigger('to.owl.carousel', [$(this).index(), 300]);
  $(".product-cycle .owl-dot").removeClass("active-cycle");
  $(this).addClass("active-cycle");
});
$('.product-cycle .owl-carousel').on('changed.owl.carousel', function(event) {
 var currentId=$(".owl-item.active").children(".slider-item").attr("id");
 var arr = currentId.split('-');
 var strFile = arr[arr.length-1];
 if(strFile==4){
  $(".product-cycle .owl-dot").removeClass("active-cycle");
  $(".owl-item-0").addClass("active-cycle")
 }
 else{
 
  var nxtnum=strFile*1+1
  var nxtId=arr[0]+"-"+arr[1]+"-"+nxtnum
  $(".product-cycle .owl-dot").removeClass("active-cycle");
  $("."+nxtId).addClass("active-cycle")
 }
})
$('.brands-section .owl-carousel').owlCarousel({
  loop:true,
  margin:5,
  nav:true,
  dots:false,
  autoplay:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:3
      }
  },
  navText : ['<i class="fas fa-arrow-circle-left" aria-hidden="true"></i>','<i class="fas fa-arrow-circle-right" aria-hidden="true"></i>']
})

})(jQuery); // End of use strict
