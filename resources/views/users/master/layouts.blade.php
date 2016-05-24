<!DOCTYPE html>
<html ng-app="needKeting">
<head>
    <title>
        @yield('title') | Needketing
    </title>
    @include('users.master.css')
</head>
<body>
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>We found Some errors !</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if($status)
        <div class="alert alert-info">
            {{ $status }}
        </div>
    @endif

    @include('users.master.navigation')

        @yield('content')

    @include('users.master.footer')
    @include('users.master.js')
</body>
</html>