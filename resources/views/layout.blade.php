<!doctype html>
<html lang="ar" dir="rtl">

<title>سحگه !</title>
<!-- Compiled and minified CSS -->
{{--<link rel="stylesheet" href="resources/sass/layout.css">--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .brand{
        background: #1c1f5e !important;
    }
    .lo{
        background: #1c1f5e !important;
    }
    .loo{
        background: azure;
        padding: 20px;

    }
    span{
        color: #1c1f5e;
    }
    form{
        margin: 20px auto;
        padding: 20px;
    }

</style>
</head>
<body class="blue lighten-4">
<nav class="brand">
    <div class="nav-wrapper lo" dir="ltr">
        <a href="/" class="brand-logo">سحگه</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"> <i class="large material-icons">list</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/" class="btn brand blue lighten-4"> <span>نزل سحگه</span></a></li>
            <li><a href="sahgat" class="btn brand blue lighten-4"> <span>سحگات البشرية</span></a></li>
            <li><a href="about" class="btn brand blue lighten-4"><span>عني</span></a></li>
        </ul>
    </div>
</nav>

<ul class="sidenav brand" id="mobile-demo">
    <li><a href="/" style="color: azure;">نزل سحگه</a></li>
    <li><a href="sahgat" style="color: azure;">سحگات البشرية</a></li>
    <li><a href="about" style="color: azure;">عني</a></li>
</ul>

    <div class="container form loo center" >
        @yield('content')
    </div>


<footer class="section" dir="ltr">
    <div class="center gray">
        Made with ❤️ by Rose xD.
    </div>


    <script src="http://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>

        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
    </script>
</footer>
</body>
</html>
