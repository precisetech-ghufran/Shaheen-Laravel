<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request; 
use App\Models\State;
use App\Models\City;
class TenantController extends Controller
{
    public function index()
    {
        $tenants = Tenant::all();
        return view('admin.tenants.index', compact('tenants'));
    }

   public function create()
{
    $states = State::all(); // Fetch all states from the database
    return view('admin.tenants.create', compact('states')); // Pass states to the view
}
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tenant_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'website' => 'nullable|url',
            'tenant_address' => 'required|string|max:255',
            'stateid' => 'nullable|exists:states,id',
            'cityid' => 'nullable|exists:cities,id',
            'tenant_zip_code' => 'nullable|string|max:10',
            'tenant_county' => 'nullable|string|max:255',
            'contact_person' => 'required|string|max:255',
            'tenant_contact_no' => 'nullable|string|max:15',
            'tenant_email' => 'required|email|max:255',
        ]);

        Tenant::create($validated);

        return redirect()->route('tenants.index')->with('success', 'Tenant created successfully.');
    }

    public function edit($id)
    {
           $tenant = Tenant::findOrFail($id);
    $states = State::all();
    $cities = City::where('state_id', $tenant->stateid)->get();

    return view('admin.tenants.edit', compact('tenant', 'states', 'cities'));

    }

    public function update(Request $request, $id)
    {
     $validated = $request->validate([
            'tenant_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'website' => 'nullable|url',
            'tenant_address' => 'required|string|max:255',
            'stateid' => 'nullable|exists:states,id',
            'cityid' => 'nullable|exists:cities,id',
            'tenant_zip_code' => 'nullable|string|max:10',
            'tenant_county' => 'nullable|string|max:255',
            'contact_person' => 'required|string|max:255',
            'tenant_contact_no' => 'nullable|string|max:15',
            'tenant_email' => 'required|email|max:255',
        ]);

    $tenant = Tenant::findOrFail($id);
    $tenant->update($request->all());

    return redirect()->route('tenants.index')->with('success', 'Tenant updated successfully');
    }

    public function destroy(Tenant $tenant)
    {
        $tenant->delete();

        return redirect()->route('tenants.index')->with('success', 'Tenant deleted successfully.');
    }
}
