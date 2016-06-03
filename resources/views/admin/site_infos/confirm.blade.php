@extends('admin.master.layouts')

@section('title','Confirmation to Delete')

@section('content')
    {!! Form::open(['method'=>'delete','route'=>['admin.tags.destroy',$tag->id]]) !!}
    <div class="alert alert-danger">
        <div class="alert alert-danger">
            <strong>Warning</strong> You are about to delete a Tag. This action can not be undone. Are U sure you want to continue ?
        </div>
        {!! Form::submit('Yes, Delete This Tag',['class'=>'btn btn-danger']) !!}
        <a href="{{ route('admin.tags.index') }}" class="btn btn-success"> <strong>No Get Me Out Of Here</strong></a>
    </div>
    {!! Form::close() !!}
@endsection

