<!DOCTYPE html>
<html ng-app="needKeting">
<head>
    <title>
        @yield('title') | Needketing
    </title>
    @include('users.master.css')
</head>
<body>


    @include('users.master.navigation')

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>We found Some errors !</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if($status)
        <div class="alert alert-info">
            {{ $status }}
        </div>
    @endif
    <div class="nkt-client-dashboard" ng-app="needKeting">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center ">
                    @yield('user_widget')

                    <div ng-controller="TagController" class="nkt-popular-tag-list text-left ">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">Popular Tags</h4>
                            </a>
                            <a class="list-group-item" ng-repeat="tag in tags">#<% tag.tag_name %></a>
                        </div>
                    </div>
                </div>

                @yield('content')
            </div>
        </div>
    </div>

    @include('users.master.footer')
    @include('users.master.js')
</body>
</html>