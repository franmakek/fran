<html>
<head>
    <link rel="stylesheet" href="/css/main.css"/>
    <link rel="dns-prefetch" href="/">
</head>

<body>
<div class="admin-container">

    <h3>Admin Chat <button type="button" id="refresh">Refresh</button> </h3>

    <h2 id="no-chats">No chats</h2>

    <!--ovdje se ubacuje html iz .hbs fileova-->
    <div data-role="chat-parent" class="main-chat-parent">
        <div data-role="location"></div>
        <div class="info">
            <h3 data-role="info-bug"></h3>
            <h3 data-role="info-wiki"></h3>
            <h3 data-role="info-wall"></h3>
        </div>
        <span  data-role="message">

        </span>
        <form data-role="send-message">
            <input name="user_id" style="display: none"></input>
            <textarea name="message"></textarea>
            <button type="submit">Send</button>
            {{csrf_field()}}
        </form>
    </div>
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

    var channel = pusher.subscribe('main-channel');

    function setData(data)
    {
        if($('[data-id="'+ data.user_id +'"]').length === 0)
        {
            let newChat =  $('.main-chat-parent').clone();

            newChat.attr('data-id', data.user_id).appendTo('.admin-container').removeClass('main-chat-parent');
            $('#no-chats').hide();
        }


        $('[data-id="'+ data.user_id +'"]').find('[name="user_id"]').attr('data-id', data.user_id).val(data.user_id);

        if(data.text)
        {
            $('[data-id="'+ data.user_id +'"]').find('[data-role="message"]').append('<h3>'+ data.text +'</h3>');

        }

        if(data.country)
        {
            let location = data.country + ", "+ data.city;

            $('[data-id="'+ data.user_id +'"]').find('[ data-role="location"]').html('<h3>'+ location +'</h3>');
        }

        if(data.wallImg)
        {
            $('[data-id="'+ data.user_id +'"]').find('[ data-role="info-wall"]').html('<h3> | Wall: </h3>' + ' ' + data.wallImg);
        }
        if(data.bug)
        {
            $('[data-id="'+ data.user_id +'"]').find('[ data-role="info-bug"]').html('<h3> | Bug: </h3>' + ' ' + data.bug);
        }
        if(data.wiki)
        {
            $('[data-id="'+ data.user_id +'"]').find('[ data-role="info-wiki"]').html('<h3> | Wiki: </h3>' + ' ' + data.wiki);
        }


    }

    pusher.bind('message', function(data) {
        setData(data);
    });

    pusher.bind('user-online', function(data) {
        console.log('test');
        setData(data);
    });

    $('body').on('submit','[data-role="send-message"]', function (e) {

        e.preventDefault();

        var data = $(this).serialize();
        let msg = $(this).find('[name="message"]').val();

        $(this).find('[ data-role="message"]').append('<h3>' + msg + '</h3>');

        $.ajax({
            url: "/send-message-admin",
            method: "POST",
            data: data
        }).done(function(response) {
            console.log(response)
        }).fail(function( jqXHR, textStatus ) {

        });
    });

    $('#refresh').on('click', function () {
        $.ajax({
            url: "/admin-online",
            method: "POST",
            data: {adminOnline: true}
        }).done(function(response) {
            console.log(response)
        }).fail(function( jqXHR, textStatus ) {

        });
    });

    $('#refresh').trigger('click');

</script>

</body>
</html>