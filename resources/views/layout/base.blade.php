<!DOCTYPE html>
<html lang="zh-CN">
<head>
    {{--<meta name="referrer" content="never">--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="keywords" content="@section('keywords')57bigcat@show">
    <meta name="description" content="@section('des')57bigcat@show">

    <title>
        @section('title')
            57早知道
        @show
    </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ url('bootstrap/assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('bootstrap/base.css') }}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="{{ url('bootstrap/assets/js/ie8-responsive-file-warning.js') }}"></script><![endif]-->
    <script src="{{ url('bootstrap/assets/js/ie-emulation-modes-warning.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .ling-search-navvar {
            display: block;
        }
        .ling-search-navvar-pc{
            display: none;
        }

        @media (min-width: 768px){
            .ling-search-navvar {
                display: none;
            }
            .ling-search-navvar-pc{
                display: block;
            }
        }
    </style>
</head>
<body>
@include('layout.menu_navbar')
<div class="container" style="min-height: auto">

    <div class="row">
        @section('breadcrumb')
        @show
        <div class="col-sm-7 col-sm-offset-1">
            @section('content')
            @show
        </div> <!-- article_list -main -->
        <div class="col-sm-3">
            @include('layout.right_siderbar')
        </div><!-- /.blog-sidebar -->
    </div><!-- /.row -->

</div><!-- /.container -->

@include('layout.footer')
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://lib.sinaapp.com/js/jquery/1.12.4/jquery-1.12.4.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ url('bootstrap/assets/js/vendor/jquery.min.js') }}"><\/script>')</script>
<script src="{{ url('bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ url('bootstrap/assets/js/ie10-viewport-bug-workaround.js') }}"></script>
<script src="{{ url('js/echo.min.js') }}"></script>

<script>
    echo.init({
        offset: 0,
        throttle: 2
    });
</script>

@section('js')
@show
</body>
</html>
