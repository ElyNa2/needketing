@extends('users.master.layouts')

@section('title','needketing')

@section('content')
    <div class="nkt-client-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <div class="nkt-user-box">
                        <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" width="100%" height="100px" />
                        <h4 class="text-center">Alina Maharjan</h4>
                        <p class="text-center">@alinamaharjan</p>
                    </div>
                    <div class="nkt-popular-tag-list text-left">
                        <h2>Popular Tags</h2>
                        <ul>
                            <li><a href="">#SecondHandLaptop</a></li>
                            <li><a href="">#BloodRequiredForHospital</a></li>
                            <li><a href="">#Education</a></li>
                            <li><a href="">#SchoolBag</a></li>
                            <li><a href="">#MusicPlayer</a></li>
                            <li><a href="">#DrinkingWaterTank</a></li>
                            <li><a href="">#TeaShop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nkt-creating-post-form">
                        <div class="col-lg-2">
                            <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" width="100%" height="50px" />
                        </div>
                        <div class="col-lg-10">
                            <form action="">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="What you want?"></textarea>
                                </div>
                                <div class="col-lg-4">
                                    <span class="glyphicon glyphicon-camera"></span>
                                    <span class="glyphicon glyphicon-map-marker"></span>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="Add Tags" />
                                </div>
                                <div class="col-lg-4">
                                    <button class="btn btn-primary pull-right">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p class="text-center">@2016 Needketing</p>
                    <p class="text-center">
                        <a href="">About</a>
                        <a href="">Terms</a>
                        <a href="">Help</a>
                        <a href="">Privacy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection