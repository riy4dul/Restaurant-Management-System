<!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="{{asset('')}}backend/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{{asset('')}}backend/css/material-dashboard.min790f.css?v=2.0.1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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