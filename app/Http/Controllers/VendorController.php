<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\State;
use App\Models\City;
use App\Models\VendorGroup;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = Vendor::all();
        return view('admin.vendors.index', compact('vendors'));
    }

    public function create()
    {
        $states = State::all();
        $vendorGroups = VendorGroup::all();
        return view('admin.vendors.create', compact('states', 'vendorGroups'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'vendor_name' => 'required',
          
        ]);

        Vendor::create($request->all());
        return redirect()->route('Vendors.index')->with('success', 'Vendor created successfully.');
    }

    public function edit(Vendor $vendor,$id)
    {
       $vendor = Vendor::find($id);
        $states = State::all();
        $cities = City::where('state_id', $vendor->state_id)->get();
        $vendorGroups = VendorGroup::all();
        return view('admin.vendors.edit', compact('vendor', 'states', 'cities', 'vendorGroups'));
    }

    public function update(Request $request, Vendor $vendor,$id)
    {
        $request->validate([
            'vendor_name' => 'required',
         
        ]);
        $vendor = Vendor::find($id);

        $vendor->update($request->all());
        return redirect()->route('Vendors.index')->with('success', 'Vendor updated successfully.');
    }

    // public function destroy(Vendor $vendor)
    // {
    //     $vendor->delete();
    //     return redirect()->route('vendors.index')->with('success', 'Vendor deleted successfully.');
    // }
}
 