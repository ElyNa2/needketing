@extends('layouts.master')

@section('title','Role')

@section('content')
    <h2>Roles</h2>
    <hr/>
    <a href="{{ route('users.roles.create') }}"><button class="btn btn-primary">Create New Role</button></a>
    <table class="table table-hover">
        <thead>
        <tr>
            <td>Role</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td><a href="{{ route('users.roles.edit',$role->id) }}">{{ $role->name }}</a></td>
                <td>
                    <a href="{{ route('users.roles.edit',$role->id) }}">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                </td>
                <td>
                    <a href="{{ route('users.roles.confirm',$role->id) }}">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection