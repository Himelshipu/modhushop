<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'MODHUSHOP'}}</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/shop.ico">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/vendor/bootstrap.min.css') }}">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/vendor/font.awesome.min.css') }}">
<!-- Linear Icons CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/vendor/linearicons.min.css') }}">
<!-- Swiper CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/plugins/swiper-bundle.min.css') }}">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/plugins/animate.min.css') }}">
<!-- Jquery ui CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/plugins/jquery-ui.min.css') }}">
<!-- Nice Select CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/plugins/nice-select.min.css') }}">
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{asset ('assets/css/plugins/magnific-popup.css') }}">

<!-- Main Style CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/style.css') }}">


   <!-- Main CSS-->
   <link rel="stylesheet" type="text/css" href="admin/css/main.css">
   <!-- Font-icon css-->
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <body class="app sidebar-mini">


        @include('admin.sidebar')
        @yield('content')




<!-- Modernizer JS -->
{{-- <script src={{ asset('"assets/js/vendor/modernizr-3.7.1.min.js') }}"></script> --}}
<!-- jQuery JS -->
<script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>

<!-- Swiper Slider JS -->
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<!-- nice select JS -->
<script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
<!-- Ajaxchimpt js -->
<script src="{{ asset('assets/js/plugins/jquery.ajaxchimp.min.js') }}"></script>
<!-- Jquery Ui js -->
<script src="{{asset ('assets/js/plugins/jquery-ui.min.js') }}"></script>
<!-- Jquery Countdown js -->
<script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<!-- jquery magnific popup js -->
<script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>





<script src="admin/js/jquery-3.3.1.min.js"></script>
<script src="admin/js/popper.min.js"></script>
<script src="admin/js/bootstrap.min.js"></script>
<script src="admin/js/main.js"></script>
  <!-- Data table plugin-->
  <script type="text/javascript" src="admin/js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="admin/js/plugins/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">$('#sampleTable').DataTable();</script>
<!-- The javascript plugin to display page loading on top-->


<script src="admin/js/plugins/pace.min.js"></script>

<script type="text/javascript" src="admin/js/plugins/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="admin/js/plugins/sweetalert.min.js"></script>
<script type="text/javascript">
  $('#demoNotify').click(function(){
      $.notify({
          title: "Update Complete : ",
          message: "Something cool is just updated!",
          icon: 'fa fa-check'
      },{
          type: "info"
      });
  });
  $('.demoSwal').click(function(){
      swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel please!",
          closeOnConfirm: false,
          closeOnCancel: false
      }, function(isConfirm) {
          if (isConfirm) {
              swal("Deleted!", "Deleted Successfully", "success");
          } else {
              swal("Cancelled", "file is safe :)", "error");
          }
      });
  });
</script>


<!-- Page specific javascripts-->
<!-- Google analytics script-->
<script type="text/javascript">
  if(document.location.hostname == 'pratikborsadiya.in') {
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-72504830-1', 'auto');
      ga('send', 'pageview');
  }
</script>

<script type="text/javascript" src="admin/js/plugins/chart.js"></script>
<script type="text/javascript">
    var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56]
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 86]
            }
        ]
    };
    var pdata = [
        {
            value: 300,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Complete"
        },
        {
            value: 50,
            color:"#F7464A",
            highlight: "#FF5A5E",
            label: "In-Progress"
        }
    ]

    var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);

    var ctxp = $("#pieChartDemo").get(0).getContext("2d");
    var pieChart = new Chart(ctxp).Pie(pdata);
  </script>
  <!-- Google analytics script-->
  <script type="text/javascript">
    if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
  </script>

</body>
</html>
