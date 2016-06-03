@extends('admin.master.layouts')

@section('title','Admin Dashboard')

@section('content')
    <a href="" class="verified pull-right"><i class="fa fa-check-circle-o"></i> Verified</a>
    <!-- Alert -->
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> You Need To go Verification First to go click here <a href="verification.html">Verify</a>
    </div><!-- Alert -->
    <div class="row">
        <h2 class="text-center welcome-heading">Welcome To NeedKeting</h2>
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

    <div class="row boxes">
        <article class="col-md-12">
            <div class="groups ">
                <div class="image-dollor pull-left">
                    <img src="{{ url('assets/images/backend/games.png') }}"  style="padding: 17px 15px 17px 15px; " alt=""/>
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
@endsection