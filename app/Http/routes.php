<?php

use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {


    Route::auth();

    Route::get('/home', 'HomeController@index');
    
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

    Route::get('admin/login',function(){
        return view('admin.login');
    });

    Route::post('admin/login',['as'=>'admin.login','uses'=>'Admin\User\UsersController@login']);

    Route::group(['middleware' => ['admin']], function () {

        Route::get('admin',['as'=>'admin','uses'=>'Admin\Dashboard\AdminController@index']);    
    
        Route::get('admin/roles/{roles}/confirm',['as'=>'admin.roles.confirm','uses'=>'Admin\Role\RolesController@confirm']);
        Route::resource('admin/roles','Admin\Role\RolesController');

        Route::get('admin/posts/{posts}/confirm',['as'=>'admin.posts.confirm','uses'=>'Admin\Post\PostsController@confirm']);
        Route::delete('admin/posts/{posts}',['as'=>'admin.posts.destroy','uses'=>'Admin\Post\PostsController@destroy']);
        Route::get('admin/posts',['as'=>'admin.posts.index','uses'=>'Admin\Post\PostsController@index']);

        Route::get('admin/tags/{tags}/confirm',['as'=>'admin.tags.confirm','uses'=>'Admin\Tag\TagsController@confirm']);
        Route::resource('admin/tags','Admin\Tag\TagsController');
    
        Route::get('admin/comments/{comments}/confirm',['as'=>'admin.comments.confirm','uses'=>'Admin\Comment\CommentsController@confirm']);
        Route::delete('admin/comments/{comments}',['as'=>'admin.comments.destroy','uses'=>'Admin\Comment\CommentsController@destroy']);
        Route::get('admin/comments',['as'=>'admin.comments.index','uses'=>'Admin\Comment\CommentsController@index']);
        
        Route::get('admin/site_info/{site_info}/confirm',['as'=>'admin.site_info.confirm','uses'=>'Admin\SiteInfo\SiteController@confirm']);
        Route::resource('admin/site_info','Admin\SiteInfo\SiteInfoController');
    });
});

