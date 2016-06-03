@extends('admin.master.layouts')

@section('title','Site Info')

@section('content')
    <h2>Site Information</h2>
    <hr/>
    {{--<a href="{{ route('admin.site_info.create') }}"><button class="btn btn-primary">Create New Info</button></a>--}}
    <table class="table table-hover">
        <thead>
        <tr>
            <td>About</td>
            <td>Privacy</td>
            <td>Terms</td>
            <td>Published At</td>
            <td>User Id</td>
            <td>Edit</td>
        </tr>
        </thead>
        <tbody>
        @foreach($site_info as $info)
            <tr>
                <td>{{ $info->about }}</td>
                <td>{{ $info->privacy }}</td>
                <td>{{ $info->terms }}</td>
                <td>{{ $info->published_at }}</td>
                <td>{{ $info->user_id }}</td>
                <td>
                    <a href="{{ route('admin.site_info.edit',$info->id) }}">
                        @include('admin.master.edit-icon')
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection