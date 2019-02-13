<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.mixitup.min.js')}}" ></script>
<script src="{{ asset('frontend/js/wow.min.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.validate.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.hoverdir.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jQuery.scrollSpeed.js')}}"></script>
<script src="{{ asset('frontend/js/script.js')}}"></script>

<script src="{{ asset('frontend/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if ($errors->any())
    @foreach ($errors->all() as $error)
       <script>
           toastr.error('{{ $error }}');
       </script>
    @endforeach
@endif

<script>
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: "dd MM yyyy - HH:11 P",
            showMeridian: true,
            autoclose: true,
            todayBtn: true
        });
    })
</script>

{!! Toastr::message() !!}