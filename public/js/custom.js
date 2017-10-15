function changeWallImage(imageType){

    console.log('change image')

    /*tu promjenit vrijeme kad se pokaze slika*/
    var time = 4000;
    var image;

    console.log(imageType + " -change image")

    var horizontalImages = [
        '/images/wall/h1.png',
        '/images/wall/h2.png'
    ];

    var varticalImages = [
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
        image = varticalImages[Math.floor(Math.random()*varticalImages.length)];
    }
    else if(imageType == "horizontal")
    {
        image = horizontalImages[Math.floor(Math.random()*horizontalImages.length)];
    }
    else
    {
        image = allImages[Math.floor(Math.random()*allImages.length)];

    }


    setTimeout(function(){

        $('.wall-image').attr('src', image);

    }, time);

}

var lastClickedImg = localStorage.getItem('clicked-img');

if(lastClickedImg === null)
    {
        changeWallImage()
    }
else if(lastClickedImg === "horizontal")
    {
        changeWallImage('vertical')
    }
else{
    changeWallImage('horizontal')
}



