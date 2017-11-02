

var gifTime = 10000;


function changeWallImage(imageType){

    console.log('change image')

    /*tu promjenit vrijeme kad se pokaze slika*/
    var time = 3500;
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



