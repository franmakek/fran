<html>
<head>
    <link rel="stylesheet" href="/css/main.css"/>
    <link rel="dns-prefetch" href="/">
    <script src="js/custom.js"></script>
    @yield('css')
</head>

<body>
<div id="loader">
    <div class="loader"><i class="loader__tile loader__tile__1"></i><i class="loader__tile loader__tile__2"></i><i class="loader__tile loader__tile__3"></i><i class="loader__tile loader__tile__4"></i><i class="loader__tile loader__tile__5"></i><i class="loader__tile loader__tile__6"></i><i class="loader__tile loader__tile__7"></i><i class="loader__tile loader__tile__8"></i><i class="loader__tile loader__tile__9"></i></div>
</div>
<div class="container" style="display: none">

    <div class="picture"></div>

    <img class="load-img" src="images/prvi.jpg">
    <img class="wall-image" src="images/wall/slikaprva.png">


    <!--ovdje se ubacuje html iz .hbs fileova-->
    <span  id="spadiv">

    </span>
</div>

<!--<script src="/js/custom.js"></script>-->
<script src="/jspm_packages/system.js"></script>
<script src="/config.js"></script>
<script>
    System.import('/app/main.js');
</script>
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
</body>

</html>