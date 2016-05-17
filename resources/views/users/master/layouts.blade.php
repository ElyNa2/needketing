<html>
<head>
    <title>
        @yield('title') | Needketing
    </title>
    @include('users.master.css')
</head>
<body>
    @include('users.master.navigation')

    @yield('content')

    @include('users.master.footer')
    @include('users.master.js')
</body>
</html>