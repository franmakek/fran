function changeWallImage(){

    /*tu promjenit vrijeme kad se pokaze slika*/
    var time = 200;

    /*tu dodat slike*/
    var images = [
        '/images/wall/image-wall.png',
        '/images/wall/image-wall.png',
        '/images/wall/image-wall.png',
        '/images/wall/image-wall.png',
        '/images/prvi.jpg'
    ];

    var image = images[Math.floor(Math.random()*images.length)];

    setTimeout(function(){

        $('.wall-image').attr('src', image);

    }, time);

}