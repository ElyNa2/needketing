<?php



Route::group(['middleware' => ['web']], function () {
    Route::auth();
    Route::get('/',['as'=>'index','uses'=>'Auth\AuthController@welcome']);

    Route::get('admin/roles/{roles}/confirm',['as'=>'admin.roles.confirm','uses'=>'Admin\Role\RolesController@confirm']);
    Route::resource('admin/roles','Admin\Role\RolesController');

    Route::get('/users/dashboard', ['as'=>'users.dashboard.index','uses'=>'Users\Dashboard\DashboardController@index']);
});

/*Route::get('dashboard', ['middleware' => ['auth', 'auth.admin'], function()
{
    return 'This Dashboard only for Admin';
}]);*/