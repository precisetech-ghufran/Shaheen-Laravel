<?php

namespace App\Http\Controllers;

use App\Models\RealtorBrokert;
use Illuminate\Http\Request;

use App\Models\State;
use App\Models\City;
class RealtorBrokertController extends Controller
{
     public function index()
    {
        $realtors = RealtorBrokert::all();
        return view('admin.realtor_brokers.index', compact('realtors'));
    }

    public function create()
    {
        $states = State::all();
        return view('admin.realtor_brokers.create', compact('states'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'realtor_name' => 'required|regex:/^[a-zA-Z\s]+$/|max:255',
            'company_name' => 'nullable|string|max:255',
            'website' => 'nullable|url',
            'realtor_address' => 'nullable|string|max:255',
            'stateid' => 'nullable|exists:states,id',
            'cityid' => 'nullable|exists:cities,id',
            'realtor_zip_code' => 'nullable|string|max:20',
            'realtor_county' => 'nullable|string|max:255',
            'realtor_phone_no' => 'nullable|regex:/^\+?\d+$/|max:20|min:12',
            'contact_person' => 'nullable|string|max:255',
            'realtor_email' => 'nullable|email|max:255',
        ]);

        RealtorBrokert::create($request->all());

        return redirect()->route('realtors.index')->with('success', 'Realtor Broker added successfully!');
    }

    public function edit($id)
    {

      
        $realtorBroker = RealtorBrokert::find($id);
        $states = State::all();
        $cities = City::where('state_id', $realtorBroker->stateid)->get();
        return view('admin.realtor_brokers.edit', compact('realtorBroker', 'states', 'cities'));
    }

    public function update(Request $request, $id)
    {

 
        $realtorBroker = RealtorBrokert::find($id);
        $request->validate([
            'realtor_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'website' => 'nullable|url',
            'realtor_address' => 'nullable|string|max:255',
            'stateid' => 'nullable|exists:states,id',
            'cityid' => 'nullable|exists:cities,id',
            'realtor_zip_code' => 'nullable|string|max:20',
            'realtor_county' => 'nullable|string|max:255',
            'realtor_phone_no' => 'nullable|string|max:20',
            'contact_person' => 'nullable|string|max:255',
            'realtor_email' => 'nullable|email|max:255',
        ]);

        $realtorBroker->update($request->all());

        return redirect()->route('realtors.index')->with('success', 'Realtor Broker updated successfully!');
    }

    public function destroy($id)
    {
        $realtorBroker = RealtorBrokert::find($id);
        $realtorBroker->delete();
        return redirect()->route('admin.realtor_brokers.index')->with('success', 'Realtor Broker deleted successfully!');
    }

    public function getCitiesByState(Request $request)
    {
        $stateId = $request->input('state_id');
        $cities = City::where('state_id', $stateId)->get();
        return response()->json(['cities' => $cities]);
    }
}
