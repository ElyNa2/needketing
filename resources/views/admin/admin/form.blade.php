@extends('admin.master.layouts')

@section('title',$user->exists ? 'Editing'.$user->name :'Create User' );

@section('content')
    {!! Form::model($user,[
        'method' => $user->exists ? 'put' : 'post',
        'route'  => $user->exists ? ['admin.admin.update',$user->id] : ['admin.admin.store'],
        'files'=>'true'
    ]) !!}

    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('image') !!}
        {!! Form::file('image',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone') !!}
        {!! Form::text('phone',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('username') !!}
        {!! Form::text('username',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('website') !!}
        {!! Form::text('website',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description') !!}
        {!! Form::textarea('description',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password') !!}
        <input type="password" name="password" id="password" class="form-control" />
    </div>

    <div class="form-group">
        {!! Form::label('password_confirmation') !!}
        <input type="password" name="password_confirmation" id="password_confirmation"  class="form-control"/>
    </div>

    {!! Form::submit($user->exists? 'Update':'Create',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection