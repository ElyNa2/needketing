@extends('admin.master.layouts')

@section('title','Role')

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
                <td>{{ $post->image }}</td>
                <td>
                    <a href="{{ route('admin.posts.confirm',$post->id) }}">
                        <i class="ion ion-ios-close-empty"></i>
                    </a>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>

@endsection