$(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
            $("nav ul li a").on("click", function(){
            $("nav ul").removeClass("showing");
});
      });

$(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('overflow');
            }

            else {
                  $('nav').removeClass('overflow');
            }
      })

$('#navigation-logo')
  .mouseenter(function(){$('#navigation-logo').attr('src', 'images/lhwlogohover.png');})
  .mouseleave(function(){$('#navigation-logo').attr('src', 'images/lhwlogo.png');});
