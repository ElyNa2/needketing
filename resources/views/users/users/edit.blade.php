@extends('users.master.layouts')

@section('title','User Edit')

@section('user_widget')
    <div class="nkt-user-box panel panel-default" ng-controller="AuthController" style="padding:20px 0 20px 0;">
        <img src="<% user.image %>" style="border-radius: 20px;"/>
        {!! Form::model($user,['route'=>['user.profile.update',$user->id],'method'=>'put','files'=>'true']) !!}
            <input type="file" name="image">
            <button type="submit" class="btn btn-primary">Edit Image</button>
        {!! Form::close() !!}

        <h4><% user.name %></h4>
        <p><% user.email %></p>
        <p><b>Dob</b><% user.dob %></p>
        <p><b>About:</b><% user.description %></p>
        <p><b>Country:</b> <% user.country %></p>
    </div>
@endsection

@section('content')
    <div class="col-lg-7 col-lg-offset-1">
        {!! Form::model($user,['route'=>['user.profile.update',$user->id],'method'=>'put']) !!}
            <div class="form-group">
                <div class="col-lg-3">
                    {!! Form::label('name') !!}
                </div>
                <div class="col-lg-9">
                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-3">
                    {!! Form::label('description') !!}
                </div>
                <div class="col-lg-9">
                    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-3">
                    {!! Form::label('country') !!}
                </div>
                <div class="col-lg-9">
                    {!! Form::select('country',['Nepal'=>'Nepal','India'=>'India','Pakistan'=>'Pakistan'],null,['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-3">
                    {!! Form::label('website') !!}
                </div>
                <div class="col-lg-9">
                    {!! Form::text('website',null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-3">
                    {!! Form::label('dob') !!}
                </div>
                <div class="col-lg-9">
                    {!! Form::text('dob',null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-lg-3"></div>
            <div class=" pull-right col-lg-9">
                {!! Form::submit('Update Profile',['class'=>'btn btn-warning pull-right']) !!}
                <button class="btn btn-danger pull-right"> Cancel </button>
            </div>
        {!! Form::close() !!}
    </div>
@endsection