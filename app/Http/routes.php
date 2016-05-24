<?php

Route::group(['middleware' => ['web']], function () {

    /*
     * API Data for Angular Js and Mobile Application
     */
    Route::get('all/posts',['as'=>'all.posts','uses'=>'User\Post\PostsController@getAll']);
    Route::get('all/posts/user',['as'=>'all.posts.user','uses'=>'User\Post\PostsController@getAllPostOfUser']);
    Route::get('all/tags',['as'=>'all.tags','uses'=>'User\Tag\TagsController@getAll']);
    Route::get('all/comments',['as'=>'all.comments','uses'=>'User\Comment\CommentsController@getAll']);



    //Route::auth();
    Route::post('login', 'Auth\AuthController@login');
    Route::get('logout', 'Auth\AuthController@logout');
    Route::post('register', 'Auth\AuthController@register');
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');

    Route::get('/',array(
        'as' => 'home',
        'uses' => 'User\Dashboard\DashboardController@index'
    ));

    Route::get('admin/roles/{roles}/confirm',['as'=>'admin.roles.confirm','uses'=>'Admin\Role\RolesController@confirm']);
    Route::resource('admin/roles','Admin\Role\RolesController');


    Route::resource('users/posts','User\Post\PostsController');
    
    Route::get('user/timeline',['as'=>'user.timeline','uses'=>'Auth\User\UsersController@index']);
    
    Route::resource('users/comments','User\Comment\CommentsController');
});
