@extends('admin.master.layouts')

@section('title','Comment')

@section('content')
    <h2>Comments</h2>
    <hr/>

    <table class="table table-hover">
        <thead>
        <tr>
            <td>Comment</td>
            <td>Image</td>
            <td>User</td>
            <td>Post Id</td>
            <td>Published At</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
        @foreach($comments as $comment)

            <tr>
                <td>{{ $comment->content }}</td>
                <td>
                    @if($comment->image)
                        <img src="{{ $comment->image }}" alt="" height="30px" width="30px">
                    @else
                        {{ " No Image" }}
                    @endif
                </td>
                <td>{{ $comment->user_id }}</td>
                <td>{{ $comment->post_id }}</td>
                <td>{{ $comment->published_at }}</td>
                <td>
                    <a href="{{ route('admin.comments.confirm',$comment->id) }}" class="text-center">
                        @include('admin.master.delete-icon')
                    </a>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>

@endsection