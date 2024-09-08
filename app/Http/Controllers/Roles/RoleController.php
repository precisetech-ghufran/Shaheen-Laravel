<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Exports\PermissionExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PermissionImport;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class RoleController extends Controller
{
     public function AllPermission(){

        $permissions = Permission::all();
        return view('admin.backend.pages.permission.all_permission',compact('permissions'));

    }// End Method 

    public function AddPermission(){
 
        $auth_user = Auth::user();

$permissions_all = Permission::all();
 $permission_exsist = Permission::exists();
        return view('admin.permissions.add',compact('auth_user','permissions_all','permission_exsist'));

    }// End Method 


    public  function ViewPermissionForm()
    {
          $auth_user = Auth::user();
       return  view('admin.permissions.viewform',compact('auth_user'));
    }

    public function StorePermission(Request $request){

        $request->validate([
'permission'=>'required|unique:permissions,name'
        ]);

        Permission::create([
            'name' => $request->permission,
        
        ]);

        $notification = array(
            'message' => 'Permission Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('add.permission')->with('success', 'Permission created Successfully');;  

    }// End Method 


    public function EditPermission($id){

        $permission = Permission::find($id);
        return view('admin.backend.pages.permission.edit_permission',compact('permission'));

    }// End Method 

    public function UpdatePermission(Request $request){

        $per_id = $request->id;

        Permission::find($per_id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = array(
            'message' => 'Permission Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.permission')->with($notification);  

    }// End Method 

    public function DeletePermission(Request $request){

        // Permission::find($id)->delete();

        // $notification = array(
        //     'message' => 'Permission Deleted Successfully',
        //     'alert-type' => 'success'
        // );
        // return redirect()->back()->with($notification);  

         $permissionIds = $request->input('permissions');

    if ($permissionIds) {
        Permission::whereIn('id', $permissionIds)->delete();
        return redirect()->back()->with('success', 'Selected permissions have been deleted.');
    }

    return redirect()->back()->with('error', 'No permissions were selected.');

    }// End Method 


    public function ImportPermission(){

        return view('admin.backend.pages.permission.import_permission');

    }// End Method 


    public function Export(){

        return Excel::download(new PermissionExport, 'permission.xlsx');

    }// End Method

    public function Import(Request $request){

        Excel::import(new PermissionImport, $request->file('import_file'));

        $notification = array(
            'message' => 'Permission Imported Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);  

    }// End Method

       ////////// ALL ROLE METHODS /////////


    public function AllRoles(){

        $roles = Role::all();
        $role_exsist = Role::exists();
        $auth_user = Auth::user();
        return view('admin.roles.all_roles',compact('roles','role_exsist','auth_user'));

    }// End Method

    public function AddRoles(){
   $auth_user = Auth::user();
        return view('admin.roles.viewform',compact('auth_user'));

    }// End Method

    public function StoreRoles(Request $request){


$request->validate([
'role'=>'required|unique:roles,name'

]);
        Role::create([
            'name' => $request->role, 
        ]);

        $roles = Role::all();
        $role_exsist = Role::exists();
        $auth_user = Auth::user();
        return redirect()->route('all.roles')->with('success', 'Role Created Successfully');
  

    }// End Method 


    public function EditRoles($id){
  $auth_user = Auth::user();
        $roles = Role::find($id);
        return view('admin.roles.edit',compact('roles','auth_user'));


    }// End Method 

    public function UpdateRoles(Request $request){

        $role_id = $request->id;

        Role::find($role_id)->update([
            'name' => $request->role, 
        ]);

        $notification = array(
            'message' => 'Role Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.roles')->with('success', 'Role Updated Successfully'); 

    }// End Method 

    public function DeleteRoles(Request $request){

       $roleIds = $request->input('roles');

    if ($roleIds) {
        Role::whereIn('id', $roleIds)->delete();
        return redirect()->back()->with('success', 'Selected Roles Deleted Successfully.');
    }

    return redirect()->back()->with('error', 'No roles were selected.');

    }// End Method 


    //////////// Add Role Permission All Mehtod ////////////////

    public function AddRolesPermission(){


        $roles = Role::all();
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();

        return view('admin.backend.pages.rolesetup.add_roles_permission',compact('roles','permission_groups','permissions'));

    }// End Method 


    public function RolePermissionStore(Request $request,$id){

 $role = Role::findOrFail($id);
     $permissionIds = $request->input('permissions');

    if ($permissionIds) {
        $permissions = Permission::whereIn('id', $permissionIds)->get();
        $role->syncPermissions($permissions);

        return redirect()->back()->with('success', 'Selected permissions have been assigned to the role.');
    }

    return redirect()->back()->with('error', 'No permissions were selected.');


    }// End Method  


    public function AllRolesPermission($id){

        $auth_user = Auth::user();
         $roles = Role::find($id);
        $role_exsist = Role::exists();
       $permissions_all = Permission::all();
        return view('admin.roles.role_permission',compact('roles','role_exsist','permissions_all','auth_user'))->with('success','User Role Permission Deleted Successfully');

    }// End Method 

    public function AdminEditRoles($id){

        $role = Role::find($id);
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();

        return view('admin.backend.pages.rolesetup.edit_roles_permission',compact('role','permission_groups','permissions'));


    }// End Method 

    public function AdminUpdateRoles(Request $request, $id){

        $role = Role::find($id);
        $permissions = $request->permission;
        
        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        $notification = array(
            'message' => 'Role Permission Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.roles.permission')->with($notification); 

    }// End Method 


    public function AdminDeleteRoles($id){

        $role = Role::find($id);
        if (!is_null($role)) {
            $role->delete();
        }

      
        return redirect()->back()->with($notification);

    }// End Method 


}
