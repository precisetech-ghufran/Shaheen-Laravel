<?php
namespace App\Http\Controllers;

use App\Models\Landlord;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;

class LandlordController extends Controller
{
    public function index()
    {
        $landlords = Landlord::all();
        return view('admin.landlords.index', compact('landlords'));
    }

   public function create()
{
    $states = State::all(); 
    $cities = City::all(); 
    return view('admin.landlords.create', compact('states', 'cities'));
}

    public function store(Request $request)
    {
        $request->validate([
            'landlord_name' => 'required|regex:/^[a-zA-Z\s]+$/|max:255',
            'company_name' => 'nullable|string|max:255',
            'website' => 'nullable|url',
            'landlord_address' => 'required|string|max:255',
            'stateid' => 'required|integer',
            'cityid' => 'required|integer',
            'landlord_zip_code' => 'nullable|string|max:10',
            'landlord_county' => 'nullable|string|max:255',
            'contact_person' => 'nullable|string|max:255',
             'landlord_contact_no' => [
        'required',
        'regex:/^\+?\d+$/',

    ],
            'landlord_email' => 'required|email|max:255',
        ]);

        Landlord::create($request->all());

        return redirect()->route('landlords.index')->with('success', 'Landlord created successfully.');
    }

    public function edit(Landlord $landlord)
    {
        $states = State::all();
        $cities = City::where('state_id', $landlord->stateid)->get();
        return view('admin.landlords.edit', compact('landlord', 'states', 'cities'));
    }

    public function update(Request $request, Landlord $landlord)
    {
         $request->validate([
            'landlord_name' => 'required|regex:/^[a-zA-Z\s]+$/|max:255',
            'company_name' => 'nullable|string|max:255',
            'website' => 'nullable|url',
            'landlord_address' => 'required|string|max:255',
            'stateid' => 'required|integer',
            'cityid' => 'required|integer',
            'landlord_zip_code' => 'nullable|string|max:10',
            'landlord_county' => 'nullable|string|max:255',
            'contact_person' => 'nullable|string|max:255',
             'landlord_contact_no' => [
        'required',
        'regex:/^\+?\d+$/',

    ],
            'landlord_email' => 'required|email|max:255',
        ]);
        $landlord->update($request->all());

        return redirect()->route('landlords.index')->with('success', 'Landlord updated successfully.');
    }

    public function destroy(Landlord $landlord)
    {
        $landlord->delete();

        return redirect()->route('landlords.index')->with('success', 'Landlord deleted successfully.');
    }

    public function getCities($state_id)
    {
        $cities = City::where('state_id', $state_id)->get();
        return response()->json($cities);
    }
}
