<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use Illuminate\Http\Request; 
use App\Http\Requests\StoreBankRequest;

class BankAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     
     $banks = BankAccount::paginate(10);
        return view ('admin.banks.index',compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'bank_name' => 'required|max:255|regex:/^[a-zA-Z\s]+$/|min:3',
            'account_title' => 'required|max:255|min:3|regex:/^[a-zA-Z\s]+$/',
               'account_number' => 'required_without:iban|string|max:20',
            'iban' => 'required_without:account_number|string|max:34',
            'routing' => 'nullable|string|max:9',
            'bank_address' => 'nullable|string|max:255',
            'company_address_with_bank' => 'nullable|string|max:255',
            'company_phone_no_with_bank' => 'nullable|string|max:15',
            'fed_tax_id_ein_with_bank' => 'nullable|string|max:15',
            'ein_issue_date' => 'nullable|date',
            'contact_person' => 'nullable|string|max:255',
            'contact_phone' => 'nullable|string|max:15|regex:/^\+?\d+$/|min:12',
            'contact_email' => 'nullable|email|max:255',
        ]);
        // Create a new BankAccount instance and save each field individually
        $bankAccount = new BankAccount();
        $bankAccount->bank_name = $request->bank_name;
        $bankAccount->account_title = $request->account_title;
        $bankAccount->account_number = $request->account_number;
        $bankAccount->iban = $request->iban;
        $bankAccount->routing = $request->routing;
        $bankAccount->bank_address = $request->bank_address;
        $bankAccount->company_address_with_bank = $request->company_address_with_bank;
        $bankAccount->company_phone_no_with_bank = $request->company_phone_no_with_bank;
        $bankAccount->fed_tax_id_ein_with_bank = $request->fed_tax_id_ein_with_bank;
        $bankAccount->ein_issue_date = $request->ein_issue_date;
        $bankAccount->contact_person = $request->contact_person;
        $bankAccount->contact_phone = $request->contact_phone;
        $bankAccount->contact_email = $request->contact_email;
        $bankAccount->save();

        // Redirect to a success page or return a response
        return redirect()->route('banks.index')->with('success', 'Bank account details stored successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BankAccount $bankAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)

    {
      $bankAccount = bankAccount::find($id);
  return view ('Admin.banks.edit',compact('bankAccount'));
    }

    /** 
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'bank_name' => 'required|max:255|regex:/^[a-zA-Z\s]+$/|min:3',
            'account_title' => 'required|max:255|min:3|regex:/^[a-zA-Z\s]+$/',
               'account_number' => 'required_without:iban|string|max:20',
            'iban' => 'required_without:account_number|string|max:34',
            'routing' => 'nullable|string|max:9',
            'bank_address' => 'nullable|string|max:255',
            'company_address_with_bank' => 'nullable|string|max:255',
            'company_phone_no_with_bank' => 'nullable|string|max:15',
            'fed_tax_id_ein_with_bank' => 'nullable|string|max:15',
            'ein_issue_date' => 'nullable|date',
            'contact_person' => 'nullable|string|max:255',
            'contact_phone' => 'nullable|string|max:15|regex:/^\+?\d+$/|min:12',
            'contact_email' => 'nullable|email|max:255',
        ]);

        // Update the bank account
        $bank->update($request->all());

        return redirect()->route('banks.index')->with('success', 'Bank account updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BankAccount $bankAccount)
    {
        //
    }



    




}// end of main function
