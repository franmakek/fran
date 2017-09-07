function mainFunctions() {


  

}
    e.stopPropagation();
    var links = ["dva", "tri"];
    var link = links[Math.floor(Math.random() * links.length)];

    window.location.href = link;
});

$(document).ready(function ()
{
    
    function randomIntFromInterval(min,max)
    {
        return Math.floor(Math.random() * (max-min+1)+min);
    }
    
      var links = [];
        
        $.each($('a'), function () {
           
            if($(this).text().substring(0) !== "m")
            {
                $(this).hide();
                var value = $(this).attr('href');
                links.push(value)   
            };
        });
    
        var link = links[Math.floor(Math.random() * links.length)];

    setTimeout(function (){ 

    window.location.href = link;
        
        
    }, randomIntFromInterval(3,5) * 1000)
})
