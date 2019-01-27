<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Estate Agency</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')
    <div class="container" style="margin-top:70px; ">
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
        <div class="row">
            <div class="col-md-12 row">
                @include('inc.notifications')
                @yield('content')
            </div>
            {{-- <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
            </div> --}}
        </div>
    </div>

   <!-- Footer -->
	<section id="footer" class="blog-footer" style="margin-top: 20px; padding-top: 10px">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-google-plus"></i></a></li>
                        
                        </ul>
                    </div>
                    </hr>
                </div>	
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                        <p><u></u></p>
                        <p class="h6">&copy 2019 All right Reversed.<a class="text-green ml-2" href="#" target="_blank">Peter Ncube</a></p>
                    </div>
                    </hr>
                </div>	
            </div>
        </section>
        <!-- ./Footer -->
<script src="/js/app.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
    CKEDITOR.replace( 'article2-ckeditor' );
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqetd6AVqd_lRo-3IQN3xSw1cSJVLC1zg&callback=initMap"
async defer></script>
</body>
</html>