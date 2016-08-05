$(document).ready(function(){
	
  	absoluteCenter();

 $(function() {
      //$('div').delay(1000).fadeOut(400);
      $.scrollSpeed(100, 2000);
  });



$(".hamburger").click(function(e) {
  		e.preventDefault();
  		$(this).toggleClass( "open" );
  		$('.menu-nav').toggleClass( "open" );
	   });



var swiper = new Swiper('.homeslider', {
    pagination: '.pagin',
    paginationClickable: true,
    paginationBulletRender: function (index, className) {
        return '<span class="' + className + '">' + '<span>' + (index + 1) + '</span>' + '</span>';
    },
    /*nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',*/
    spaceBetween: 30,
    mousewheelControl: true,
    speed: 1500,
    effect: 'fade'
});

var swiper = new Swiper('.swiper-book', {
        nextButton: '.swiper-book-next',
        prevButton: '.swiper-book-prev',
        pagination: '.swiper-book-pagination',
        slidesPerView: 1,
        effect: 'fade',
        speed: 1000,
        paginationType: 'fraction'
    });

var swiper = new Swiper('.swiper-detail', {
        nextButton: '.swiper-book-next',
        prevButton: '.swiper-book-prev',
        pagination: '.swiper-book-pagination',
        slidesPerView: 1,
        effect: 'fade',
        autoplay: 2500,
        speed: 1000,
        paginationType: 'fraction'
    });


// FILTROS DEL PORTFOLIO
$(function(){
  $('#cuadernos-list').mixItUp({
    animation: {
    effects: 'fade',
    perspectiveOrigin: '0 0',
    perspectiveDistance: '10px',
    duration: 600 
  }
  });
});

// CUADERNO ABIERTO FUNCIONES
  $(".separator").click(function(e) {
      e.preventDefault();
      $(this).toggleClass( "active" );
      $('.pos3').toggleClass( "active" );
     });

  /*$(".open-book .modelo .raya p").click(function(e) {
        e.preventDefault();
        var nodo = $(this);
        var tipo = nodo.data('tipo');
        var instance = nodo.data('instance');
        
        if(tipo==1){
           nodo.data('tipo', 2);
               //var pepe = $('.'+instance+'a').clone().appendTo( ".active #element" );
               var pepe = $('<img alt="" src="'+instance+'" class="pos2"/>');
               pepe.appendTo( ".vista" );
               nodo.addClass('active');
            }
        else if(tipo==2){
           nodo.data('tipo', 1);
            nodo.removeClass('active');
            $('.active #element .'+instance+'a').remove();

        }

    });*/

//************************



adjustSize();
adjustSizeSlider();

// CONTACT FORM
	$("#contactForm").validate();

});

//***************************

 $(window).resize(function() {
	adjustSize();
	absoluteCenter();
	adjustSizeSlider();

});
//******************************

var element = 350;
$(window).scroll(function(){
  var y = $(window).scrollTop();
    if (y >= element){
     $(".header").addClass("stk");
    }else if (y < element){
     $(".header").removeClass("stk");
    }
});

//detecto tamaño de pantalla y doy estilo al slider-home segun el caso
function adjustSize(){
       var windowWidth = $(window).width(); 
       var windowHeight = $(window).height(); 
       var windowHeightHom = $(window).height() - 200; 
       $( ".homeslider" ).css({"height": windowHeight});
       $( ".diapo" ).css({"height": windowHeight});
       $( ".prod-detail .top" ).css({"height": windowHeight}); 
       $( ".bottomparalax" ).css({"height": windowHeight});     
       /*if (windowWidth>1023){                   
           $( ".homeslider" ).css({
				"height": windowHeight
		  	});                            
       } */
       if (windowWidth>1023){                   
           $( ".homeslider .book" ).css({
				"height": windowHeightHom
		  	});                            
       }                
}

function adjustSizeSlider(){
       var windowWidth = $('.imgb').width(); 
       var windowHeight = $(window).height(); 
       var windowHeightHom = $(window).height() - 230;
       $( ".limitheight" ).css({
				"height": windowHeightHom
		  	}); 
	  	$( ".prod-detail .top .book" ).css({
				"width": windowWidth + 20
		  	});   
                
}

//script para centrar contenido en vertical
var absoluteCenter = function(){
    $('.absoluteCenter', $("body")).each(function(i) {      
        var nodo = $(this);
        var parent = nodo.data("parent");
        var height_children = nodo.height();
        var height_parent = $('#' + parent).height();   
        var top = (height_parent - height_children) / 2;
        nodo.css("margin-top", top);
    }); 
}

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});