<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Needketing</title>
    @include('admin.master.css');

</head>
<body>
<!-- Css for user in large and medium screen -->
<div class="container">
    <div class="row">

    </div><!-- Row -->
</div><!-- container -->

<div class="container dashboard-main">
    <!-- Start of header -->
    @include('admin.master.navigation')
    <!-- Dashboard Content -->
    <div class="main-content ">
        <div id="wrapper">
            @include('admin.master.sidebar')
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    @include('errors.list')

                    @if($status)
                        <div class="alert alert-info">
                            {{ $status }}
                        </div>
                    @endif

                    <a href="#menu-toggle" class="" id="menu-toggle"><i class="ion ion-android-menu icon"></i></a>

                    @yield('content')
                </div><!-- Conatainer Fluid -->
            </div><!-- Page content Wrapper -->
        </div><!-- /#wrapper -->
    </div><!-- main content -->
</div><!-- /.container -->
@include('admin.master.js')
</body>
</html>