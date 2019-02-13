<?php
echo header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
echo header("Cache-Control: post-check=0, pre-check=0", false);
echo header("Pragma: no-cache");
echo header('Content-Type: text/html');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="{{asset('backend/img/apple-icon.png')}}">
        <link rel="icon" href="{{asset('')}}backend/img/favicon.png">
        <title>
            Mammaskitchen
        </title>
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="{{asset('')}}backend/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{{asset('')}}backend/css/material-dashboard.min790f.css?v=2.0.1">
        <!-- Documentation extras -->
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{asset('')}}backend/assets-for-demo/demo.css" rel="stylesheet"/>
        <!-- iframe removal -->
        <script type="text/javascript">
        if (document.readyState === 'complete') {
        if (window.location != window.parent.location) {
        const elements = document.getElementsByClassName("iframe-extern");
        while (elemnts.lenght > 0) elements[0].remove();
        // $(".iframe-extern").remove();
        }
        };
        </script>
        <style>
            .wrapper.wrapper-full-page{height:auto;min-height:100vh}
            
        </style>
    </head>
    <body class="off-canvas-sidebar login-page">
        


        <div class="wrapper wrapper-full-page img-responsive">
            <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{{asset('')}}backend/img/login.jpg'); background-size: cover; background-position: top center;">
                <div class="container">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <form class="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="card card-login card-hidden">
                                <div class="card-header card-header-rose text-center">
                                    <h4 class="card-title">Log in</h4>
                                    <div class="social-line">
                                        <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <p class="card-description text-center">Mammaskitchen</p>
                                    {{-- <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">face</i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="First Name...">
                                        </div>
                                    </span> --}}
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">email</i>
                                                </span>
                                            </div>
                                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email..." value="{{ old('email') }}">

                                            @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                        </div>
                                    </span>
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                            </div>
                                            <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password..." required autocomplete="off">
                                            @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                    </span>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-rose btn-link btn-lg">LOG IN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </body>

    <!--   Core JS Files   -->
    <script src="{{asset('')}}backend/js/core/jquery.min.js"></script>
    <script src="{{asset('')}}backend/js/core/popper.min.js"></script>
    <script src="{{asset('')}}backend/js/bootstrap-material-design.min.js"></script>
    <script src="{{asset('')}}backend/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin  -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
  
    <script src="{{asset('')}}backend/js/plugins/moment.min.js"></script>
    <script src="{{asset('')}}backend/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <script src="{{asset('')}}backend/js/plugins/nouislider.min.js"></script>
    <script src="{{asset('')}}backend/js/plugins/bootstrap-selectpicker.js"></script>
    <script src="{{asset('')}}backend/js/plugins/bootstrap-tagsinput.js"></script>
    <script src="{{asset('')}}backend/js/plugins/jasny-bootstrap.min.js"></script>
    <script src="{{asset('')}}backend/assets-for-demo/js/modernizr.js"></script>
    <script src="{{asset('')}}backend/js/material-dashboard790f.js?v=2.0.1"></script>
    <script src="{{asset('')}}backend/cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="{{asset('')}}backend/js/plugins/arrive.min.js" type="text/javascript"></script>

    <script src="{{asset('')}}backend/js/plugins/jquery.validate.min.js"></script>
    <script src="{{asset('')}}backend/js/plugins/chartist.min.js"></script>
    <script src="{{asset('')}}backend/js/plugins/jquery.bootstrap-wizard.js"></script>
    <script src="{{asset('')}}backend/js/plugins/bootstrap-notify.js"></script>
    <script src="{{asset('')}}backend/js/plugins/jquery-jvectormap.js"></script>
    <script src="{{asset('')}}backend/js/plugins/nouislider.min.js"></script>
    <script src="{{asset('')}}backend/js/plugins/jquery.select-bootstrap.js"></script>
    <script src="{{asset('')}}backend//js/plugins/jquery.datatables.js"></script>
    <script src="{{asset('')}}backend/js/plugins/sweetalert2.js"></script>
    <script src="{{asset('')}}backend/js/plugins/jasny-bootstrap.min.js"></script>
    <script src="{{asset('')}}backend/js/plugins/fullcalendar.min.js"></script>
    <script src="{{asset('')}}backend/js/plugins/demo.js"></script>

    <script type="text/javascript">
    $().ready(function(){
    demo.checkFullPageBackgroundImage();
    setTimeout(function(){
    // after 1000 ms we add the class animated to the login/register card
    $('.card').removeClass('card-hidden');
    }, 700)
    });
    </script>
    
</html>