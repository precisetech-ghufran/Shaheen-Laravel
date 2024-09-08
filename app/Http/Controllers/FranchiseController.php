<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use Illuminate\Http\Request;

class FranchiseController extends Controller
{
    public function index()
    {
        $franchises = Franchise::paginate(10);
        return view('admin.franchise.index', compact('franchises'));
    }

    public function create()
    {
        return view('admin.franchise.create');
    }

    public function store(Request $request)
    {
           $request->validate([
            'franchise_name' => 'required|regex:/^[a-zA-Z\s]+$/|max:255',
            'website' => 'nullable|url',
            'contact_person_name' => 'nullable|regex:/^[a-zA-Z\s]+$/|max:255',
            'franchisor_contact_person' => 'nullable|regex:/^[a-zA-Z\s]+$|max:255',
            'construction_contact_person' => 'nullable|regex:/^[a-zA-Z\s]+$|max:15|regex:/^\+?\d+$/',
            'construction_contact_email' => 'nullable|email|max:255',
            'construction_phone_no' => 'nullable|regex:/^\+?\d+$/|max:20',
            'training_contact_person' => 'nullable|string|max:255',
            'training_contact_email' => 'nullable|email|max:255',
            'training_phone_no' => 'nullable|regex:/^\+?\d+$/|max:20',
            'opening_contact_person' => 'nullable|regex:/^[a-zA-Z\s]+$/|max:255',
            'opening_person_email' => 'nullable|email|max:255',
            'opening_person_phone_no' => 'nullable|regex:/^\+?\d+$/|max:20|min:12',
            'franchise_image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $franchise = new Franchise($request->all());

        if ($request->hasFile('franchise_image')) {


             $filePath = public_path('uploads/franchise');
            $file = $request->file('franchise_image');
   $file_name = time() . $file->getClientOriginalName();
     $file->move($filePath, $file_name);
            $franchise->franchise_image = $file_name;
        }

        $franchise->save();

        return redirect()->route('franchises.index')->with('success', 'Franchise created successfully.');
    }

    public function edit(Franchise $franchise)
    {
        return view('admin.franchise.edit', compact('franchise'));
    }

    public function update(Request $request, Franchise $franchise)
    {
      $request->validate([
            'franchise_name' => 'required|regex:/^[a-zA-Z\s]+$/|max:255',
            'website' => 'nullable|url',
            'contact_person_name' => 'nullable|regex:/^[a-zA-Z\s]+$/|max:255',
            'franchisor_contact_person' => 'nullable|regex:/^[a-zA-Z\s]+$|max:255',
            'construction_contact_person' => 'nullable|regex:/^[a-zA-Z\s]+$|max:15|regex:/^\+?\d+$/',
            'construction_contact_email' => 'nullable|email|max:255',
            'construction_phone_no' => 'nullable|regex:/^\+?\d+$/|max:20',
            'training_contact_person' => 'nullable|string|max:255',
            'training_contact_email' => 'nullable|email|max:255',
            'training_phone_no' => 'nullable|regex:/^\+?\d+$/|max:20',
            'opening_contact_person' => 'nullable|regex:/^[a-zA-Z\s]+$/|max:255',
            'opening_person_email' => 'nullable|email|max:255',
            'opening_person_phone_no' => 'nullable|regex:/^\+?\d+$/|max:20|min:12',
            'franchise_image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $franchise->fill($request->all());

        if ($request->hasFile('franchise_image')) {
            $path = $request->file('franchise_image')->store('images', 'public');
            $franchise->franchise_image = $path;
        }

        $franchise->save();

        return redirect()->route('franchises.index')->with('success', 'Franchise updated successfully.');
    }

    public function destroy(Franchise $franchise)
    {
        if ($franchise->franchise_image) {
            \Storage::disk('public')->delete($franchise->franchise_image);
        }

        $franchise->delete();

        return redirect()->route('franchises.index')->with('success', 'Franchise deleted successfully.');
    }
}
