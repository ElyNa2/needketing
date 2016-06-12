{!! Form::open(['method'=>'posts','url'=>'users/posts','files'=>'true']) !!}

    <div class="form-group">
        <textarea class="form-control" placeholder="What You Need ?" name="content" cols="50" rows="4" ></textarea>
    </div>

    <div class="col-lg-5">
        {{--<span class="glyphicon glyphicon-camera" id="image-upload"></span>
--}}        <input  type="file" name="image">

        {{--<a href="#" ng-model="collapsed" ng-click="collapsed=!collapsed">
            <span class="glyphicon glyphicon-map-marker"></span>
        </a>--}}

        {{--<div ng-show="collapsed">--}}
            {!! Form::select('location',array_merge(['' => 'Select Location'], $locations),null,['class'=>'form-control']) !!}
       {{-- </div>--}}

    </div>

    <div class="col-lg-4">
        {!! Form::select('tags[]',$tags,null,['id'=>'tag_list','class'=>'form-control','multiple']) !!}
    </div>

    <div class="col-lg-3">
        <button class="btn btn-primary pull-right">Save</button>
    </div>

{!! Form::close() !!}