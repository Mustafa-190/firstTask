<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="/frontend/img//apple-icon.png">
    <link rel="icon" type="image/png" href="/frontend/img//favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Shop | @yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/frontend/css/paper-kit.css?v=2.2.0" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/frontend/demo/demo.css" rel="stylesheet"/>
</head>

<body class="index-page sidebar-collapse">
<!-- Navbar -->
@include('layouts.nav')
<div class="main-panel">
    <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </div>
    <!--   Core JS Files   -->
   
    <script src="/frontend/js/core/popper.min.js" type="text/javascript"></script>
    <script src="/frontend/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="/frontend/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="/frontend/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="/frontend/js/plugins/moment.min.js"></script>
    <script src="/frontend/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="/frontend/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  $("body").on("click",".remove-user",function(){
    var current_object = $(this);
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "error",
        showCancelButton: true,
        dangerMode: true,
        cancelButtonClass: '#DD6B55',
        confirmButtonColor: '#dc3545',
        confirmButtonText: 'Delete!',
    },function (result) {
        if (result) {
            var action = current_object.attr('data-action');
            var token = jQuery('meta[name="csrf-token"]').attr('content');
            var id = current_object.attr('data-id');

            $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
            $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
            $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
            $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
            $('body').find('.remove-form').submit();
        }
    });
});
</script>
</body>

</html>