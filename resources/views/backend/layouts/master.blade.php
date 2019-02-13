<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="{{asset('')}}backend/img/apple-icon.png">
        <link rel="icon" href="{{asset('')}}backend/img/favicon.png">
        <title>
        Material Dashboard by Creative Tim
        </title>
        
        @include('backend/layouts/headerScript')
    </head>
    <body class="">
        <div class="wrapper">
            @include('backend/layouts/sidebar')
            <div class="main-panel">
                @include('backend/layouts/header')
                <div class="content">
                   @yield('content')
                </div>
                    @include('backend/layouts/footer')
                </div>
            </div>
            {{-- @include('backend/layouts/footer') --}}
            @include('backend/layouts/footerScript')
        </body>
           
    </html>