<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Define a list of permissions
        $permissions = [
        'View Permissions',
        'Insert User Roles',
         'Insert Permissions',
        'Update Users',
         'Update User Roles',
        'Update Permissions',
         'Delete Users',
        'Delete User Roles',
         'Delete Permissions',
        'franchise',
         'expense_head',
        'reports',
         'vendor_group',
        'vendors',
         'projects',
        'project_pnl',
         'partners',
        'partner_contribution',
         'partner_withdrawal',
        'partner_statement',

         'negotiation',
        'proposed_site',
         'realtors',
        'realtors',
         'project_gm',
        'project_license',
         'corporate_tax',
        'sales_tax',
         'project_dev_exp',
        'banks',
         'View User Roles',
        'View Users',
         'deletion',
        'View Content',
         'lease_signed',
        'architect_plan',
         'permit_and_license',
        'construction',
         'inspections',
        'opening_awaited',

         'open_for_business',
        'k_one',
         'intra_partners_trans',
        'state',
         'pro_sum_rep',
        'exp_tran_rep',
         'exp_head_rep',
        'general_attachment',
         'search_attachment',
        'vendor_bills',
         'vendor_statement',
        'master_file',
        'bank_ledger',
         'bank_balances',
        'pnl_transaction_rep',
         'list_of_stores',
        'list_of_gm',
        'list_of_partners',
         'list_of_vendors',
        'list_of_banks',
         'list_of_franchise',
        'list_of_landlord',
        'list_of_realtors',
         'list_of_store_part',
        'broker',
         'tenant',
        'city',
        'development_report',
         'pre_construction',
        'sale_store',
         'sale_store_payment',
        'sale_store_ledger',

        'a_e_s_tax',
         'a_e_project',
        'a_e_sale_store',
         'a_e_expense',
        'a_e_partner',

        'Admin_New',
      
           
        ];



        // Create each permission if it doesn't exist
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
    
    }
}
