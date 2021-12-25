$(document).ready(function(){
    $("#banner .owl-carousel").owlCarousel({
        dots:true,
        items:1
    });
    // top-sale owlCarousel 
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });


    // iostope filtering my secial rices 
    var $grid = $(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode:'fitRows'
    });

    //filtering items on bottom click

    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({
            filter: filterValue
        });
    });


    // new phones owlCarousel 
    $("#new-phones .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

     // Blogs owlCarousel 
     $("#blog .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
        }
    });

    //product quantity increase and decrease
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    
    // incresing the value of the input when ever clicked up button 
    $qty_up.click(function(e){
        let $input = $(`.input_qty[data-id='${$(this).data("id")}']`);
        if($input.val() >= 1 && $input.val() <= 9){
            $input.val(function(i,oldval){
                return ++oldval;
            });
        }
    });
 // decreasing the value of the input when ever clicked down button 
    $qty_down.click(function(e){
        let $input = $(`.input_qty[data-id='${$(this).data("id")}']`);
        if($input.val() > 1 && $input.val() <= 10){
            $input.val(function(i,oldval){
                return --oldval;
            });
        }
    });

})