@extends('admin.master.layouts')

@section('title',$role->exists ? 'Editing'.$role->name :'Create Role' );

@section('content')
    {!! Form::model($role,[
        'method' => $role->exists ? 'put' : 'posts',
        'route'  => $role->exists ? ['admin.roles.update',$role->id] : ['admin.roles.store']
    ]) !!}

        <div class="form-group">
            {!! Form::label('name') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>

        {!! Form::submit($role->exists? 'Update':'Create',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection