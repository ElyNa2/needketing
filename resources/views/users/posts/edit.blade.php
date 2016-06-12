<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Edit Post</h4>
</div>
{!! Form::model($post,['method'=>'put','url'=>['users/posts',$post->id],'files'=>'true']) !!}
<div class="modal-body">

    <div class="form-group">
        {!! Form::textarea('content',null,['class'=>'form-control','placeholder'=>'Do you need Something ?']) !!}
    </div>

    <div class="col-lg-3">
        <span class="glyphicon glyphicon-camera" id="image-upload"></span>
        <input  type="file" name="image">
        <a href="#" ng-model="collapsed" ng-click="collapsed=!collapsed">
            <span class="glyphicon glyphicon-map-marker"></span>
        </a>
        <div ng-show="collapsed">
            {!! Form::select('location',$locations,null,['class'=>'form-control'])
        !!}
        </div>
    </div>

    <div class="col-lg-6">
        {!! Form::select('tag_list[]',$tags,$post->tag_list,['id'=>'tag_list_modal','class'=>'form-control select2','multiple']) !!}
    </div>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Update Post</button>
</div>
<script>
    $('#tag_list_modal').select2({
        placeholder: 'Choose some tags',
        tags: 'true'
    });
</script>
{!! Form::close() !!}

