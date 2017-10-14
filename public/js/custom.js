function changeWallImage(){

    /*tu promjenit vrijeme kad se pokaze slika*/
    var time = 4000;

    /*tu dodat slike*/
    var images = [

        
                 '/images/wall/p8.png',
         '/images/wall/p10.png',

         '/images/wall/p9.png',
        '/images/wall/p11.png'
    ];

    var image = images[Math.floor(Math.random()*images.length)];

    setTimeout(function(){

        $('.wall-image').attr('src', image);

    }, time);

}