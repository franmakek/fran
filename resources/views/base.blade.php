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
    <img class="load-img" src="images/prvipravi1.jpg">
    <img class="wall-image" src="images/wall/v0.png">
    <img src="images/teleskop.png" class="teleskop-img">
    <img src="images/prozor.png" class="prozor-img">
    <img src="images/prozorpodloga.png" class="prozorpodloga-img">

      
    
    <audio id="sound-m0" controls>
        <source src="images/m0.mp3" type="audio/mpeg">
    </audio>
       <audio id="sound-m0b" controls>
        <source src="images/m0b.mp3" type="audio/mpeg">
    </audio>
       <audio id="sound-m0c" controls>
        <source src="images/m0c.mp3" type="audio/mpeg">
    </audio>
       <audio id="sound-m0d" controls>
        <source src="images/m0d.mp3" type="audio/mpeg">
    </audio>
    <audio id="sound-m1" constrols>
        <source src="images/m1.mp3" type="audio/mpeg">
    </audio>
      <audio id="sound-m1b" constrols>
        <source src="images/m1b.mp3" type="audio/mpeg">
    </audio>
    <audio id="sound-m2" constrols>
        <source src="images/m2.mp3" type="audio/mpeg">
    </audio>
    <audio id="sound-m3" constrols>
        <source src="images/m3.mp3" type="audio/mpeg">
    </audio>
     <audio id="sound-m3b" constrols>
        <source src="images/m3b.mp3" type="audio/mpeg">
    </audio>
    <audio id="sound-m4" constrols>
        <source src="images/m4.mp3" type="audio/mpeg">
    </audio>
      <audio id="sound-m4b" constrols>
        <source src="images/m4b.mp3" type="audio/mpeg">
    </audio>
    <audio id="sound-m5" constrols>
        <source src="images/m5.mp3" type="audio/mpeg">
    </audio>
     <audio id="sound-m5b" constrols>
        <source src="images/m5b.mp3" type="audio/mpeg">
    </audio>
    <audio id="sound-m6" constrols>
        <source src="images/m6.mp3" type="audio/mpeg">
    </audio>
    <audio id="sound-m7" constrols>
        <source src="images/m7.mp3" type="audio/mpeg">
    </audio>



    <!--ovdje se ubacuje html iz .hbs fileova-->
    <span  id="spadiv">

    </span>
</div>
<a href="#" data-wiki="true">WIKI</a>

<div id="wiki-modal" class="modal" style="display: none;">
    
    <p  id="wiki-text"></p>
</div>
<!--<script src="/js/custom.js"></script>-->
<script src="/jspm_packages/system.js"></script>
<script src="/config.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<!--<script src="/build.js"></script>-->

<script>
    System.import('/app/main.js');
</script>

</body>

</html>