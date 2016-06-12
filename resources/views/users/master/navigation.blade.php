<div class="container">
    <div class="row nkt-header">
        <div class="col-md-5">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}">NeedKeting</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Notifications</a></li>
                            <li><a href="#">Messages</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div><!--//.col-lg-4 -->
        <div class="col-lg-4 text-center">
            <div class="dropdown">
                <img data-toggle="dropdown" src="{{ Auth::user()->image }}" style="height:60px;width: 60px;border-radius: 60px" />
                <ul class="dropdown-menu text-center">
                    <li><a href="{{ url('user/profile/account') }}">Settings</a></li>
                    <li><a href="{{ url('user/profile') }}">View Profile</a></li>
                    <li><a href="{{ url('tags/subscribe') }}">Manage Subscription</a></li>
                    <li><a href="{{ url('logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3">
           {{-- <form action="">
                <input type="text" placeholder="Search" ng-model="search" class="form-control">
            </form>--}}
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" ng-model="search">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
            </div><!-- /input-group -->
        </div>
    </div>
</div>
