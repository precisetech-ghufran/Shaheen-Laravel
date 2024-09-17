<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\State;
use App\Models\City;
use App\Models\Country;
use App\Models\Franchise; 
use Illuminate\Http\Request;

class StoreController extends Controller
{


 public function index()
    {
        $stores = Store::all();
        return view('admin.stores.index', compact('stores'));
    }



    // Show form for creating a new store
    public function create()
    {

$franchise = Franchise::all();
           $countries = Country::all();
        $states = State::all();
        return view('admin.stores.create', compact('countries', 'states','franchise'));
   
    }

    // Store the newly created store in the database
    public function store(Request $request)
    { 


        // Validation
        $request->validate([
            'store_business_name' => 'required|string|max:255',
            'date' => 'nullable|date',
            'stored_by' => 'nullable|string|max:255',
            'area_square_foot' => 'nullable|numeric',
            'site_address' => 'nullable|string|max:255',
            'zip_code' => 'nullable|string|max:10', 
            'lease_asking_rent' => 'nullable|numeric',
            'proposed_nnn' => 'nullable|numeric',
            'details' => 'nullable|string',
            'site_rank' => 'nullable|integer',
            'site_condition' => 'nullable|string|max:255',
            'map_location_link' => 'nullable|url',
            'franchise_id' => 'nullable|exists:franchises,id',
            'stateid' => 'nullable|exists:states,id',
            'cityid' => 'nullable|exists:cities,id',
            'buy_and_lease' => 'nullable|in:buy,lease',

        ]);

        // Create and save store
        Store::create([
 

            'store_business_name' =>   $request->store_business_name,
            'date' =>   $request->date,
            'stored_by' =>   $request->stored_by,
            'area_square_foot' =>   $request->area_square_foot,
            'site_address' =>   $request->site_address,
            'zip_code' =>   $request->zip_code,
            'lease_asking_rent' =>   $request->lease_asking_rent,
            'proposed_nnn' =>   $request->proposed_nnn,
            'details' =>   $request->details,
            'site_rank' =>   $request->site_rank,
            'site_condition' =>   $request->site_condition,
            'map_location_link' =>   $request->map_location_link,
            'franchise_id' =>   $request->franchise_id,
            'stateid' =>   $request->stateid,
            'cityid' =>   $request->cityid,
            'buy_and_lease' =>   $request->buy_lease_option,
            'country_id' =>   $request->country_id,
            'store_status_id' => 1,


 

        ]); 

        return redirect()->route('stores.index')->with('success', 'Store created successfully.');
    }

    // Show form for editing an existing store
    public function edit($id)
    {

        $franchise = Franchise::all();
           $countries = Country::all();
        $states = State::all();
        $store = Store::findOrFail($id);
          $cities = City::where('state_id', $store->stateid)->get();
        return view('admin.stores.edit', compact('store','states','countries','franchise','cities'));
    }

    // Update the specified store in the database
    public function update(Request $request, $id)
    {
        // Validation
        $request->validate([
            'store_business_name' => 'required|string|max:255',
            'date' => 'required|date',
            'stored_by' => 'required|string|max:255',
            'area_square_foot' => 'required|numeric',
            'site_address' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'lease_asking_rent' => 'nullable|numeric',
            'proposed_nnn' => 'nullable|numeric',
            'details' => 'nullable|string',
            'site_rank' => 'nullable|integer',
            'site_condition' => 'nullable|string|max:255',
            'map_location_link' => 'nullable|url',
            'franchise_id' => 'required|exists:franchises,id',
            'stateid' => 'required|exists:states,id',
            'cityid' => 'required|exists:cities,id',
            'buy_and_lease' => 'required|in:buy,lease',
        ]);

        // Find the store and update it
        $store = Store::findOrFail($id);
        $store->update($request->all());

        return redirect()->route('stores.index')->with('success', 'Store updated successfully.');
    }

    // 
    // public function destroy($id)
    // {
    //     // Find the store and delete it
    //     $store = Store::findOrFail($id);
    //     $store->delete();

    //     return redirect()->route('stores.index')->with('success', 'Store deleted successfully.');
    // }
}
