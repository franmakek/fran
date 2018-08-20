<html>
<head>
    <link rel="stylesheet" href="/css/main.css"/>
    <link rel="dns-prefetch" href="/">
    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script src="/js/custom.js"></script>
    @yield('css')
</head>

<body>
<div id="loader">
    <div class="loader"><i class="loader__tile loader__tile__1"></i><i class="loader__tile loader__tile__2"></i><i class="loader__tile loader__tile__3"></i><i class="loader__tile loader__tile__4"></i><i class="loader__tile loader__tile__5"></i><i class="loader__tile loader__tile__6"></i><i class="loader__tile loader__tile__7"></i><i class="loader__tile loader__tile__8"></i><i class="loader__tile loader__tile__9"></i></div>
</div>
<div class="container" style="display: none">

    <div class="picture"></div>
    <canvas id="svemir" width="500" height="500"></canvas>
    
    

    <img class="prvipravi2-img" src="images/prvipravi2.png">
    <img class="load-img" src="images/teleskop.png">
    <img class="wall-image" src="images/wall/v0.png">
    <img src="images/teleskop.png" class="teleskop-img">
    <img src="images/prozor.png" class="prozor-img">
    <img src="images/prozorpodloga.png" class="prozorpodloga-img">

    <div data-role="bug" class="">

    </div>

    <img class="key-hold-bug key-hold-a_cockroach_of_the_order_blattodea" src="images/zohar.gif" >
    <img class="key-hold-bug key-hold-a_lady_bug_of_the_order_coccinellids" src="images/bubamara.gif" >
    <img class="key-hold-bug key-hold-a_grasshoppers_of_the suborder_caelifera" src="images/skakavac.gif" >
    <img class="key-hold-bug key-hold-a_fly_of_the_order_diptera_linnaeus" src="images/muha.gif" >
    <img class="key-hold-bug key-hold-a_butterfly_of_the_order_lepidoptera" src="images/leptir.gif" >
    <div class="bug-buttons">
        <button type="button" data-role="bug-food" class="bug-btn">FOOD</button>
        <button type="button" data-role="bug-friend">FRIEND</button>
    </div>

    <h3 class="bug-text">
    </h3>

    <audio id="sint-sound" constrols>
        <source src="" type="audio/mpeg">
    </audio>

    <audio id="bug-food-sound" constrols hidden>
        <source src="images/hrsk.mp3" type="audio/mpeg">
    </audio>

    <audio id="sound-m0" controls hidden>
        <source src="images/m0.mp3" type="audio/mpeg">
    </audio>
       <audio id="sound-m0b" controls hidden>
        <source src="images/m0b.mp3" type="audio/mpeg">
    </audio>
       <audio id="sound-m0c" controls hidden>
        <source src="images/m0c.mp3" type="audio/mpeg">
    </audio>
       <audio id="sound-m0d" controls hidden>
        <source src="images/m0d.mp3" type="audio/mpeg">
    </audio>
    <audio id="sound-m1" constrols hidden>
        <source src="images/m1.mp3" type="audio/mpeg">
    </audio>
      <audio id="sound-m1b" constrols hidden>
        <source src="images/m1b.mp3" type="audio/mpeg">
    </audio>
    <audio id="sound-m2" constrols hidden>
        <source src="images/m2.mp3" type="audio/mpeg">
    </audio>
    <audio id="sound-m3" constrols hidden>
        <source src="images/m3.mp3" type="audio/mpeg">
    </audio>
     <audio id="sound-m3b" constrols hidden>
        <source src="images/m3b.mp3" type="audio/mpeg">
    </audio>
    <audio id="sound-m4" constrols hidden>
        <source src="images/m4.mp3" type="audio/mpeg">
    </audio>
      <audio id="sound-m4b" constrols hidden>
        <source src="images/m4b.mp3" type="audio/mpeg">
    </audio>
    <audio id="sound-m5" constrols hidden>
        <source src="images/m5.mp3" type="audio/mpeg">
    </audio>
     <audio id="sound-m5b" constrols hidden>
        <source src="images/m5b.mp3" type="audio/mpeg">
    </audio>
    <audio id="sound-m6" constrols hidden>
        <source src="images/m6.mp3" type="audio/mpeg">
    </audio>
    <audio id="sound-m7" constrols hidden>
        <source src="images/m7.mp3" type="audio/mpeg">
    </audio>





    <!--ovdje se ubacuje html iz .hbs fileova-->
    <span  id="spadiv">

    </span>

    <div class="fixed-chat-parent">
    <div data-role="chat-parent-user" class="main-chat-parent user-chat no-key-hold">
        <span  data-role="message">

        </span>
        <form id="send-message" class="">
            <input name="user_id" id="user_id" style="display: none"></input>
            <input name="country" id="country" style="display: none"></input>
            <input name="city" id="city" style="display: none"></input>
            <textarea name="message" placeholder="Say something..." id="message"></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
    </div>

</div>
<div id="wiki-modal" class="modal" style="display: none;">
    <p  id="wiki-title" style="display: none"></p>
    <p  id="wiki-text"></p>
</div>
<span id="image-text" style="display: none;"></span>
<script src="/jspm_packages/system.js"></script>
<script src="/config.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
 <script src="/build.js"></script>
<script>
    System.import('/app/main.js');
    localStorage.removeItem('clicked-img');
</script>

<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="/js/custom.js"></script>

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

        var imOnlineData = $('#send-message').serializeArray();
        imOnlineData.push({name: 'wikiTitle', value: $('#wiki-title').text()})
        $.ajax({
            url: "/user-online",
            method: "POST",
            data: imOnlineData
        });

    }, "jsonp");

    var channel = pusher.subscribe('main-channel');

    var hideChatBox;

    channel.bind('message', function(data) {
        if(data.user_id === $('#user_id').val() && data.text != "" && data.text != null)
        {

            clearTimeout(hideChatBox);

            $('[data-role="chat-parent-user"]').show();
            $('[data-role="chat-parent-user"]').find('[data-role="message"]').html('<h3>'+ data.text +'</h3>');
            setTimeout(function(){
                $('[data-role="chat-parent-user"]').find('[data-role="message"]').html('');
            }, 10000);

            hideChatBox =  setTimeout(function(){
                $('[data-role="chat-parent-user"]').hide();
            }, 25000);
        }
    });

    channel.bind('admin-online', function(data) {
        setTimeout(function(){
            var imOnlineData = $('#send-message').serializeArray();
            imOnlineData.push({name: 'wikiTitle', value: $('#wiki-title').text()});
            imOnlineData.push({name: 'wallImg', value: String($('.wall-image').attr('src'))});
            imOnlineData.push({name: 'bug', value: $('[data-role="bug"]').attr('class')});
            $.ajax({
                url: "/user-online",
                method: "POST",
                data: imOnlineData
            });
        }, 1000);
    });

    $('#send-message').on('submit', function (e) {

        e.preventDefault();
        var data = $(this).serializeArray();
        data.push({name: 'wikiTitle', value: $('#wiki-title').text()});
        data.push({name: 'wallImg', value: String($('.wall-image').attr('src'))});
        data.push({name: 'bug', value: $('[data-role="bug"]').attr('class')});

        $.ajax({
            url: "/send-message",
            method: "POST",
            data: data
        }).done(function(response) {
            console.log(response);
            $('[name="message"]').val('');
        }).fail(function( jqXHR, textStatus ) {
        });
    });




</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120648095-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-120648095-1');
</script>

</body>

</html>