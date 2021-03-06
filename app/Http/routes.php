<?php


Route::group(['middleware' => ['web']], function () {


    //Route::auth();



    //Route::get('/home', 'HomeController@index');
    
    Route::get('/redirect/{provider}', 'Auth\SocialAuthController@redirect');
    Route::get('/callback/{provider}', 'Auth\SocialAuthController@callback');
    /*
     * API Data for Angular Js and Mobile Application
     */
    Route::get('all/posts',['as'=>'all.posts','uses'=>'User\Post\PostsController@getAll']);
    Route::get('all/posts/user',['as'=>'all.posts.user','uses'=>'User\Post\PostsController@getAllPostOfUser']);
    Route::get('all/{tag}/tag',['as'=>'all.posts.tag','uses'=>'User\Post\PostsController@getAllPostOfTag']);
    Route::get('all/tags',['as'=>'all.tags','uses'=>'User\Tag\TagsController@getAll']);
    Route::get('all/comments',['as'=>'all.comments','uses'=>'User\Comment\CommentsController@getAll']);
    Route::get('auth/user',['as'=>'auth.user','uses'=>'Auth\User\UsersController@getAuth']);
    Route::get('all/site_info',['as'=>'all.site_info','uses'=>'Front\SiteInfoController@getAll']);


    Route::get('about',['as'=>'needketing.about','uses'=>'Front\SiteInfoController@about']);
    Route::get('terms',['as'=>'needketing.terms','uses'=>'Front\SiteInfoController@terms']);
    Route::get('privacy',['as'=>'needketing.privacy','uses'=>'Front\SiteInfoController@privacy']);

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

    Route::get('users/posts/{posts}/confirm',['as'=>'users.posts.confirm','uses'=>'User\Post\PostsController@confirm']);
    Route::resource('users/posts','User\Post\PostsController');
    Route::resource('users/comments','User\Comment\CommentsController');

    Route::put('user/profile/password/{user}',['as'=>'user.profile.updatePassword' ,'uses'=>'Auth\User\UsersController@updatePassword']);
    Route::put('user/subscribe/tags/{user}',['as'=>'user.subscribe.tags' ,'uses'=>'Auth\User\UsersController@updateTagsSubscribe']);
    Route::get('user/profile/account',['as'=>'user.profile.account','uses'=>'Auth\User\UsersController@accountSetting']);
    Route::resource('user/profile','Auth\User\UsersController');

    Route::get('tags/subscribe',['as'=>'user.tag.subscribe','uses'=>'User\Subscribe\SubscribeTagController@index']);

    Route::get('tag/{tag}/show',['as'=>'tag.show','uses'=>'User\Tag\TagsController@show']);

    Route::post('report/posts',['as'=>'report.posts','uses'=>'User\Post\ReportPostController@create']);
    
    Route::get('admin/login',['as'=>'admin.getLogin','uses'=>'Admin\User\UsersController@getLogin']);
    Route::post('admin/login',['as'=>'admin.postLogin','uses'=>'Admin\User\UsersController@postLogin']);
    Route::get('admin/logout',['as'=>'admin.getLogout','uses'=>'Admin\User\UsersController@getLogout']);
    

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
        
        Route::get('admin/site_info/{site_info}/confirm',['as'=>'admin.site_info.confirm','uses'=>'Admin\SiteInfo\SiteInfoController@confirm']);
        Route::resource('admin/site_info','Admin\SiteInfo\SiteInfoController');

        Route::get('admin/users/{users}/confirm',['as'=>'admin.users.confirm','uses'=>'Admin\User\UsersController@confirm']);
        Route::delete('admin/users/{users}',['as'=>'admin.users.destroy','uses'=>'Admin\User\UsersController@destroy']);
        Route::get('admin/users',['as'=>'admin.users','uses'=>'Admin\User\UsersController@users']);

        Route::get('admin/admin/{admin}/confirm',['as'=>'admin.admin.confirm','uses'=>'Admin\User\AdminController@confirm']);
        Route::resource('admin/admin','Admin\User\AdminController');


        Route::get('admin/report_post/{report_posts}/confirm',['as'=>'admin.report_post.confirm','uses'=>'Admin\Post\ReportPostController@confirm']);
        Route::delete('admin/report_post/{report_posts}',['as'=>'admin.report_post.destroy','uses'=>'Admin\Post\ReportPostController@destroy']);
        Route::get('admin/report_post',['as'=>'admin.report_post.index','uses'=>'Admin\Post\ReportPostController@index']);
    });
});


