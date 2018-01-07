

var gifTime = 10000;
var vc1 = 8800;
var vc2 = 3400;
var vc3 = 7900;
var vc4 = 9600;
var vc5 = 7200;
var vc6 = 4100;
var vc7 = 11200;
var vc8 = 4800;
var vc9 = 2300;
var vc10 = 1300;
var vc11 = 3600;
var vc12 = 4600;
var vc13 = 5500;
var vc14 = 5100;
var vc15 = 12500;
var vc16 = 5800;
var vc17 = 12500;
var vc18 = 5800;
var vc19 = 4100;
var vc20 = 4000;
var vc21 = 3000;

var vm1 = 5580;
var vm2 = 10500;
var vm3 = 2800;
var vm4 = 7500;
var vm5 = 6100;
var vm6= 6500;
var vm7 = 12800;
var vm8 = 8500;
var vm9 = 3700;
var vm10 = 8700;
var vm11 = 7000;
var vm12 = 5000;
var vm13 = 9000;
var vm14 = 12000;
var vm15 = 5000;



function changeWallImage(imageType){

    console.log('change image')

    /*tu promjenit vrijeme kad se pokaze slika*/

    var time = 2800;
    var image;

    if(imageType == undefined)
    {
         imageType = localStorage.getItem('clicked-img');
    }

    var horizontalImages = [
        '/images/wall/h1.png',
        '/images/wall/h2.png'
    ];

    var verticalImages = [
        '/images/wall/v1.png',
        '/images/wall/v2.png'
    ];

    /*tu dodat slike*/
   var allImages = [
           '/images/wall/h1.png',
        '/images/wall/h2.png',  
       '/images/wall/v1.png',
        '/images/wall/v2.png'
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

    }, time - 1500);

    setTimeout(function(){

        $('.wall-image').attr("src", image).fadeIn(500);

    }, time);

}

var lastClickedImg = localStorage.getItem('clicked-img');

if(lastClickedImg === null)
    {
        changeWallImage('horizontal');
        localStorage.setItem('clicked-img', 'horizontal');

    }
else if(lastClickedImg === "horizontal")
    {
        changeWallImage('vertical');
        localStorage.setItem('clicked-img', 'vertical');

    }
else{
    changeWallImage('horizontal');
    localStorage.setItem('clicked-img', 'horizontal');

}



