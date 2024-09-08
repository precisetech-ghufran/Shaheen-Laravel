<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BankAccount;
use App\Models\City;
use App\Models\Country;
use App\Models\Franchise;
use App\Models\Landlord;
use App\Models\Partner;
use App\Models\RealtorBrokert;
use App\Models\State;
use App\Models\Tenant;
use App\Models\VendorGroup;
use App\Models\User;
class SearchController extends Controller
{
   public function search(Request $request)
    {

 
        $query = $request->input('query');
        $table = $request->input('table'); 

        if ($table == 'bank_accounts') {
             $results = BankAccount::where('bank_name', 'LIKE', "%{$query}%")->paginate(10); 
             return view('admin.banks.index', compact('results', 'table', 'query'));
        }
         elseif ($table == 'users') {
            $results = User::where('name', 'LIKE', "%{$query}%")->paginate(10);
             return view('admin.users.index', compact('results', 'table', 'query'));
        }
         elseif ($table == 'states') {
            $results = State::where('name', 'LIKE', "%{$query}%")->get();
                  return view('admin.states.index', compact('results', 'table', 'query'));
        }
         elseif ($table == 'cities') {
            $results = City::where('name', 'LIKE', "%{$query}%")->get();
             return view('admin.cities.index', compact('results', 'table', 'query'));
        }
        
         elseif ($table == 'realtor_brokerts') {
            $results = RealtorBrokert::where('realtor_name', 'LIKE', "%{$query}%")->get();
            return view('admin.realtor_brokers.index', compact('results', 'table', 'query'));
        }
         elseif ($table == 'tenants') {
            $results = Tenant::where('tenant_name', 'LIKE', "%{$query}%")->get();
                return view('admin.tenants.index', compact('results', 'table', 'query'));
        }
         elseif ($table == 'franchises') {
            $results = Franchise::where('franchise_name', 'LIKE', "%{$query}%")->paginate(10);
                   return view('admin.franchise.index', compact('results', 'table', 'query'));
        }
         elseif ($table == 'vendor_groups') {
            $results = VendorGroup::where('vendor_group', 'LIKE', "%{$query}%")->get();
              return view('admin.vendor_groups.index', compact('results', 'table', 'query'));
        }

         elseif ($table == 'landlords') {
            $results = Landlord::where('landlord_name', 'LIKE', "%{$query}%")->get();
             return view('admin.landlords.index', compact('results', 'table', 'query'));
        }
         else {
            $results = Partner::where('name', 'LIKE', "%{$query}%")->get();
              return view('admin.partners.index', compact('results', 'table', 'query'));
        }

       
    }
}
