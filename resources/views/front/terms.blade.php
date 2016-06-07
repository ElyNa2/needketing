@extends('front.master.layouts')

@section('title','Terms')

@section('content')
    <div ng-controller="SiteInfoController">
        <h2>Terms and Conditions</h2>
        <div ng-repeat="info in site_infos">
            <% info.terms %>
        </div>
    </div>
@endsection