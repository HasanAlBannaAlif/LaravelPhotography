<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Dashboard</title>
    <link href="{{asset('/public/admin')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/public/admin')}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/public/admin')}}/css/datepicker3.css" rel="stylesheet">
    <link href="{{asset('/public/admin')}}/css/styles.css" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('/public/admin')}}/js/html5shiv.js"></script>
    <script src="{{asset('/public/admin')}}/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

@include('admin.include.nav')
@include('admin.include.sidebar')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
        </ol>
        @yield('body')
    </div><!--/.row-->
</div>	<!--/.main-->




<script src="{{asset('/public/admin')}}/js/jquery-1.11.1.min.js"></script>
<script src="{{asset('/public/admin')}}/js/bootstrap.min.js"></script>
<script src="{{asset('/public/admin')}}/js/chart.min.js"></script>
<script src="{{asset('/public/admin')}}/js/chart-data.js"></script>
<script src="{{asset('/public/admin')}}/js/easypiechart.js"></script>
<script src="{{asset('/public/admin')}}/js/easypiechart-data.js"></script>
<script src="{{asset('/public/admin')}}/js/bootstrap-datepicker.js"></script>
<script src="{{asset('/public/admin')}}/js/custom.js"></script>
<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
</script>

</body>
</html>
