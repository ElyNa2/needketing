<?php

use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
    
    Route::get('/redirect/{provider}', 'Auth\SocialAuthController@redirect');
    Route::get('/callback/{provider}', 'Auth\SocialAuthController@callback');
    /*
     * API Data for Angular Js and Mobile Application
     */
    Route::get('all/posts',['as'=>'all.posts','uses'=>'User\Post\PostsController@getAll']);
    Route::get('all/posts/user',['as'=>'all.posts.user','uses'=>'User\Post\PostsController@getAllPostOfUser']);
    Route::get('all/tags',['as'=>'all.tags','uses'=>'User\Tag\TagsController@getAll']);
    Route::get('all/comments',['as'=>'all.comments','uses'=>'User\Comment\CommentsController@getAll']);
    Route::get('auth/user',['as'=>'auth.user','uses'=>'Auth\User\UsersController@getAuth']);

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
    
    Route::resource('users/posts','User\Post\PostsController');
    Route::resource('users/comments','User\Comment\CommentsController');

    Route::put('user/profile/password/{user}',['as'=>'user.profile.updatePassword' ,'uses'=>'Auth\User\UsersController@updatePassword']);
    Route::get('user/profile/account',['as'=>'user.profile.account','uses'=>'Auth\User\UsersController@accountSetting']);
    Route::resource('user/profile','Auth\User\UsersController');

    Route::get('admin/signin',['as'=>'admin.signin','uses'=>'Admin\User\UsersController@index']);

    /*Route::group(['middleware' => ['admin']], function () {*/

        Route::get('admin/roles/{roles}/confirm',['as'=>'admin.roles.confirm','uses'=>'Admin\Role\RolesController@confirm']);
        Route::resource('admin/roles','Admin\Role\RolesController');
    /*});*/

});
