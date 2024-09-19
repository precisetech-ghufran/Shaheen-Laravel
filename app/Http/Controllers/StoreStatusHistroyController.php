<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StoreStatus;
use App\Models\Store;
use App\Models\StoreStatusHistroy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class StoreStatusHistroyController extends Controller
{
    

public function index(){
    return view('admin.status.index');
}

 // public function index()
 //    {
 //        $histories = StoreStatusHistory::with(['user', 'store', 'storeStatus'])->get();
 //        return view('store_status_histories.index', compact('histories'));
 //    }


public function show(){

}

  public function edit($id)
    {
        $users = Auth::user();
        $store = Store::find($id);
        $storeStatuses = StoreStatus::all();
        return view('admin.status.edit', compact('users', 'store', 'storeStatuses'));
    }




   public function update(Request $request, $id)
    {


              $request->validate([
            'comments' => 'required|string',
            'updated_date' => 'required|date',
            'store_status_id' => 'required|exists:store_statuses,id',
        ]);
 
       

       $histroy =   StoreStatusHistroy::create([

'comments' => $request->comments ,
'updated_date' => $request->updated_date ,
'user_id' => Auth::user()->id ,
'store_id' => $id ,
'store_status_id' => $request->store_status_id ,

        ]);

       
   DB::table('stores')
        ->where('store_status_id', $id)  // Target the specific record by its primary key
        ->update(['store_status_id' => $request->store_status_id]);

   

        return redirect()->route('stores.index')->with('success', 'History updated successfully.');
    }
 

}// end of main function
  