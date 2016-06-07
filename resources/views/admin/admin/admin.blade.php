@extends('admin.master.layouts')

@section('title','Users')

@section('content')
    <h2>Admin </h2>
    <hr/>
    <a href="{{ route('admin.admin.create') }}"><button class="btn btn-primary">Create New Admin</button></a>
    <table class="table table-hover">
        <thead>
        <tr>
            <td>Full Name</td>
            <td>User Name</td>
            <td>Role</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ \App\NeedKeting\Models\Role::find($user->role_id)->name }}</td>
                <td>
                    <a href="{{ route('admin.admin.edit',$user->id) }}">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                </td>
                <td>
                    <a href="{{ route('admin.admin.confirm',$user->id) }}">
                        @include('admin.master.delete-icon')
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection