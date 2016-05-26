@extends('users.master.layouts')

@section('title','Account Setting')

@section('user_widget')
    <div class="nkt-user-box panel panel-default" ng-controller="AuthController" style="padding:20px 0 20px 0;">
        <img src="<% user.image %>" style="border-radius: 20px;"/>
        <h4><% user.name %></h4>
        <p><% user.email %></p>
        <p><b>Dob</b><% user.dob %></p>
        <p><b>About:</b><% user.description %></p>
        <p><b>Country:</b> <% user.country %></p>
        <a href="/user/profile/<% user.id %>/edit"><button class="btn btn-success">Edit</button></a>
    </div>
@endsection

@section('content')
    <div class="col-lg-7 col-lg-offset-1">
        <div class="row">

            <div class="col-lg-3"> <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
                    <li class="active"><a href="#home" data-toggle="tab">Account</a></li>
                    <li><a href="#profile" data-toggle="tab">Password</a></li>
                    <li><a href="#messages" data-toggle="tab">Email Notification</a></li>
                    <li><a href="#settings" data-toggle="tab">Web Notification</a></li>
                </ul>
            </div>

            <div class="col-lg-9">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <h3>Account</h3>
                        <p>Edit Your Basic Information</p>
                        <hr>
                        {!! Form::model($user,['route'=>['user.profile.update',$user->id],'method'=>'put']) !!}

                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('username') !!}
                                </div>
                                <div class="col-lg-9">
                                    {!! Form::text('username',null,['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('email') !!}
                                </div>
                                <div class="col-lg-9">
                                    {!! Form::email('email',null,['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="col-lg-9 col-lg-offset-3">
                                {!! Form::submit('Save Changes',['class'=>'btn btn-warning pull-right']) !!}
                            </div>

                        {!! Form::close() !!}
                    </div>
                    <div class="tab-pane" id="profile">
                        <h3>Password</h3>
                        <p>Edit Your Password</p>
                        <hr>
                        {!! Form::model($user,['route'=>['user.profile.update',$user->id],'method'=>'put']) !!}

                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::label('password') !!}
                            </div>
                            <div class="col-lg-9">
                                <input name="password" type="password" value="" id="password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-4">
                                {!! Form::label('new_password') !!}
                            </div>
                            <div class="col-lg-8">
                                <input name="new_password" type="password" value="" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::label('confirm') !!}
                            </div>
                            <div class="col-lg-9">
                                <input name="confirm" type="password" value="" id="confirm" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-9 col-lg-offset-3">
                            {!! Form::submit('Save Changes',['class'=>'btn btn-warning pull-right']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>

                    <div class="tab-pane" id="messages">Messages Tab.</div>
                    <div class="tab-pane" id="settings">Settings Tab.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection