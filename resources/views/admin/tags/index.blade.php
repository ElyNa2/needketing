@extends('admin.master.layouts')

@section('title','Role')

@section('content')
    <h2>Roles</h2>
    <hr/>
    <a href="{{ route('admin.tags.create') }}"><button class="btn btn-primary">Create New Tag</button></a>
    <table class="table table-hover">
        <thead>
        <tr>
            <td>Tag Name</td>
            <td>published At</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr>
                <td><a href="{{ route('admin.tags.edit',$tag->id) }}">{{ $tag->tag_name }}</a></td>
                <td><a href="{{ route('admin.tags.edit',$tag->id) }}">{{ $tag->published_at }}</a></td>
                <td>
                    <a href="{{ route('admin.tags.edit',$tag->id) }}">
                        @include('admin.master.edit-icon')
                    </a>
                </td>
                <td>
                    <a href="{{ route('admin.tags.confirm',$tag->id) }}">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection