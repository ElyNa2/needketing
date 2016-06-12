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
            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Account </a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Password</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Web Notification</a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Email Notification</a></li>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
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
                    <div role="tabpanel" class="tab-pane fade" id="profile">
                        <h3>Password</h3>
                        <p>Edit Your Password</p>
                        <hr>
                        {!! Form::model($user,['route'=>['user.profile.updatePassword',$user->id],'method'=>'put']) !!}

                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::label('old_password') !!}
                            </div>
                            <div class="col-lg-9">
                                {!! Form::password('old_password', ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::label('password') !!}
                            </div>
                            <div class="col-lg-9">
                                {!! Form::password('password', ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::label('password_confirmation') !!}
                            </div>

                            <div class="col-lg-9">
                                {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-lg-9 col-lg-offset-3">
                            {!! Form::submit('Save Changes',['class'=>'btn btn-warning pull-right']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="messages">...</div>
                    <div role="tabpanel" class="tab-pane fade" id="settings">...</div>
                </div>

            </div>

        </div>
    </div>

@endsection