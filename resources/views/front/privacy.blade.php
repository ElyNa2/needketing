@extends('front.master.layouts')

@section('title','privacy')

@section('content')
    <div ng-controller="SiteInfoController">
        <h2>Terms and Conditions</h2>
        <div ng-repeat="info in site_infos">
            <% info.privacy %>
        </div>
    </div>
@endsection