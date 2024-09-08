<?php



namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\BankAccount;
class StoreBankRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Adjust this based on your authorization logic
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    
          return [
            'bank_name' => 'required|string|max:255',
            'account_title' => 'required|string|max:255',
            'account_number' => 'nullable|string|max:255|unique:banks,account_number',
            'iban' => 'nullable|string|max:255|unique:banks,iban',
            'routing' => 'nullable|string|max:255',
            'bank_address' => 'nullable|string|max:255',
            'company_address_with_bank' => 'nullable|string|max:255',
            'company_phone_no_with_bank' => 'nullable|string|max:20',
            'fed_tax_id_ein_with_bank' => 'nullable|string|max:255',
            'ein_issue_date' => 'nullable|date',
            'contact_person' => 'nullable|string|max:255',
            'contact_phone' => 'nullable|string|max:20',
            'contact_email' => 'nullable|email|max:255',
        ];
        
    }

    /**
     * Customize the validation error messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'bank_name.required' => 'The bank name is required.',
            'account_title.required' => 'The account title is required.',
            'account_number.required' => 'The account number is required.',
            'account_number.unique' => 'The account number has already been taken.',
            'iban.required' => 'The IBAN is required.',
            'iban.unique' => 'The IBAN has already been taken.',
            'contact_email.email' => 'The contact email must be a valid email address.',
        ];
    }
}

