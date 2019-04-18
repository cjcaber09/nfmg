<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    
    <title>Material Pro Admin Template - Responsive web app kit dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href={{asset('assets/plugins/prism/prism.css')}} rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href={{asset('assets/css/colors/purple.css')}} id="theme" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>
<body>
    @include('layouts.preloader')
    @if (Auth::check())
        @include('layouts.header')
        @include('layouts.sidebar')
    
    <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                @include('layouts.pagetitle')
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                @endif
                @yield('content')
    @if (Auth::check())
            </div>
    </div>
    @endif
    <script src={{ asset('assets/plugins/jquery/jquery.min.js') }}></script>
    <script src={{ asset('assets/js/custom.min.js') }}></script>
    <script src={{ asset('assets/plugins/bootstrap/js/popper.min.js') }}></script>
    <script src={{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}></script>
    <script src={{ asset('assets/js/jquery.slimscroll.js') }}></script>
    <script src={{ asset('assets/js/waves.js') }}></script>
    <script src={{ asset('assets/js/sidebarmenu.js') }}></script>
    <script src={{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}></script>
    <script src={{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}></script>

    <script>
        $(document).on('click','.remove',function () {
            $(this).closest('.formInputs').remove();
        });
        var appemd = '<div class="form-group row formInputs"> <div class="col-lg-4"> <input type="text" class="form-control form-control-line" placeholder="Form Name" name="formName[]" style="cursor: auto;"> </div><div class="col-lg-4"> <select type="text" class="form-control form-control-line" placeholder="Form Input" name="formInput[]" style="cursor: auto;"> <option Value="">Form Input</option> <option value="1">True</option> <option value="0">False</option> </select> </div><div class="col-lg-3"> <select type="text" class="form-control form-control-line" required name="formReq[]" style="cursor: auto;"> <option Value="">Form Required?</option> <option value="1">True</option> <option value="0">False</option> </select> </div><div class="col-lg-1"> <a class="btn btn-secondary remove" id=""><i class="fa fa-trash"></i></a> </div></div>';

        
        $('.addForm').click(function () {
            $('.Trackforms').append(appemd);
        });
    </script>
</body>
</html>