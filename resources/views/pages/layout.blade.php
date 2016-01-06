<!DOCTYPE html>
<html lang="en">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Winter Opera Program</title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/stylesheet1.css">




</head>

<body style="padding-top: 100px">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Winter</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

                    <li><img class="img-responsive" src="/image/shamrocknote.jpg" style="width: 90px; height: 90px;"/></li>
                    <li class="navbar-toggle"><a href="/">Opera</a></li>
                    <li class="navbar-toggle"><a href="/about">Program</a></li>


            </ul>
        </div>
    </div><!--/.nav-collapse -->

</nav>
<div class="container">

    @yield('content')

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/chart.js/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>


</body>

</html>