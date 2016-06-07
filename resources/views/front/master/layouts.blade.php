<html ng-app="needKeting">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Needketing</title>
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="site-info">
        <div class="container">
            <div class="row">
                <header class="site-info-header'">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 text-center">
                        <img src="{{ url('assets/images/needketinglogoblack.png') }}" alt="">
                    </div>
                    <div class="col-lg-4"></div>
                </header>
            </div>
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>

    @include('front.master.footer')


<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>