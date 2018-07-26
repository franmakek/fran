var gifTime = 1000;
var vc1 = 6600;
var vc2 = 1520;
var vc3 = 6640;
var vc4 = 5720;
var vc5 = 5040;
var vc6 = 4000;
var vc7 = 4360;
var vc8 = 3920;
var vc9 = 1520;
var vc10 = 1120;
var vc11 = 1000;
var vc12 = 3000;
var vc13 = 4480;
var vc14 = 3240;
var vc15 = 7120;
var vc16 = 4000;
var vc17 = 7120;
var vc18 = 4000;
var vc19 = 3160;
var vc20 = 2200;
var vc21 = 2200;
var vc22 = 4120;
var vc23 = 3280;
var vc24 = 2240;
var vc25 = 4240;
var vc26 = 7520;
var vc25 = 4480;
var vc26 = 8000;
var vc27 = 4480;
var vc28 = 3000;

var vm1 = 3480;
var vm2 = 8720;
var vm3 = 1600;
var vm4 = 5080;
var vm5 = 3840;
var vm6= 3480;
var vm7 = 8720;
var vm8 = 6080;
var vm9 = 2080;
var vm10 = 5800;
var vm11 = 4840;
var vm12 = 3240;
var vm13 = 6080;
var vm14 = 6080;
var vm15 = 2200;


function changeWallImage(imageType){
    /*tu promjenit vrijeme kad se pokaze slika*/

    var time = 3700;
    var image;

    if(imageType == undefined)
    {
         imageType = localStorage.getItem('clicked-img');
    }

    var horizontalImages = [
        '/images/wall/h1.png',
        '/images/wall/h2.png',
        '/images/wall/h3.png',
         '/images/wall/h4.png',
         '/images/wall/h5.png'
    ];

    var verticalImages = [
        '/images/wall/v1.png',
        '/images/wall/v2.png',
        '/images/wall/v3.png',
        '/images/wall/v4.png'
    ];

    /*tu dodat slike*/
   var allImages = [
           '/images/wall/h1.png',
        '/images/wall/h2.png',  
       '/images/wall/v1.png',
        '/images/wall/v2.png',
        '/images/wall/v3.png',
         '/images/wall/h3.png',
       '/images/wall/v4.png',
         '/images/wall/h4.png',
        '/images/wall/h5.png'
    ];


    if(imageType == "vertical")
    {
        image = verticalImages[Math.floor(Math.random()*verticalImages.length)];
    }
    else if(imageType == "horizontal")
    {
        image = horizontalImages[Math.floor(Math.random()*horizontalImages.length)];
    }
    else
    {
        image = horizontalImages[Math.floor(Math.random()*horizontalImages.length)];
    }

    setTimeout(function(){

        $('.wall-image').fadeOut(500)

    }, time - 3000);

    setTimeout(function(){

        $('.wall-image').attr("src", image).fadeIn(500);

    }, time);

}

var lastClickedImg = localStorage.getItem('clicked-img');

//if(lastClickedImg === null)
//    {
//        changeWallImage('horizontal');
//        localStorage.setItem('clicked-img', 'horizontal');
//
//    }
//else 
//if(lastClickedImg === "horizontal")
//    {
//        changeWallImage('vertical');
//        localStorage.setItem('clicked-img', 'vertical');
//
//    }
//else{
//    changeWallImage('horizontal');
//    localStorage.setItem('clicked-img', 'horizontal');
//}


