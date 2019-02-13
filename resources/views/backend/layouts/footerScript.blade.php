<!--   Core JS Files   -->
<script src="{{asset('')}}backend/js/core/jquery.min.js"></script>
<script src="{{asset('')}}backend/js/core/popper.min.js"></script>
<script src="{{asset('')}}backend/js/bootstrap-material-design.min.js"></script>
<script src="{{asset('')}}backend/js/plugins/perfect-scrollbar.jquery.min.js"></script>
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
<script src="{{asset('')}}backend/js/plugins/jquery.datatables.js"></script>
<script src="{{asset('')}}backend/js/plugins/sweetalert2.js"></script>
<script src="{{asset('')}}backend/js/plugins/jasny-bootstrap.min.js"></script>
<script src="{{asset('')}}backend/js/plugins/fullcalendar.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{!! Toastr::message() !!}
<!-- demo init -->
<script src="{{asset('')}}backend/js/plugins/demo.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#datatables').DataTable({
"pagingType": "full_numbers",
"lengthMenu": [
[10, 25, 50, -1],
[10, 25, 50, "All"]
],
responsive: true,
language: {
search: "_INPUT_",
searchPlaceholder: "Search records",
}
});
var table = $('#datatables').DataTable();
// Edit record
table.on('click', '.edit', function() {
$tr = $(this).closest('tr');
var data = table.row($tr).data();
alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
});
// Delete a record
table.on('click', '.remove', function(e) {
$tr = $(this).closest('tr');
table.row($tr).remove().draw();
e.preventDefault();
});
//Like record
table.on('click', '.like', function() {
alert('You clicked on Like button');
});
$('.card .material-datatables label').addClass('form-group');
});
</script>
<script type="text/javascript">
$(document).ready(function(){
//init wizard
demo.initMaterialWizard();
// Javascript method's body can be found in assets/js/demos.js
demo.initDashboardPageCharts();
demo.initCharts();
});
</script>
<script type="text/javascript">
$(document).ready(function(){
demo.initVectorMap();
});
</script>
<!-- Sharrre libray -->
<script src="{{asset('')}}backend/assets-for-demo/js/jquery.sharrre.js">
</script>
<script>
$(document).ready(function(){
$('#twitter').sharrre({
share: {
twitter: true
},
enableHover: false,
enableTracking: false,
enableCounter: false,
buttons: { twitter: {via: 'CreativeTim'}},
click: function(api, options){
api.simulateClick();
api.openPopup('twitter');
},
template: '<i class="fa fa-twitter"></i> Twitter',
url: 'http://demos.creative-tim.com/material-kit-pro/presentation.html'
});
$('#facebook').sharrre({
share: {
facebook: true
},
enableHover: false,
enableTracking: false,
enableCounter: false,
click: function(api, options){
api.simulateClick();
api.openPopup('facebook');
},
template: '<i class="fa fa-facebook-square"></i> Facebook',
url: 'http://demos.creative-tim.com/material-kit-pro/presentation.html'
});
$('#google').sharrre({
share: {
googlePlus: true
},
enableCounter: false,
enableHover: false,
enableTracking: true,
click: function(api, options){
api.simulateClick();
api.openPopup('googlePlus');
},
template: '<i class="fa fa-google-plus"></i> Google',
url: 'http://demos.creative-tim.com/material-kit-pro/presentation.html'
});
});
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-46172202-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script');
ga.type = 'text/javascript';
ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ga, s);
})();
// Facebook Pixel Code Don't Delete
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','../../../connect.facebook.net/en_US/fbevents.js');
try{
fbq('init', '111649226022273');
fbq('track', "PageView");
}catch(err) {
console.log('Facebook Track Error:', err);
}
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1"
/></noscript>
<script>
                $(document).ready(function(){
                $('#twitter').sharrre({
                share: {
                twitter: true
                },
                enableHover: false,
                enableTracking: false,
                enableCounter: false,
                buttons: { twitter: {via: 'CreativeTim'}},
                click: function(api, options){
                api.simulateClick();
                api.openPopup('twitter');
                },
                template: '<i class="fa fa-twitter"></i> Twitter',
                url: 'http://demos.creative-tim.com/material-kit-pro/presentation.html'
                });
                $('#facebook').sharrre({
                share: {
                facebook: true
                },
                enableHover: false,
                enableTracking: false,
                enableCounter: false,
                click: function(api, options){
                api.simulateClick();
                api.openPopup('facebook');
                },
                template: '<i class="fa fa-facebook-square"></i> Facebook',
                url: 'http://demos.creative-tim.com/material-kit-pro/presentation.html'
                });
                $('#google').sharrre({
                share: {
                googlePlus: true
                },
                enableCounter: false,
                enableHover: false,
                enableTracking: true,
                click: function(api, options){
                api.simulateClick();
                api.openPopup('googlePlus');
                },
                template: '<i class="fa fa-google-plus"></i> Google',
                url: 'http://demos.creative-tim.com/material-kit-pro/presentation.html'
                });
                });
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-46172202-1']);
                _gaq.push(['_trackPageview']);
                (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
                })();
                // Facebook Pixel Code Don't Delete
                !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
                n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','../../../../connect.facebook.net/en_US/fbevents.js');
                try{
                    fbq('init', '111649226022273');
                    fbq('track', "PageView");
                }catch(err) {
                    console.log('Facebook Track Error:', err);
                }
                </script>