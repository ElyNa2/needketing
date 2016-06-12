@extends('users.master.layouts')

@section('title','Tags')

@section('tag-name')
    <div class="well text-center">#tag-are-here</div>
@endsection

@section('user_widget')

    <div class="nkt-user-box panel panel-default" ng-controller="AuthController" style="padding:20px 0 20px 0;">
        <img src="<% user.image %>" style="border-radius: 20px;"/>
        <h4><% user.name %></h4>
        <p><% user.username %></p>
    </div>

@endsection

@section('content')
    <div class="col-lg-7 col-lg-offset-1">
        <div class="nkt-creating-post-form">
            <div class="col-lg-2" ng-controller="AuthController">
                <img src="<% user.image %>" class="img-responsive"  height="50px" width="50px"/>
            </div>
            <div class="col-lg-10">
                @include('users.master.create_post')
            </div>
        </div><!-- //nkt-creating-post-form -->

        <div ng-controller="TagPostsController">

            <div ng-controller="AuthController" class="nkt-post-list" ng-repeat="post in posts | filter:search">

                <div class="col-lg-2 nkt-post-owner" ng-if="post.userImage !== ''">
                    <img src="<% post.userImage %>" alt="" class="img-responsive" height="50px" width="50px">
                </div>
                <div class="col-lg-2 nkt-post-owner" ng-if="post.userImage === '' ">
                    <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" width="50px" height="50px" />
                </div>


                <div class="col-lg-10 nkt-post-detail">

                        <b><% post.userName %></b>
                        <small class="time-detail">
                            <% post.published_at %>
                        </small>
                        <small class="pull-right">
                            <span class="glyphicon glyphicon-map-marker"></span> <% post.location %>
                        </small>


                    <div class="clearfix"></div>

                    <p class="nkt-post-text">
                        <% post.content %>
                        <span ng-repeat="tags in post.tags">
                            <a href="">#<% tags.tag_name %> </a>
                        </span>
                    </p>

                    <a ng-if="post.image" href="">
                        <img src="<% post.image %>" alt="<% post.userName %>" class="img-responsive">
                    </a>


                    <div class="nkt-post-actions">
                        <button class="btn btn-primary" ng-click="showme=true">Comment</button>
                        <button class="btn btn-primary">Share</button>
                        <span class="more-option"  ng-model="moreoption" ng-click="moreoption=!moreoption">
                            <i class="ion ion-android-more-horizontal"></i>
                        </span>
                    </div>

                    <div ng-if=" user.id == post.user_id">
                        <div class="list-group" ng-show="moreoption">
                            <a href="" class="list-group-item" data-toggle="modal" data-target="#myModal<% post.id  %>">Edit Post</a>
                            <a href="" class="list-group-item">Change Location</a>
                            <a href="" class="list-group-item">Delete</a>
                        </div>
                    </div>

                    @include('users.master.post_edit_modal')

                    <div ng-if=" user.id != post.user_id">
                        <div class="list-group" ng-show="moreoption">
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<% post.id  %>" data-whatever="@mdo">Report Post</a>
                        </div>
                    </div>

                    <div class="nkt-comment-list" ng-show="showme">
                        <div class="nkt-comment-form" ng-controller="CommentController" >
                            <div class="col-lg-2">
                                <img src="{{ Auth::user()->image }}" alt=""  height="40px" width="40px">
                            </div>

                            <form accept-charset="UTF-8" enctype="multipart/form-data">
                                <input name="_token" type="hidden"  value="{{ csrf_token() }}">
                                <input name="user_id" type="hidden"  ng-value="{{ Auth::user()->id }}">
                                <input name="postIdField"  type="hidden" ng-init="post.id" ng-value="postIdField" >
                                <input name="published_at" type="hidden" value="{{ Carbon\Carbon::today()->format('Y-m-d') }}">
                                <div class="nkt-comment-form col-lg-8 " >
                                    <input class="form-control" placeholder="comment"  ng-model="contentField" type="text" >
                                </div>

                                <div class="col-lg-2 pull-right">
                                    <button class="btn btn-success" type="submit" ng-click="addComment()">comment</button>
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
                @include('users.master.post_report_modal')
            </div>
        </div>
    </div>
@endsection
