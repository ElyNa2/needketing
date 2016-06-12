<div ng-controller="TagController" class="nkt-popular-tag-list text-left ">
    <div class="list-group">
        <a href="#" class="list-group-item active">
            <h4 class="list-group-item-heading">Popular Tags</h4>
        </a>
        <a href="/tag/<% tag.id %>/show" class="list-group-item" ng-repeat="tag in tags">#<% tag.tag_name %></a>
    </div>
</div>