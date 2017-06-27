/**
 * Created by GREGOS on 6/15/2017.
 */
$('[data-role="random"]').on('click', function (e) {

    e.stopPropagation();
    var links = ["dva", "tri"];
    var link = links[Math.floor(Math.random()*links.length)];

    window.location.href = link;
});

$(document).ready(function()
{
    setTimeout(function(){
        
        var links = [];
        
        $.each($('a'), function(){
           
            var value = $(this).attr('href');
            
            links.push(value);
        });
        
    var link = links[Math.floor(Math.random()*links.length)];

    window.location.href = link;
       
        
    }, 8000)
})