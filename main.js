$(document).ready(function (){
$('.menu-toggler').on('click', function() {
    $(this).toggleClass('open');
    $('.top-nav').toggleClass('open');
});

$('.top-nav .nav-link').on('click', function() {
    $('.menu-toggler').removeClass('open');
    $('.top-nav').removeClass('open');
});


    $('nav a[href*="#"]').on('click', function() {
$('html, body').animate({
    scrollTop: $($(this).attr('href')).offset().top - 100
}, 2000);
    });


    $('#up').on('click', function() {

        $('html, body').animate({
            scrollTop: 0
        }, 2000);
       

    });
    

AOS.init ({
    easing: 'ease',
    duration: 1800,
    once: true
});


   






});

function validateForm()
{
    var x = document.forms["myForm"]["name"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
    
    var y = document.forms["myForm"]["email"].value;
    if (y == "") {
      alert("email must be filled out");
      return false;
    }
     

    var z = document.forms["myForm"]["phone"].value;
    if (z == "") {
      alert("Phone number must be filled out");
      return false;
    }

   
  }
  
  
    
  
  

    