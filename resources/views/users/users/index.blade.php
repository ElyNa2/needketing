@extends('users.master.layouts')

@section('title','needketing')

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
        <div class="nkt-creating-post-form">
            <div class="col-lg-2">
                @if(Auth::user()->image)
                    <img src="{{ Auth::user()->image }}" alt="" class="img-responsive">
                @else
                <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" width="100%" height="50px" />
                @endif
            </div>
            <div class="col-lg-10">
                {!! Form::open(['method'=>'post','url'=>'users/posts','files'=>'true']) !!}
                <div class="form-group">
                    <textarea class="form-control" placeholder="What You Need ?" name="content" cols="50" rows="4" ></textarea>
                </div>

                <div class="col-lg-3">

                    <span class="glyphicon glyphicon-camera" id="image-upload"></span>
                    <input  type="file" name="image" >

                    <a href="#" ng-model="collapsed" ng-click="collapsed=!collapsed"><span class="glyphicon glyphicon-map-marker"></span></a>
                    <div ng-show="collapsed">
                        {!! Form::select('location',
                        [
                            'Nawalparasi, Nepal' => 'Nawalparasi, Nepal',
                            'Kathmandu, Nepal' => 'Kathmandu, Nepal',
                            'Bhaktapur, Nepal' => 'Bhaktapur, Nepal',
                            'Lalipur, Nepal' => 'Lalitpur, Nepal'
                        ],null,['class'=>'form-control'])
                    !!}
                    </div>
                </div>

                <div class="col-lg-6">
                    {!! Form::select('tags[]',$tags,null,['id'=>'tag_list','class'=>'form-control','multiple']) !!}
                </div>

                <div class="col-lg-3">
                    <button class="btn btn-primary pull-right">Save</button>
                </div>
                </form>
            </div>
        </div><!-- //nkt-creating-post-form -->
        <div ng-controller="UserPostsController">
            <div class="nkt-post-list" ng-repeat="post in posts">


                <div class="col-lg-2 nkt-post-owner" ng-if="post.userImage !== ''">
                    <img src="<% post.userImage %>" alt="" class="img-responsive">
                </div>
                <div class="col-lg-2 nkt-post-owner" ng-if="post.userImage === '' ">
                    <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" width="100%" height="50px" />
                </div>

                <div class="col-lg-10 nkt-post-detail">

                    <p class="nkt-post-owner-name">
                        <% post.userName %>
                        <small class="time-detail">
                            <% post.published_at %>
                        </small>

                        <small class="pull-right">
                            <span class="glyphicon glyphicon-map-marker"></span> <% post.location %>
                        </small>

                    </p>

                    <div class="clearfix"></div>

                    <p><% post.content %>
                    <span ng-repeat="tags in post.tags">
                        <a href="">#<% tags.tag_name %> </a>
                    </span>
                    </p>

                    <a ng-if="post.image" href=""> <img src="<% post.image %>" alt="<% post.userName %>" class="img-responsive"></a>


                    <div class="nkt-post-actions">
                        <button class="btn btn-primary" ng-click="showme=true">Comment</button>
                        <button class="btn btn-primary">Share</button>
                        <i class="ion ion-android-more-horizontal"></i>
                    </div>
                </div>
                <div class="nkt-comment-list" ng-show="showme">
                    <div class="nkt-comment-form">

                        <div class="col-lg-2">
                            <img src="{{ Auth::user()->image }}" alt=""  height="40px" width="40px">
                        </div>

                        <div class="space"></div>
                        <div id="flash"></div>
                        <div id="show"></div>
                        <form method="POST" action="{{ url('users/comments') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}">

                            <input name="user_id" type="hidden" value="{{ Auth::user()->id }}">
                            <input name="post_id" type="hidden" value="<% post.id  %>">
                            <input name="published_at" type="hidden" value="{{ Carbon\Carbon::today()->format('Y-m-d') }}">

                            <div class="nkt-comment-form col-lg-8 " >
                                <input class="form-control" placeholder="comment" name="content" type="text" id="content">
                            </div>

                            <div class="col-lg-2 pull-right">
                                <button class="btn btn-success" type="submit">comment</button>
                            </div>
                        </form>
                    </div>
                    <div ng-controller="CommentController" class="row">
                        <div ng-repeat="comment in post.comments" class="col-lg-12">
                            <div class="col-lg-2" ng-if="comment.userImage !== ''">
                                <img src="<% comment.userImage %>" alt="" height="40px" width="40px">
                            </div>
                            <div class="col-lg-2  " ng-if="comment.userImage === ''">
                                <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" height="40px" width="40px"/>
                            </div>
                            <div class="col-lg-8">
                                <a href=""><% comment.userName %></a>
                                <% comment.content %>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                </div><!-- End of Comment view -->
            </div><!-- nkt-post-list -->
        </div>
    </div>

@endsection
