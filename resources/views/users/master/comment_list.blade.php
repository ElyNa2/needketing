<div class="row">
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
</div><!-- List of Comments -->