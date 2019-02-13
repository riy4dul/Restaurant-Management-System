<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/star.png" type="favicon/ico" />

        <title>Mamma's Kitchen</title>

        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/pricing.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/main.css')}}">
        
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datetimepicker.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


        <script src="{{ asset('frontend/js/jquery-1.11.2.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.flexslider.min.js')}}"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
        </script>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(24.909439, 91.833800),
                    zoom: 16,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(24.909439, 91.833800),
                    title:"Mamma's Kitchen Restaurant"
                });

                // To add the marker to the map, call setMap();
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>