@extends('front.master.layouts')

@section('title','About')

@section('content')
    <div ng-controller="SiteInfoController">
        <h2>About NeedKeting</h2>
        <div ng-repeat="info in site_infos">
            <% info.about %>
        </div>
    </div>
@endsection