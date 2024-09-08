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
            'partner_address' => 'required|string|max:255',
            'state_id' => 'required|exists:states,id',
            'city_id' => 'required|exists:cities,id',
            'zip_code' => 'required|string|max:10',
            'county' => 'required|string|max:255',
            'partner_contact_no' => 'required|string|max:20',
            'partner_ss_number' => 'required|string|max:20',
            'driver_license_number' => 'required|string|max:20',
            'partner_email' => 'required|email|unique:partners,partner_email,' . $partner->id,
            'partner_nick_name' => 'nullable|string|max:255',
            'partner_primary_phone' => 'required|string|max:20',
            'partner_secondary_phone' => 'nullable|string|max:20',
            'notes' => 'nullable|string',
            'country_id' => 'required|exists:countries,id',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 

              
        ]);


 if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/partners'), $imageName);
        $validated['image'] = $imageName;
    }

        Partner::create($validated);

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
            'partner_address' => 'required|string|max:255',
            'state_id' => 'required|exists:states,id',
            'city_id' => 'required|exists:cities,id',
            'zip_code' => 'required|string|max:10',
            'county' => 'required|string|max:255',
            'partner_contact_no' => 'required|string|max:20',
            'partner_ss_number' => 'required|string|max:20',
            'driver_license_number' => 'required|string|max:20',
            'partner_email' => 'required|email|unique:partners,partner_email,' . $partner->id,
            'partner_nick_name' => 'nullable|string|max:255',
            'partner_primary_phone' => 'required|string|max:20',
            'partner_secondary_phone' => 'nullable|string|max:20',
            'notes' => 'nullable|string',
            'country_id' => 'required|exists:countries,id',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);


if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/partners'), $imageName);
        $validated['image'] = $imageName;
    }
        $partner->update($validated);

        return redirect()->route('partners.index')->with('success', 'Partner updated successfully');
    }

    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->route('partners.index')->with('success', 'Partner deleted successfully');
    }
}
