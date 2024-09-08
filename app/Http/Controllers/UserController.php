<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
     

    public function Allusers(){

        $user_all = User::all();
        $auth_user = Auth::user();

      
        return view('admin.users.all_users',compact('user_all','auth_user'));
    }


public function indiviual_user_permission($id, Request $request){




   try {
       
     $user = User::find($id);

    $userPermissions = $user->permissions->pluck('name');
        $permission = $request->permissions;

    $auth_user = Auth::user();
    $permissions= Permission::all();
    $permissions_exists = Permission::exists();
$user->syncPermissions($permission);


  $userPermissions = $user->permissions->pluck('name');

   session()->flash('success', ' Indiviual User Permission Updated Successfully');

    } catch (\Exception $e) {
        // If there is an error, set an error flash message
        session()->flash('error', 'There was a problem inserting the data.');
    }

  



    return view('admin.users.user_permissions',compact('user','auth_user','permissions','permissions_exists','userPermissions'));


       


}



public function auth_admin_add_new_user_create(Request $request){

        $request->validate([


      'email' => [
                'required',
                'email',
               'unique:users,email'
            ],


              'user_name' => [
                'required',
              
                'min:6',
                   'unique:users,user_name'
            ],

              'phone_number' => [
                'required',
              
                'numeric',
                  'unique:users,phone_number'
            ],


        'name'=>'required',
        'password' => 'required|min:8|confirmed',
        'user_role'=>'required',

        ]);
  $auth_user = Auth::user();


$user = User::create([

'email' =>$request->email,
'user_name' =>$request->user_name,
'phone_number' =>$request->phone_number,
'name' =>$request->name,
'password' =>Hash::make($request->name),

]); 

 

$role =$request->user_role;
$user->assignRole($role);
    return redirect()->route('all.users')->with('success', 'User created Successfully');

}

    public function update_user_account($id){
        $auth_user = Auth::user();
        $user = User::find($id);
        $roles = Role::all();

        return view('admin.users.update_user',compact('auth_user','user','roles'))->with('success', 'User Account Updated Successfully'); ;
     
    }



public function auth_admin_add_new_user(){
 $auth_user = Auth::user();
  $roles = Role::all();
    return view('admin.users.add_users',compact('auth_user','roles'));
}




    public function update_user_account_update($id, Request $request){


        $request->validate([


      'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($id),
            ],


              'user_name' => [
                'required',
              
                'min:6',
                Rule::unique('users')->ignore($id),
            ],

              'phone_number' => [
                'required',
              
                'numeric',
                Rule::unique('users')->ignore($id),
            ],


        'name'=>'required',
        'new_password' => 'min:8|confirmed',
        'user_role'=>'required',

        ]);
  $auth_user = Auth::user();
   $user = User::find($id);
$roles = Role::all();

if($request->password){


$user->update([

'email' =>$request->email,
'user_name' =>$request->user_name,
'phone_number' =>$request->phone_number,
'name' =>$request->name,
'password' =>Hash::make($request->name),

]);

}else{
  
$user->update([

'email' =>$request->email,
'user_name' =>$request->user_name,
'phone_number' =>$request->phone_number,
'name' =>$request->name,

]);

}

$role =$request->user_role; 


$user->assignRole($role);

      return redirect()->route('update_user_account',$user->id)->with('success', 'User Updated Successfully');

    }

 
  public function user_permissions($id){


    $user = User::find($id);
    $auth_user = Auth::user();
    $permissions= Permission::all();
    $permissions_exists = Permission::exists();

      $userPermissions = $user->permissions->pluck('name');



    return view('admin.users.user_permissions',compact('user','auth_user','permissions','permissions_exists','userPermissions'));
  }

  public function delete(Request $request){

$delete_user = $request->delete_users;
if($delete_user){

  User::whereIn('id', $delete_user)->delete();
}
return redirect()->route('all.users')->with('success', 'User Deleted Successfully'); ;
  }



  public function user_profile_view($id){

    $auth_user = Auth::user();
    return view('admin.users.my_profile_form',compact('auth_user'));
  }




    public function user_profile_update($id, Request $request){

    $request->validate([
      'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($id),
            ],


              'user_name' => [
                'required',
              
                'min:6',
                Rule::unique('users')->ignore($id),
            ],

              'phone_number' => [
                'required',
              
                'numeric',
                Rule::unique('users')->ignore($id),
            ],
            'name'=>'required',

        ]);
      

        $user = User::find($id);
      
         if ($request->hasFile('profile_image')) {
     $filePath = public_path('uploads');
            $file = $request->file('profile_image');
   $file_name = time() . $file->getClientOriginalName();
     $file->move($filePath, $file_name);
$user = User::find($id);
 if (!is_null($user->photo)) {
                $oldImage = public_path('uploads/' . $update->photo);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }
$user->update([
    
    'email'=>$request->email,
      'profile_image'=>$file_name,
  'mobile_number' => $request->mobile_number,
   'name' => $request->name,
    'user_name' => $request->user_name,
    

 ]);    

     return redirect()->back()->with('success', 'Profile updated successfully!');
 }else{
    $user = User::find($id);

$user->update([
    'email'=>$request->email,
  'mobile_number' => $request->mobile_number,
   'name' => $request->name,
    'user_name' => $request->user_name,
     

 ]);
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
  }//end of this controller

  public function password_update(Request $request, $id)
    {
   $request->validate([
        'current_password' => ['required','current_password'],
   
    'password' => ['required', 'confirmed'],


]);

      $auth_user = Auth::user();
   

    // Update the user's password
    $user->password = Hash::make($request->input('new_password'));
    $user->save();
       return view('admin.users.update_password',compact('auth_user'))->with('success', 'Profile updated successfully!');;
    }


     public function updatePassword(Request $request, $id)
    {
        $auth_user = Auth::user();
        $userid = User::find($id);
       return view('admin.users.update_password',compact('auth_user','userid'));
    }

}// end main user controller
