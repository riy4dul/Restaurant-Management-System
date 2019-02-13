<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/star.png" type="favicon/ico" />
        <title>Mamma's Kitchen</title>
        @include('frontend/layout/headerScript')
    </head>
    <body data-spy="scroll" data-target="#template-navbar">
        @include('frontend/layout/header')
        @yield('content')
        @include('frontend/layout/footer')
        @include('frontend/layout/footerScript')

    </body>
</html>