<div class="nkt-comment-form" ng-controller="CommentController" >
    <div class="col-lg-2">
        <img src="{{ Auth::user()->image }}" alt=""  height="40px" width="40px">
    </div>

    <form accept-charset="UTF-8" enctype="multipart/form-data" >
        <input name="_token" ng-hide="true"  value="{!! csrf_token() !!}">
        <input ng-controller="AuthController" ng-hide="true" ng-model="userId" ng-value="<% user.id %>"  >
        <input ng-hide="true" ng-model="postId" ng-value="<% post.id %>"  >
        <div class="nkt-comment-form col-lg-8 ">
            <input class="form-control" placeholder="comment"  ng-model="contentField" type="text" required>
        </div>
        <div class="col-lg-2 pull-right">
            <button class="btn btn-success" type="submit" ng-click="addComment()">comment</button>
        </div>
    </form>
</div><!-- Form Section for comment -->