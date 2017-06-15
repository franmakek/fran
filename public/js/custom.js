/**
 * Created by GREGOS on 6/15/2017.
 */
$('[data-role="random"]').on('click', function (e) {

    e.stopPropagation();
    var links = ["dva", "tri"];
    var link = links[Math.floor(Math.random()*links.length)];

    window.location = link;
});