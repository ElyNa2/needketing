@extends('admin.master.layouts')

@section('title','Report Post')

@section('content')
    <h2>Report Posts</h2>
    <hr/>

    <table class="table table-hover">
        <thead>
        <tr>
            <td>Message</td>
            <td>User Id</td>
            <td>Reported By</td>
            <td>Reported Post Id</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
        @foreach($requestPost as $report)
            <tr>
                <td>{{ $report->report_message }}</td>
                <td>{{ $report->user_id }}</td>
                <td>{{ \App\User::find($report->user_id)->name }}</td>
                <td>{{ $report->post_id }}</td>
                <td>
                    <a href="{{ route('admin.report_post.confirm',$report->id) }}" class="pull-right">
                        @include('admin.master.delete-icon')
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection