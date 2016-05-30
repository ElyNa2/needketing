<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Rss Lotto</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css' />
</head>
<body>
<!-- Css for user in large and medium screen -->
<div class="container hidden-xs hidden-sm">
    <div class="row">
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown pull-right">
                <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="img-responsive user-image pull-left" src="{{ url('assets/images/backend/user.png') }}" alt="Lotto User" style="margin-top:15px;" >
                                    <span class="pull-right user-drop" style="">
                                    Abishek Gurung<span class="caret"></span>
                                    </span>
                </a>
                <ul class="dropdown-menu dropdown-user text-center">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div><!-- Row -->
</div><!-- container -->

<div class="container dashboard-main">
    <!-- Start of header -->
    <header class="header">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Rss Lotto</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope icon"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell icon"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <li id="search">
                    <a href="#"><i class="fa fa-search icon"></i></a>
                </li>
                <li class="dropdown" id="show-on-click">
                    <a href="#"><form>
                            <input type="search" placeholder="Search" class="form-control" />
                        </form></a>
                </li>
                <li class="dropdown">
                    <a href="#"><!--<i class="fa fa-usd icon"></i> -->
                        <img src="{{ url('assets/images/backend/dollor.png') }}" class="ava-balance-img" alt=""/>
                        <span class="dollar-desc">Available Balance <span style="background-color: #62a4ed;padding:10px;"><b class="text-white">$</b>15.00</span></span></a>
                </li>
                <li class="dropdown hidden-lg hidden-md user-info">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <img class="img-responsive user-image pull-left" src="{{ url('assets/images/backend/user.png') }}" alt="Lotto User" style="/*margin-top:15px;*/" >
                        <span class="pull-right user-drop" >Abishek Gurung<i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu dropdown-user text-center">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown" style="display:none;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user text-center">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

        </nav>
    </header>
    <!-- Dashboard Content -->
    <div class="main-content ">
        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li>
                        <a href="index.html" ><i class="fa fa-home hidden-xs"></i> Dashboard  <i class="right-space fa fa-angle-double-right pull-right hidden-xs"></i></a>
                    </li>
                    <li>
                        <a href="verification.html"><i class="fa fa-check-circle-o hidden-xs"></i> Verification <i class=" right-space fa fa-angle-double-right pull-right hidden-xs"></i></a>
                    </li>
                    <li>
                        <a href="topup.html"><i class="fa fa-dollar hidden-xs"></i> Top Up <i class=" right-space fa fa-angle-double-right pull-right hidden-xs"></i></a>
                    </li>
                    <li>
                        <a href="group.html"><i class="fa fa-user hidden-xs"></i> Group <i class="right-space fa fa-angle-double-right pull-right hidden-xs"></i></a>
                    </li>
                    <li>
                        <a href="widthdraw.html"><i class="fa fa-dashcube hidden-xs"></i> WidthDraw <i class="right-space fa fa-angle-double-right pull-right hidden-xs"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <a href="#menu-toggle" class="" id="menu-toggle"><i class="fa fa-navicon icon"></i></a>
                    <a href="" class="verified pull-right"><i class="fa fa-check-circle-o"></i> Verified</a>
                    <!-- Alert -->
                    <div class="alert alert-success fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> You Need To go Verification First to go click here <a href="verification.html">Verify</a>
                    </div><!-- Alert -->
                    <div class="row">
                        <h2 class="text-center welcome-heading">Welcome To Rss Lotto</h2>
                    </div>

                    <div class="row boxes">
                        <div class="col-lg-12"><article class="col-md-3">
                                <div class="box text-center">
                                    <img src="{{ url('assets/images/backend/draw.png') }}"/>
                                    <p>Play Games</p>
                                </div>
                            </article>
                            <article class="col-md-3">
                                <div class="box text-center">
                                    <img src="{{ url('assets/images/backend/view.png') }}"/>
                                    <p>View Games</p>
                                </div>
                            </article>
                            <article class="col-md-3">
                                <div class="box text-center">
                                    <img src="{{ url('assets/images/backend/play.png') }}"/>
                                    <p>Results</p>
                                </div>
                            </article>
                            <article class="col-md-3">
                                <div class="box text-center">
                                    <img src="{{ url('assets/images/backend/support.png') }}"/>
                                    <p>Support</p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="row ads">
                        <div class="col-md-12">
                            <img src="{{ url('assets/images/backend/advert.png') }}" class="img-responsive" />
                        </div>
                    </div>

                    <div class="row boxes">
                        <article class="col-md-12">
                            <div class="groups ">
                                <div class="image-dollor pull-left">
                                    <img src="{{ url('assets/images/backend/games.png') }}"  style="padding: 17px 15px 17px 15px; " alt=""/>
                                    <!--<img src="images/groups.png"  style="padding: 16px;" alt=""/>-->
                                </div>
                                <div class="topup-title">
                                    <p>Games</p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="group-content">
                                    <form action="" class="text-left">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Lotto</a></li>
                                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Oz Lotto</a></li>
                                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">PowerBall</a></li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="home">
                                                        <ul class="list-group">
                                                            <li class="list-group-item">SAT</li>
                                                            <li class="list-group-item">SUN</li>
                                                            <li class="list-group-item">MON</li>
                                                        </ul>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="profile">
                                                        <ul class="list-group">
                                                            <li class="list-group-item">SAT</li>
                                                            <li class="list-group-item">SUN</li>
                                                            <li class="list-group-item">MON</li>
                                                        </ul>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="messages">
                                                        <ul class="list-group">
                                                            <li class="list-group-item">SAT</li>
                                                            <li class="list-group-item">SUN</li>
                                                            <li class="list-group-item">MON</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </div><!-- .row .boxes -->
                </div><!-- Conatainer Fluid -->
            </div><!-- Page content Wrapper -->
        </div><!-- /#wrapper -->
    </div><!-- main content -->
</div><!-- /.container -->
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/custom.js"></script>
</body>
</html>