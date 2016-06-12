<!DOCTYPE html>
<html ng-app="needKeting">
<head>
    <title>
        @yield('title') | Needketing
    </title>
    @include('users.master.css')
</head>

<body>

    @include('users.master.navigation')
    @include('errors.list')

    @if($status)
        <div class="alert alert-info">
            {{ $status }}
        </div>
    @endif

    @yield('tag-name')

    <div class="nkt-client-dashboard" ng-app="needKeting">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center ">
                    @yield('user_widget')
                    @yield('popular_tags')
                </div>

                @yield('content')
            </div>
        </div>
    </div>

    @include('users.master.footer')
    @include('users.master.js')
</body>
</html>