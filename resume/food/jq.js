(function ( $ ) {
 
    $.fn.helloMSG = function( options ) {
 
        // Default options
        var settings = $.extend({
            name: 'El Jardín de los Sabores'
        }, options );
 
        // Apply options
        return this.append('Welcome to ' + settings.name + '!');
 
    };
 
}( jQuery ));


$( document ).ready(function() {
    $( '#contact' ).helloMSG();
});



//autosize text box plugin for the contact page. 
//http://www.jacklmoore.com/autosize/
$(function(){
        $('textarea').autosize();
 
      });
//





//XML file loading


$.ajax({
    url: 'recipes.xml',
    dataType: 'xml',
    success: function(data) {
        $(data).find('recipies recipe').each(function() {
            var food = $(this).find('food').text();
            var ingredients = $(this).find('ingredient').text();
            var instructions = $(this).find('instruction').text();


            //alert(food);
            $('.recip ul').append('<li class="food">' + food + '</li>');
            $('.recip ul').append('<li class="ti">Ingredients</li>');
            $('.recip ul').append('<br />');
            $('.recip ul').append('<li class="no">' + ingredients + '</li>');
            $('.recip ul').append('<br />');
            $('.recip ul').append('<li class="ti">Instructions</li>');
            $('.recip ul').append('<br />');
            $('.recip ul').append('<li class="no">' + instructions + '</li>');
            $('.recip ul').append('<br />');
            $('.recip ul').append('<br />');


            // $(data).find('recipe ingredients ingredient').each(function() {
            //     var ingredients = $(this).find('ingredient').text();
            //     alert(ingredients);
            //     $('.recip ul').append('<li class="ingred">' + ingredients + '</li>');

            // });



        });




    },

    error: function() {
        $('.recip').text('Failed to get data');
    }

});




//was going to be for the image gellery, but never used it.

$(document).ready(function() {
    $('#strip img').click(function() {
        var img = $(this).attr('data');
        $('#mainImg').fadeOut('slow', function() {
            $(this).attr('src', 'img').fadeIn('slow');
            
        });
    });
});




//5 event listeners

//mouse enter event
$(document).ready(function() {
    $('.food').mouseenter(function() {
        $(this).css("color", "#00ff00");
    });


    $('.food').mouseleave(function() {
        $(this).css("color", "black");
    });


    //double click event
    $('body').dblclick(function() {
        alert("You have just double clicked the web page!");
    });


//mouse down event, click event
    $('.no').click(function() {
        $('.no').mousedown(function() {
            alert("No!")
        });

        //mouse up event
        $('.no').mouseup(function() {
            alert("No!")
        });
    });
});





//Calculator plugin

$(document).ready(function () {
                // initializing calculator
                $('#calc').calculator().draggable();
        });