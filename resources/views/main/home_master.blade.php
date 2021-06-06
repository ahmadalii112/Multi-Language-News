<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easy Online News Site</title>

    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/style.css')}}" rel="stylesheet">

</head>
<body>
@include('main.body.haeder')

<!-- top-add-start -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                <div class="top-add"><img src="{{asset('frontend/assets/img/top-ad.jpg')}}" alt="" /></div>
            </div>
        </div>
    </div>
</section> <!-- /.top-add-close -->

<!-- date-start -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="date">
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>  Lahore </li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i>  Monday, 19th October 2021 </li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> Update 5 min ago </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section><!-- /.date-close -->

@yield('content')




@include('main.body.footer')





<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
</body>
</html>