<?php

namespace App\Http\Controllers;

use App\Models\VendorGroup;
use Illuminate\Http\Request;

class VendorGroupController extends Controller
{
    public function index()
    {
        $vendorGroups = VendorGroup::all();
        return view('admin.vendor_groups.index', compact('vendorGroups'));
    }

    public function create()
    {
        return view('admin.vendor_groups.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vendor_group' => 'required|string|max:255',
        ]);

        VendorGroup::create([
            'vendor_group' => $request->vendor_group,
        ]);

        return redirect()->route('vendor_groups.index')->with('success', 'Vendor Group created successfully.');
    }

    public function edit(VendorGroup $vendorGroup)
    {
        return view('admin.vendor_groups.edit', compact('vendorGroup'));
    }

    public function update(Request $request, VendorGroup $vendorGroup)
    {
        $request->validate([
            'vendor_group' => 'required|string|max:255',
        ]);

        $vendorGroup->update([
            'vendor_group' => $request->vendor_group,
        ]);

        return redirect()->route('vendor-groups.index')->with('success', 'Vendor Group updated successfully.');
    }

    // public function destroy(VendorGroup $vendorGroup)
    // {
    //     $vendorGroup->delete();

    //     return redirect()->route('vendor_groups.index')->with('success', 'Vendor Group deleted successfully.');
    // }
}
