<?php


namespace App\Http\Controllers;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{



      public function getCitiesByState(Request $request)
    {
        $stateId = $request->input('state_id');
        $cities = City::where('state_id', $stateId)->get();

        return response()->json(['cities' => $cities]);
    }

    
    public function index()
    {
        $cities = City::with('state')->get();
        return view('admin.cities.index', compact('cities'));
    }

    public function create()
    {
        $states = State::all();
        return view('admin.cities.create', compact('states'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'city' => 'required|string|max:255',
            'states' => 'required|exists:states,id',
        ]);

        City::create([
        'name' => $request->city,
'state_id' => $request->states,
]);

        return redirect()->route('cities.index')->with('success', 'City created successfully.');
    }

    public function edit(City $city)
    {
        $states = State::all();
        return view('admin.cities.edit', compact('city', 'states'));
    }

    public function update(Request $request, City $city)
    {
        $request->validate([
            'city' => 'required|string|max:255',
            'states' => 'required|exists:states,id',
        ]);

        $city->update([
'name' => $request->city,
'state_id' => $request->states,
        ]);

        return redirect()->route('cities.index')->with('success', 'City updated successfully.');
    }

    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->route('cities.index')->with('success', 'City deleted successfully.');
    }
}
