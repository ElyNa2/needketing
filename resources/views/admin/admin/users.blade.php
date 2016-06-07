@extends('admin.master.layouts')

@section('title','Users')

@section('content')
    <h2> User</h2>
    <hr/>

    <table class="table table-hover">
        <thead>
        <tr>
            <td>Image</td>
            <td>User Name</td>
            <td>UserName</td>
            <td>Email</td>
            <td>Role</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td><img src="{{ $user->image }}" alt="" height="40px" width="40px"></td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ \App\NeedKeting\Models\Role::find($user->role_id)->name }}</td>
                <td>
                    <a href="">
                        @include('admin.master.show-icon')
                    </a>
                    <a href="{{ route('admin.users.confirm',$user->id) }}">
                        @include('admin.master.delete-icon')
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection