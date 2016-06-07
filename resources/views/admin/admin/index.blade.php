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
@endsection