<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Delete Post</h4>
</div>

<div class="modal-body">
    {!! Form::open(['method'=>'delete','route'=>['users.posts.destroy',$post->id]]) !!}
    <div class="alert alert-danger">
        <div class="alert alert-danger">
            <strong>Warning</strong> You are about to delete a Post. This action can not be undone. Are U sure you want to continue ?
        </div>
        {!! Form::submit('Yes, Delete This Post',['class'=>'btn btn-danger']) !!}
        <a href="{{ route('home') }}" class="btn btn-success"> <strong>No Get Me Out Of Here</strong></a>
    </div>
    {!! Form::close() !!}
</div>
