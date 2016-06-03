@extends('admin.master.layouts')

@section('title',$info->exists ? 'Editing' :'Create Role' );

@section('content')
    {!! Form::model($info,[
        'method' => $info->exists ? 'put' : 'posts',
        'route'  => $info->exists ? ['admin.site_info.update',$info->id] : ['admin.site_info.store']
    ]) !!}

    <div class="form-group">
        {!! Form::label('about') !!}
        {!! Form::textarea('about',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('terms') !!}
        {!! Form::textarea('terms',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('privacy') !!}
        {!! Form::textarea('privacy',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('published_at') !!}
        {!! Form::text('published_at',\Carbon\Carbon::now(),['class'=>'form-control']) !!}
    </div>

    {!! Form::submit($info->exists? 'Update':'Create',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection
