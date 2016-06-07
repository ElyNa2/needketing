needKeting = angular.module('needKeting',[],function($interpolateProvider) {
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
    $http.get('/all/posts').success(function (response) {
        $scope.posts = response;
    });
});
needKeting.controller('UserPostsController',function ($scope,$http) {
    $http.get('/all/posts/user').success(function (response) {
        $scope.posts = response;
    });
})
/*
 This TagController is used to get all the tags lists for display for  Popular tags widgets
 */
needKeting.controller('TagController',function($scope,$http){
    $http.get('/all/tags').success(function(response){
        $scope.tags = response;
    });
});
/*
 CommentController is used to get all the comments related to the user and posts.
 */
needKeting.controller('CommentController',function($scope,$http){

    $http.get('/all/comments').success(function(response){
        $scope.comments = response;
    });

    /*
     $scope.addComment = function(){
     var comment = {
     user_id: 1,
     content: $scope.contentField,
     post_id: 1,
     published_at: '2017-02-12'
     };

     $scope.comments.push(comment);
     $http.posts('/users/comments',comment);
     console.log(comment);
     };
     */
});
needKeting.controller('AuthController',function ($scope,$http) {
    $http.get('/auth/user').success(function (response) {
        $scope.user = response;
    });
});

needKeting.controller('SiteInfoController',function ($scope,$http) {
    $http.get('/all/site_info').success(function (response) {
        $scope.site_infos = response;
    })

})