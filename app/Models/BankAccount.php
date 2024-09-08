<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;


    protected $table = 'bank_accounts';

        protected $fillable = [
        'bank_name',
        'account_title',
        'account_number',
        'iban',
        'routing',
        'bank_address',
        'company_address_with_bank',
        'company_phone_no_with_bank',
        'fed_tax_id_ein_with_bank',
        'ein_issue_date',
        'contact_person',
        'contact_phone',
        'contact_email',
        'project',
    ];
}
