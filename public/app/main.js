import $                     from 'jquery';
import {Router}              from 'app/Router.js';

/*

Nove .hbs fileove dodajes u /www/public/app/pages folder

*/
/*ZA FRANA
* Kopirat jedan od redova ispod, te s desne strane od "from" naves file s html-om koji si dodao a slive strane njegov naziv koji koristis ispod kad dodajes route
* npr:
* import imeNeko                from 'app/pages/imeFajla.hbs!';
*/
import index                 from 'app/pages/prvi.hbs!';
import sest                  from 'app/pages/6.hbs!';
import pet                   from 'app/pages/pet.hbs!';

$(document).ready(() =>
{




//
//      i onda dodas rutu:
//            Router.add('{url}', () => {
//                   $element.html(imeNeko());
//                      showLink(5000);
//                          });
//
//       OBJAŠNJENA:
//    1.  {url} == ovde ide ime url-a koje stavis u href attribute od <a> elementa u .hbs fileu, te kad ga kliknes on otvori .hbs koji si zadao ispod
//    2.  $element.html(imeNeko()); == ovdje stavis umjesto imeNeko ime od fajla kojeg si importa iznad, s ljeve strane of "from"
//    3. showLink(5000); === ovo stavis nakon koliko ce se pokazat linkovi, broj u milisekundama
// */

    //------------------------------------------------------------------------------------------------------------------
    // Za Frana!!!!!!!!!!!!!
    //------------------------------------------------------------------------------------------------------------------
    Router.add('sedamnaest', () => {
        $element.html(sest());
        showLink(5000);
    });

    Router.add('pet', () => {
        $element.html(pet());
        showLink(5000);
    });

    //------------------------------------------------------------------------------------------------------------------
    //Kraj za Frana!!!!!!!!!!!!!
    //------------------------------------------------------------------------------------------------------------------





    let $element = $("#spadiv");
    //------------------------------------------------------------------------------------------------------------------
    // Remove loader screen and "fadeIn" after the DOM is ready and everything loaded
    //------------------------------------------------------------------------------------------------------------------
    $('#loader').hide();
    $('.container').show();

    $element.html(index()).fadeIn(1000);

    $(window).on('resize', function () {
        $('.container').height($('img').outerHeight());
    });


    //------------------------------------------------------------------------------------------------------------------
    // When route is changed, add your actions here (select2, responsive tables etc)
    //------------------------------------------------------------------------------------------------------------------
    Router.on("route", () =>
    {
        let href = window.location.pathname;

        CustomStaff();
    });
    
    //------------------------------------------------------------------------------------------------------------------
    // Initiate the client side router
    //------------------------------------------------------------------------------------------------------------------
    Router.setElement($element).start();



    function showLink(time) {
        var delay = 1000;

        if (time != null) {
            delay = time;
        }

        $('a').show();

        setTimeout(function () {
            $('a').addClass('shown');
        }, time)
    }


    //------------------------------------------------------------------------------------------------------------------
    // Custom Functions
    //------------------------------------------------------------------------------------------------------------------
    function CustomStaff() {
        $('[data-role="random"]').on('click', function (e) {

            e.stopPropagation();
            var links = ["dva", "tri"];
            var link = links[Math.floor(Math.random() * links.length)];

            window.location.href = link;
        });

        function randomIntFromInterval(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min);
        }


        var links = [];

        $.each($('a'), function () {

            if ($(this).hasClass('c')) {
                $(this).hide();
                var value = $(this).attr('href');
                links.push(value)
            }
            ;
        });

        var link = links[Math.floor(Math.random() * links.length)];

        setTimeout(function () {
            window.location.href = link;
        }, /*randomIntFromInterval(5, 10) * 1000*/ 15000);

        showLink(10000);
    }

    CustomStaff();


});
