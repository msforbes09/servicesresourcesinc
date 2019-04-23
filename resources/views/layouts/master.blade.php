<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ url('assets/images/sri-logo1-128x128.png') }}" type="image/x-icon">

    <title>SRI Website Admin Panel</title>

    <link rel="stylesheet" href="{{ url('css/bootstrap-lumen.min.css') }}">

    <link href="{{ url('sb-admin/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <link href="{{ url('sb-admin/dist/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link href="{{ url('sb-admin/dist/css/style.css') }}" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

</head>

<body>

    <div id="wrapper">

        

        @include('layouts.navbar')



        <div id="page-wrapper">

            <div class="container-fluid">

                

                @yield('content')



            </div>

        </div>



    </div>

    <script src="{{ url('sb-admin/vendor/jquery/jquery.min.js') }}"></script>

    <script src="{{ url('sb-admin/vendor/bootstrap/js/bootstrap.js') }}"></script>

    <script src="{{ url('sb-admin/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <script src="{{ url('sb-admin/dist/js/sb-admin-2.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>

         $(".branch-delete").click(function(){

                if (confirm("Are you sure you want to delete branch?")){

                    $('form#delete').submit();

                }

            });

        @if(Session::has('message'))

            var type = "{{ Session::get('type', 'info') }}";

            switch(type){

                case 'info':

                toastr.info("{{ Session::get('message') }}");

                break;

                

                case 'warning':

                toastr.warning("{{ Session::get('message') }}");

                break;



                case 'success':

                toastr.success("{{ Session::get('message') }}");

                break;



                case 'error':

                toastr.error("{{ Session::get('message') }}");

                break;

            }

        @endif          

       

    </script>

</body>

</html>