<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','panel de administrador')</title>   
        <link rel="stylesheet" href="{{ asset('plugines/chosen/chosen.css') }}">
         <link rel="stylesheet" href="{{ asset('plugines/trumbowyg/ui/trumbowyg.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-social/bootstrap.css')}}">
            <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/sb-admin.css')}}">

    <!-- Morris Charts CSS -->
        <link rel="stylesheet" href="{{ asset('css/plugins/morris.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.6.3/css/font-awesome.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
       <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet"> -->
        
    </head>

        <body>
            
            <div id="wrapper">
                @include('clientANDtrainer/menu')
                <!-- Navigation -->
                <section>
                    @include ('errors.validacion')
                    @yield('content')
                </section>
                
                <!-- /#page-wrapper -->

            </div>
            <!-- /#wrapper -->

            <!-- jQuery -->
               <script src="{{asset('bootstrap/js/jQuery.js')}}"></script>
                <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
                <script src="{{ asset('plugines/chosen/chosen.jquery.js') }}"></script>
                <script src="{{ asset('plugines/trumbowyg/trumbowyg.js') }}"></script>
                <script src="{{ asset('plugines/multifile-master/jquery.MultiFile.js') }}"></script>
                <script src="{{asset('js/scriptportada.js')}}"></script>
                @yield('js')            

            <!-- Morris Charts JavaScript -->
            <script src="{{ asset('js/plugins/morris/raphael.min.js') }}"></script>
            <script src="{{ asset('js/plugins/morris/morris.min.js') }}"></script>
            <script src="{{ asset('js/plugins/morris/morris-data.js') }}"></script>

        </body>

</html>