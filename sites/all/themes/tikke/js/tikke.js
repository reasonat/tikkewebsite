/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

/******* event when scroll  **********/
$(document).ready(function(){       
            var scroll_pos = 0;
            $(document).scroll(function() { 
                scroll_pos = $(this).scrollTop();
                if(scroll_pos > 0) {
                    $("body").addClass('scroll');
                } else {
                    $("body").removeClass('scroll');
                }
                if(scroll_pos > 500) {
                    $("#fixed-block").removeClass('hide-mobile');
                } else {
                    $("#fixed-block").addClass('hide-mobile');
                }
                /*******  site type - title desapeare when scroll  *********/
               if ($("body").hasClass("node-type-site")) {
                var place = 1-(scroll_pos/480);      
                document.getElementById('page-title').style.opacity = place;
                document.getElementById('second-title').style.opacity = place;
                if(scroll_pos > 500){
                    document.getElementById('page-title').style.display = "none";
                    document.getElementById('second-title').style.display = "none";
                } else{
                    document.getElementById('page-title').style.display = "block";
                    document.getElementById('second-title').style.display = "block";                
                }
                if(scroll_pos > 65){
                    $('#page-title').addClass("hide-small-mobile");
                    $('#second-title').addClass("hide-small-mobile");
                } else{
                    $('#page-title').removeClass("hide-small-mobile");
                    $('#second-title').removeClass("hide-small-mobile"); 
                }
                if(scroll_pos > 200){
                    $('#page-title').addClass("hide-medium-mobile");
                    $('#second-title').addClass("hide-medium-mobile");
                } else{
                    $('#page-title').removeClass("hide-medium-mobile");
                    $('#second-title').removeClass("hide-medium-mobile"); 
                }
             }
             if ($("body").hasClass("page-node-107")){
                if(scroll_pos > 0){
                  setTimeout(function() {
                        $('.row1').removeClass("hidden"); 
                  }, 100 ); // end delay
                  setTimeout(function() {
                        $('.row2').removeClass("hidden"); 
                  }, 1000 ); // end delay
                 setTimeout(function() {
                        $('.row3').removeClass("hidden"); 
                  }, 1900 ); // end delay
                  setTimeout(function() {
                        $('.row4').removeClass("hidden"); 
                  }, 2800 ); // end delay                }
              }
            }

            });
});

/************  responsive menu  **************/

$('body').addClass("menu-close");

$('#page').on('click', function() {
      $('body').removeClass('menu-open').addClass('menu-close');
});

$('.wrapper-bottom').on('click', function() {
      $('body').removeClass('menu-open').addClass('menu-close');
});

$('.mobile-menu').on('click', function() {
   if ( $( "body" ).hasClass( "menu-close" ) ) {
      $('body').removeClass('menu-close').addClass('menu-open');
        $i=200;
        $("#main-menu li a").each(function(index){
          $(this).delay($i).queue(function(){
          this.style.opacity = "1";
        });
        $i=$i+200;
  });
  }
  else{
      $('body').removeClass('menu-open').addClass('menu-close');
  }
});


/********* fixed block  *****************/

$('#fixed-block .main-button').on('click', function() {
   if ( $( "#fixed-block" ).hasClass( "close" ) ) {
    $('#fixed-block').removeClass('close').addClass('open');
      $('#fixed-block .link1').removeClass('hide').addClass('visible');
      $('#fixed-block .link2').removeClass('hide').addClass('visible');
      $('#fixed-block .link3').removeClass('hide').addClass('visible');
      $('#fixed-block .link4').removeClass('hide').addClass('visible');
  }
  else{
      $('#fixed-block').removeClass('open').addClass('close');
      $('#fixed-block .link1').removeClass('visible').addClass('hide');
      $('#fixed-block .link2').removeClass('visible').addClass('hide');
      $('#fixed-block .link3').removeClass('visible').addClass('hide');
      $('#fixed-block .link4').removeClass('visible').addClass('hide');
    }
});

/*******  arrow to bottom in site content and about page  **********/

if ($("body").hasClass("node-type-site")){
  $('.arrow-bottom').click(function(){
    $("html, body").animate({ scrollTop: $(".wrapper").offset().top -120 }, 2000);
    return false;
  });
}

if ($("body").hasClass("page-node-5")||$("body").hasClass("page-node-47") ){
  $('.arrow-bottom').click(function(){
      $("html, body").animate({ scrollTop: $(".field-name-body").offset().top -70 }, 2000);
      return false;
   });
}
/*********  numbers in about page ********/

if ($("body").hasClass("page-node-5")||$("body").hasClass("page-node-47") ){
  jQuery(document).ready(function($) {
    $('.num1').counterUp({
      delay: 10,
      time: 5500
    });
  });
  jQuery(document).ready(function($) {
    $('.num2').counterUp({
      delay: 10,
      time: 4000
    });
  });
  jQuery(document).ready(function($) {
    $('.num3').counterUp({
      delay: 10,
      time: 1000
    });
  });
  jQuery(document).ready(function($) {
    $('.num4').counterUp({
      delay: 10,
      time: 5000
    });
  });
  jQuery(document).ready(function($) {
    $('.num5').counterUp({
      delay: 10,
      time: 2000
    });
  });
  jQuery(document).ready(function($) {
    $('.num6').counterUp({
      delay: 10,
      time: 3000
    });
  });
  jQuery(document).ready(function($) {
    $('.num7').counterUp({
      delay: 10,
      time: 500
    });
  });
}

/*******  button in  responsive page *******/
if ($("body").hasClass("page-node-105")){
  $('.tablet .text .button').click(function(){
    $("html, body").animate({ scrollTop: $("#block-webform-client-block-106").offset().top - 100}, 2000);
    return false;
  });
}


/*******  button in desighn page *******/
if ($("body").hasClass("page-node-107")){
  $('#design_qoute .button').click(function(){
    $("html, body").animate({ scrollTop: $("#block-webform-client-block-108").offset().top - 100}, 2000);
    return false;
  });
}




  }
};





})(jQuery, Drupal, this, this.document);

