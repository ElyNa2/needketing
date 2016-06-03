<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li>
            <a href="{{ URL::to('admin') }}" >Dashboard  <i class="right-space ion ion-ios-arrow-right pull-right hidden-xs"></i></a>
        </li>
        <li>
            <a href="{{ URL::to('admin/roles') }}">Roles <i class=" right-space ion ion-ios-arrow-right pull-right hidden-xs"></i></a>
        </li>
        <li>
            <a href="{{ URL::to('admin/posts') }}">Posts<i class=" right-space ion ion-ios-arrow-right pull-right hidden-xs"></i></a>
        </li>
        <li>
            <a href="{{ URL::to('admin/tags') }}">Tags <i class="right-space ion ion-ios-arrow-right pull-right hidden-xs"></i></a>
        </li>
        <li>
            <a href="{{ URL::to('admin/comments') }}"> Comments <i class="right-space ion ion-ios-arrow-right pull-right hidden-xs"></i></a>
        </li>
        <li>
            <a href="{{ URL::to('admin/site_info') }}"> Site Info <i class="right-space ion ion-ios-arrow-right pull-right hidden-xs"></i></a>
        </li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->
