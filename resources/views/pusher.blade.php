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
    <form id="send-message" >
        <input name="user_id" id="user_id" style="display: none"></input>
        <input name="country" id="country" style="display: none"></input>
        <input name="city" id="city" style="display: none"></input>
        <textarea name="message" id="message"></textarea>
        <button type="submit">Send</button>
    </form>
</div>
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<!--<script src="/js/custom.js"></script>-->
<script src="//js.pusher.com/3.0/pusher.min.js"></script>
<script>

    let userId = Math.random().toString(36).substring(7);

    $('#user_id').val(userId);

//    Pusher.log = function(msg) {
//        console.log(msg);
//    };
    var pusher = new Pusher('7a6a1f7f43e7adb7c8df', {
        encrypted: true,
        cluster: 'eu' // This
    });

    $.get("https://ipinfo.io", function(response) {
        $('#country').val(response.country);
        $('#city').val(response.city);
    }, "jsonp");

    var channel = pusher.subscribe('main-channel');

    channel.bind('message', function(data) {
        if(data.user_id === $('#user_id').val())
        {
            $('#send-message').show();
            $('#spadiv').html('<h3>'+ data.text +'</h3>')
        }
    });

    channel.bind('admin-online', function(data) {
        var imOnlineData = $('#send-message').serialize();
        $.ajax({
            url: "/user-online",
            method: "POST",
            data: imOnlineData
        });
    });

    $('#send-message').on('submit', function (e) {

        e.preventDefault();

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

    $.ajax({
        url: "/user-online",
        method: "POST",
        data: imOnlineData
    });
</script>

</body>
</html>