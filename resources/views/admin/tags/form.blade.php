
@extends('admin.master.layouts')

@section('title',$tag->exists ? 'Editing'.$tag->tag_name :'Create Role' );

@section('content')
    {!! Form::model($tag,[
        'method' => $tag->exists ? 'put' : 'posts',
        'route'  => $tag->exists ? ['admin.tags.update',$tag->id] : ['admin.tags.store']
    ]) !!}

    <div class="form-group">
        {!! Form::label('tag_name') !!}
        {!! Form::text('tag_name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('published_at') !!}
        {!! Form::text('published_at',\Carbon\Carbon::now(),['class'=>'form-control']) !!}
    </div>

    {!! Form::submit($tag->exists? 'Update':'Create',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection