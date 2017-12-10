<html>
<head>
    <link rel="stylesheet" href="/css/main.css"/>
    <link rel="dns-prefetch" href="/">
</head>

<body>
<div class="container">

    <div class="picture"></div>

    <img class="load-img" src="images/prvi.jpg">
    <img class="wall-image" src="images/wall/slikaprva.png">


    <!--ovdje se ubacuje html iz .hbs fileova-->
    <span  id="spadiv">

    </span>
    <form id="send-message">
        <textarea name="message" id="message"></textarea>
        <button type="submit">Send</button>
        {{csrf_field()}}
    </form>
</div>
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<!--<script src="/js/custom.js"></script>-->
<script src="//js.pusher.com/3.0/pusher.min.js"></script>
<script>
    Pusher.log = function(msg) {
        console.log(msg);
    };
    var pusher = new Pusher('7a6a1f7f43e7adb7c8df', {
        encrypted: true,
        cluster: 'eu' // This
    });

    var channel = pusher.subscribe('test-channel');
    channel.bind('test-event', function(data) {
        $('#spadiv').html('<h3>'+ data.text +'</h3>')
    });

    $('#send-message').on('submit', function (e) {

        e.preventDefault();

        console.log($('#message').val())

        var data = $(this).serialize();

        $.ajax({
            url: "/send-message",
            method: "POST",
            data: data
        }).done(function(response) {
            console.log(response)
        }).fail(function( jqXHR, textStatus ) {
        });
    });
</script>

</body>
</html>