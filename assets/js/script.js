console.log("JQUERY version "+jQuery().jquery)

jQuery(document).ready(function($) {

// Fixed on scroll > 10
    $(window).scroll(function() {
        if ($(document).scrollTop() < 10) {
            $(".change").removeClass("sticky")

        } else {
            $(".change").addClass("sticky")
        }
    });


// BurgerNav on Click
    $("#burgerNav").on('click', function(){
       /* if($("nav:not(.burgerMenu)")){
            $("nav").addClass("burgerMenu")
        } else {
            $("nav.burgerMenu").removeClass("burgerMenu)
        }*/
 
        // Checking class using hasClass 
        if(jQuery('nav').hasClass('nav')){
            jQuery('nav').addClass('burgerMenu').removeClass('nav')

        }else{
            jQuery('nav').addClass('nav').removeClass('burgerMenu')
        }

    })

// Class active on Click
    $("nav a").on('click', function(){
        $("nav a").removeClass('active')
        $(this).addClass('active')
    })


})

