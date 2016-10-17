<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>


        <title>{{ $page_title or "ICMonitoring" }}</title>
	<link href="{{ asset("/images/monitoring_icon.png") }}" rel="shortcut icon" type="image/x-icon" />
        <!-- Bootstrap 3.3.2 -->
        <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />

        <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />


        <!-- PLUGINS-->
        <!-- Datatables -->
         <link href="{{ asset("/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.css")}}" rel="stylesheet" type="text/css" />

        <link href="{{ asset("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("/bower_components/AdminLTE/plugins/datatables/jquery.dataTables_themeroller.css")}}" rel="stylesheet" type="text/css" />
       
        <!-- Datepicker -->
        <link href="{{ asset("/bower_components/AdminLTE/plugins/datepicker/datepicker3.css")}}" rel="stylesheet" type="text/css" />


        <!-- REQUIRED JS SCRIPTS -->
        <!-- jQuery 2.1.3 -->
        <script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jQuery-2.2.3.min.js") }}"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>
        <style>

            body {
                font-family: Roboto, "Helvetica Neue", sans-serif;
            }
            
            table {
                font-size: 11px;
            }
            
            .content-wrapper{
                background-image: url('{{ asset("images/office-still-life.jpg") }}');
                
            }
            section.content-header{
                color: aliceblue;
            }
            
            div.box{
                opacity: 0.9;
            }

        </style>
<!--        <script>
setTimeout(function () {
    window.location.reload(1);
}, 60000);</script>-->
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper ">

            @include('header')
            @include('sidebar')



            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

             
                <div class="">
                    @yield('content')
                </div>

            </div>


            @include('footer')

        </div>




        <!--PLUGINS-->
        <!-- Datatables -->
        <script src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js") }}"></script>
        <script src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js") }}"></script>
        
          <!-- Datepicker -->
        <script src="{{ asset ("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js") }}"></script>

        <!-- jQuery UI -->
         <!--<script src="{{ asset ("/bower_components/AdminLTE/plugins/jQueryUI/jquery-ui.min.js") }}"></script>-->
              
      
        <!-- JAVASCRIPTS -->
        <script src="{{ asset ("/app/js/admin_template.js") }}" type="text/javascript"></script>



    </body>
</html>