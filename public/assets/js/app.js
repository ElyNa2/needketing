var needKeting = angular.module('needKeting',[],function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

/*
 Post Controller is responsible
 to fetch all the data associated posts such as tags,
 Post owner user name and posts values, comments to each posts
 */
needKeting.controller('PostController',function($scope,$http){
    /*
     Getting all the posts related data through controller
     */
    $http.get('/all/posts').success(function (posts) {
        $scope.posts = posts;
    });
});

needKeting.controller('UserPostsController',function ($scope,$http) {
    $http.get('/all/posts/user').success(function (posts) {
        $scope.posts = posts;
    });
});

needKeting.controller('TagPostsController',function ($scope,$http) {
    $http.get('/all/{tag_id}/tag').success(function (posts) {
        $scope.posts = posts;
    });
});

/*
 This TagController is used to get all the tags lists for display for  Popular tags widgets
 */
needKeting.controller('TagController',function($scope,$http){
    $http.get('/all/tags').success(function(tags){
        $scope.tags = tags;
    });
});


needKeting.constant("CSRF_TOKEN", '{!! csrf_token() !!}');
/*
 CommentController is used to get all the comments related to the user and posts.
 */
needKeting.controller('CommentController',function($scope,$http){

    $http.get('/all/posts').success(function (response) {
        $scope.posts = response;
    });

     $scope.addComment = function(CSRF_TOKEN){
         var comment = {
             _token:CSRF_TOKEN,
             user_id: $scope.user.id,
             content: $scope.contentField,
             post_id: $scope.post.id,
         };
         console.log(comment);
         $http.post('/users/comments',comment).
         then(function successCallback(response) {
             console.log(response);
             $scope.post.comments.push(comment);
         }, function errorCallback(response) {
             console.log(response);
         });
     }
});


needKeting.controller('AuthController',function ($scope,$http) {
    $http.get('/auth/user').success(function (user) {
        $scope.user = user;
    });
});

needKeting.controller('SiteInfoController',function ($scope,$http) {
    $http.get('/all/site_info').success(function (site_infos) {
        $scope.site_infos = site_infos;
    })

})