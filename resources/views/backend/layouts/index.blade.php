<!DOCTYPE html>
<html lang="en">
<head>
    <title>ModhuShop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{asset('assets/toastr.min.css')}}">
    @livewireStyles
    @stack('css')
</head>
<body class="app sidebar-mini">
@include('backend.layouts.header');
@include('backend.layouts.sidebar');
@yield('content')
<!-- Essential javascripts for application to work-->
<script src="{{asset('backend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('backend/js/popper.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/main.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('backend/js/plugins/pace.min.js')}}"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="{{asset('backend/js/plugins/chart.js')}}"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
@livewireScripts
{!! Toastr::message() !!}
@stack('script')
<script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error('{{$error}}', 'Error', {
                closeButton:true,
                progressBar:true,
            });
        @endforeach
    @endif
</script>
</body>
</html>
