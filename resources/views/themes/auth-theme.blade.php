<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="_token" content="{{csrf_token()}}">
    <link rel="icon" href="https://otewee.com/assets_admin/img/logo_text.svg" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Otewee</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link href="{{asset('assets/css/material-dashboard.min40a0.css?v=2.0.2')}}" rel="stylesheet" />
    <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="off-canvas-sidebar">
    @yield('content')
    <!--   Core JS Files   -->
    <script src="{{asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

    <script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/sweetalert2.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/fullcalendar.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-jvectormap.js')}}"></script>
    <script src="{{asset('assets/js/plugins/nouislider.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/arrive.min.js')}}"></script>
    <script async defer src="{{asset('buttons.github.io/buttons.js')}}"></script>
    <script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
    <script src="{{asset('assets/js/material-dashboard.min40a0.js?v=2.0.2')}}" type="text/javascript"></script>
    <script src="{{asset('assets/demo/demo.js')}}"></script>
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();
            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700);
        });

        $(document).ready(function() {
            // Initialise the wizard
            demo.initMaterialWizard();
            setTimeout(function() {
                $('.card.card-wizard').addClass('active');
            }, 600);
        });
    </script>

</body>

</html>