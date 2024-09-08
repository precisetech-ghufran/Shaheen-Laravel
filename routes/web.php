<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\LandlordController;
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\RealtorBrokertController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\VendorGroupController;
use App\Http\Controllers\ExpenceReportController;
 use App\Http\Controllers\TenantController;
 use App\Http\Controllers\MasterController;
 use App\Http\Controllers\PartnerController;
 use App\Http\Controllers\SearchController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ExpenseHeadController;

 
Route::get('/', function () {
    return view('login');
});
 





Route::middleware(['auth'])->group(function () {






Route::controller(Dashboard::class)->group(function(){

    Route::get('/home','index')->name('Dashboard'); 

});







Route::get('/search', [SearchController::class, 'search'])->name('search');



// Permission All Route 
Route::controller(MasterController::class)->group(function(){
    Route::get('auth_admin/master_file','index')->name('master_file.index'); 
  

});



Route::get('/cities-by-state', [CityController::class, 'getCitiesByState'])->name('cities.byState');

Route::resource('states', StateController::class);
Route::resource('cities', CityController::class);
Route::resource('franchises', FranchiseController::class);
Route::resource('landlords', LandlordController::class);
Route::resource('realtors', RealtorBrokertController::class);
Route::resource('tenants', TenantController::class);
Route::resource('banks', BankAccountController::class);
Route::resource('partners', PartnerController::class);
Route::resource('expense_heads', ExpenseHeadController::class);
Route::resource('Vendors', VendorController::class);
Route::resource('vendor-groups', VendorGroupController::class);

Route::controller(RoleController::class)->group(function(){
    Route::get('/all/permission','AllPermission')->name('all.permission'); 
    Route::get('/add/permission','AddPermission')->name('add.permission');
    Route::post('/store/permission','StorePermission')->name('store.permission'); 
    Route::get('/edit/permission/{id}','EditPermission')->name('edit.permission');
    Route::post('/update/permission','UpdatePermission')->name('update.permission');
    Route::post('/delete/permission','DeletePermission')->name('delete.permission');
       Route::get('/view/permission/form','ViewPermissionForm')->name('ViewPermissionForm'); 


});

Route::controller(RoleController::class)->group(function(){
    Route::get('/all/roles','AllRoles')->name('all.roles');
    Route::get('/add/roles','AddRoles')->name('add.roles'); 
    Route::post('/store/roles','StoreRoles')->name('store.roles');
    Route::get('/edit/roles/{id}','EditRoles')->name('edit.roles');
    Route::post('/update/roles','UpdateRoles')->name('update.roles');
    Route::post('/delete/roles/','DeleteRoles')->name('delete.roles');      
    Route::get('/add/roles/permission','AddRolesPermission')->name('add.roles.permission');
    Route::post('/role/permission/store/{id}','RolePermissionStore')->name('role.permission.store');
    Route::get('/role/permission/{id}','AllRolesPermission')->name('all.roles.permission');
    Route::get('/admin/edit/roles/{id}','AdminEditRoles')->name('admin.edit.roles');
    Route::post('/admin/roles/update/{id}','AdminUpdateRoles')->name('admin.roles.update');
    Route::get('/admin/delete/roles/{id}','AdminDeleteRoles')->name('admin.delete.roles');
     
});



Route::controller(UserController::class)->group(function(){
     Route::get('/all/users/accounts','Allusers')->name('all.users');
      Route::get('auth_admin/update_user_account/{id}','update_user_account')->name('update_user_account');
 Route::post('auth_admin/update_user_account/{id}','update_user_account_update')->name('update_user_account_update');
 Route::get('auth_admin/add_new_user','auth_admin_add_new_user')->name('auth_admin_add_new_user');
 Route::post('auth_admin/add_new_user','auth_admin_add_new_user_create')->name('auth_admin_add_new_user_create');
 Route::get('auth_admin/update_user_permissions/{id}','user_permissions')->name('user_permissions');
Route::post('auth_admin/indiviual/user-permission/{id}','indiviual_user_permission')->name('indiviual_user_permission');
    Route::post('/delete/user','Delete')->name('delete.users');  
   Route::get('user/profile/{id}','user_profile_view')->name('user_profile_view');
      Route::post('user/profile/{id}','user_profile_update')->name('user_profile_update');  
      Route::get('update/password/{id}','updatePassword')->name('updatePassword');
Route::post('user/update/password/{id}','password_update')->name('password_update');
   

});










});// end of auth middleware group








