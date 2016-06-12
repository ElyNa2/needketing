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

                {!! Form::open(['method'=>'posts','url'=>'users/posts','files'=>'true']) !!}

                    <div class="form-group">

                        <textarea class="form-control" placeholder="What You Need ?" name="content" cols="50" rows="4" ></textarea>

                    </div>

                    <div class="col-lg-3">

                        <span class="glyphicon glyphicon-camera" id="image-upload"></span>

                        <input  type="file" name="image" >

                        <a href="#" ng-model="collapsed" ng-click="collapsed=!collapsed">

                            <span class="glyphicon glyphicon-map-marker"></span>

                        </a>

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

        </div><!-- //nkt-creating-posts-form -->

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

                    <a ng-if="post.image" href="">
                        <img src="<% post.image %>" alt="<% post.userName %>" class="img-responsive">
                    </a>


                    <div class="nkt-post-actions">
                        button class="btn btn-primary" ng-click="showme=true">Comment</button>
                        <button class="btn btn-primary">Share</button>
                        <span class="more-option"  ng-model="moreoption" ng-click="moreoption=!moreoption">
                            <i class="ion ion-android-more-horizontal"></i>
                        </span>
                    </div>

                    <div ng-if=" user.id == post.user_id">
                        <div class="list-group" ng-show="moreoption">
                            <a href="/users/posts/<% post.id %>/edit"  class="list-group-item" data-toggle="modal"  data-target="#myModal1">Edit Post</a>
                            <a href="/users/posts/<%post.id%>/confirm" class="list-group-item" data-toggle="modal"  data-target="#confirmModal">Delete Post</a>
                        </div>
                    </div>

                    @include('users.master.post_delete_modal')
                    @include('users.master.post_edit_modal')


                    <div ng-if=" user.id != post.user_id">
                        <div class="list-group" ng-show="moreoption">
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<% post.id  %>" data-whatever="@mdo">Report Post</a>
                        </div>
                    </div>

                    <div class="nkt-comment-list" ng-show="showme">
                        @include('users.master.comment_form')
                        @include('users.master.comment_list')
                    </div><!-- End of Comment view -->
                </div>
                @include('users.master.post_report_modal')
            </div><!-- nkt-posts-list -->

        </div>

    </div>

@endsection
