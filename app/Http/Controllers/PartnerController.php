<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\State;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.index', compact('partners'));
    }

     public function create()
    {
        $countries = Country::all();
        $states = State::all();
        return view('admin.partners.create', compact('countries', 'states'));
    }

    public function store(Request $request)
    { 
        $validated = $request->validate([
                     'partner_name' => 'required|string|max:255',
            'partner_address' => 'nullable|string|max:255',
            'stateid' => 'nullable|exists:states,id',
            'cityid' => 'nullable|exists:cities,id',
            'zip_code' => 'nullable|string|max:10',
            'county' => 'nullable|string|max:255',
            'partner_contact_no' => 'nullable|string|max:20',
            'partner_ss_number' => 'nullable|string|max:20',
            'driver_license_number' => 'nullable|string|max:20',
            'partner_email' => 'nullable|email|unique:partners,partner_email',
            'partner_nick_name' => 'nullable|string|max:255',
            'partner_primary_phone' => 'nullable|string|max:20',
            'partner_secondary_phone' => 'nullable|string|max:20',
            'notes' => 'nullable|string',
            'country_id' => 'nullable|exists:countries,id',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 

              
        ]);


 if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/partners'), $imageName);
        $validated['image'] = $imageName;
    }

       
         Partner::create([
          

     'partner_name' => $request->partner_name ,
      'partner_address' => $request->partner_address ,
    'state_id' => $request->stateid  ,
          'city_id' => $request->cityid  ,

 'zip_code' => $request->zip_code ,



 'partner_contact_no' => $request->partner_contact_no,

 'partner_ss_number' => $request->partner_ss_number ,

 'driver_license_number' => $request->driver_license_number ,

 'partner_email' => $request->partner_email ,

 'partner_nick_name' => $request->partner_nick_name ,

 'partner_primary_phone' => $request->partner_primary_phone ,

 'partner_secondary_phone' => $request->partner_secondary_phone ,

 'notes' => $request->notes ,

 'country_id' => $request->country_id ,
 


        ]);
        return redirect()->route('partners.index')->with('success', 'Partner created successfully');
    }

    public function edit(Partner $partner)
    {
        $countries = Country::all();
        $states = State::all();
        $cities = City::where('state_id', $partner->state_id)->get();
        return view('admin.partners.edit', compact('partner', 'countries', 'states', 'cities'));
    }

    public function update(Request $request, Partner $partner)
    {




        $validated = $request->validate([
            'partner_name' => 'required|string|max:255',
            'partner_address' => 'nullable|string|max:255',
            'stateid' => 'nullable|exists:states,id',
            'cityid' => 'nullable|exists:cities,id',
            'zip_code' => 'nullable|string|max:10',
            'county' => 'nullable|string|max:255',
            'partner_contact_no' => 'nullable|string|max:20',
            'partner_ss_number' => 'nullable|string|max:20',
            'driver_license_number' => 'nullable|string|max:20',
            'partner_nick_name' => 'nullable|string|max:255',
            'partner_primary_phone' => 'nullable|string|max:20',
            'partner_secondary_phone' => 'nullable|string|max:20',
            'notes' => 'nullable|string',
            'country_id' => 'nullable|exists:countries,id',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'partner_email' => 'nullable|email|unique:partners,partner_email,' . $partner->id,
  
        ]);


if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/partners'), $imageName);
        $validated['image'] = $imageName;
    }



     $partner->update([
       'partner_name' => $request->partner_name ,
      'partner_address' => $request->partner_address ,
    'state_id' => $request->stateid ,
          'city_id' => $request->cityid  ,
 'zip_code' => $request->zip_code ,
 'partner_contact_no' => $request->partner_contact_no,
 'partner_ss_number' => $request->partner_ss_number ,
 'driver_license_number' => $request->driver_license_number ,
 'partner_email' => $request->partner_email ,
 'partner_nick_name' => $request->partner_nick_name ,
 'partner_primary_phone' => $request->partner_primary_phone ,
 'partner_secondary_phone' => $request->partner_secondary_phone ,
 'notes' => $request->notes ,
 'country_id' => $request->country_id ,
    ]);
       

        return redirect()->route('partners.index')->with('success', 'Partner updated successfully');
    }


    // public function destroy(Partner $partner)
    // {
    //     $partner->delete();
    //     return redirect()->route('partners.index')->with('success', 'Partner deleted successfully');
    // }
}
