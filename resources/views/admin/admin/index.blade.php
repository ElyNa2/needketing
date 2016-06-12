@extends('admin.master.layouts')

@section('title','Admin Dashboard')

@section('content')
    <a href="" class="verified pull-right"><i class="fa fa-check-circle-o"></i> Verified</a>
    <!-- Alert -->
    <div class="row">
        <h2 class="text-center welcome-heading">Welcome To NeedKeting</h2>
    </div>

    <div class="row boxes">
        <a href="{{ URL::to('admin/posts') }}">
            <article class="col-md-3">
                <div class="box text-center">
                    <i class="ion ion-ios-book-outline" style="background-color:aliceblue;padding:20px;border-radius: 50%; font-size: 24px;"></i>
                    <p>Posts</p>
                    <p style="padding:10px;background-color:aliceblue;color:#000000">{{ $posts }}</p>
                </div>
            </article>
        </a>
        <article class="col-md-3">
            <div class="box text-center">
                <i class="ion ion-ios-list" style="background-color:aliceblue;padding:20px;border-radius: 50%; font-size: 24px;"></i>
                <p>Tags</p>
                <p style="padding:10px;background-color:aliceblue;color:#000000">50</p>
            </div>
        </article>
        <article class="col-md-3">
            <div class="box text-center">
                <i class="ion ion-ios-book-outline" style="background-color:aliceblue;padding:20px;border-radius: 50%; font-size: 24px;"></i>
                <p>Users</p>
                <p style="padding:10px;background-color:aliceblue;color:#000000">50</p>
            </div>
        </article>
        <article class="col-md-3">
            <div class="box text-center">
                <i class="ion ion-ios-refresh-outline" style="background-color:aliceblue;padding:20px;border-radius: 50%; font-size: 24px;"></i>
                <p>Page Views</p>
                <p style="padding:10px;background-color:aliceblue;color:#000000">50</p>
            </div>
        </article>
    </div>

    <div class="row" style="margin-top:30px;">
        <div class="col-md-4">
            <div class="list-group">
                <a class="list-group-item active">
                <h4 class="list-group-item-heading">Logged In Users Info</h4>
                </a>
                @foreach($users as $user)
                <a href="#" class="list-group-item">
                    <h4>{{ $user->name }}</h4>
                    Last online at {{ $user->last_login_at->diffForHumans() }}
                </a>
                @endforeach
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>

@endsection