<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 center">
                    <h1>TWIG Scratchpad</h1>
                </div>
                <div class="col-md-4"></div>
            </div>

            <div class="row col-md-12 inputs">
                <div class="php col-md-3">
                    <label for="phpInput">PHP</label>
                    <textarea id="phpInput">&lt;?php
$foo = 'hello, world!';
?&gt;</textarea>
                </div>

                <div class="twig col-md-3">
                    <label for="twigInput">Twig</label>
                    <textarea id="twigInput">{{ foo|title }}</textarea>
                </div>

                <div class="js col-md-3">
                    <label for="jsInput">JS</label>
                    <textarea id="jsInput">TODO
JS Code Goes Here</textarea>
                </div>

                <div class="css col-md-3">
                    <label for="cssInput">CSS</label>
                    <textarea id="cssInput">TODO
CSS Code Goes Here</textarea>
                </div>

            </div>
            <div class="row output">
                <div class="rendered col-md-12">
Hello, World!
                </div>
            </div>
            <div class="row debug">
                <div class="errors col-md-12"></div>
            </div>
        </div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
     <!--    <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script> -->
    </body>
</html>
