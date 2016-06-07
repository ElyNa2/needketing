@extends('admin.master.layouts')

@section('title','Posts')

@section('content')
    <h2>Posts</h2>
    <hr/>

    <table class="table table-hover">
        <thead>
        <tr>
            <td>Post</td>
            <td>Image</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)

            <tr>
                <td>{{ $post->content }}</td>
                <td><img src="{{ $post->image }}" alt="" height="40px" width="40px"></td>
                <td>
                    <a href="{{ route('admin.posts.confirm',$post->id) }}" class="pull-right">
                        @include('admin.master.delete-icon')
                    </a>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>

@endsection