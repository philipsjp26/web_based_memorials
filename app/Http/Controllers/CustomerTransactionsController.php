<?php

namespace App\Http\Controllers;

use App\Models\CustomerTransactions;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CustomerTransactionsController extends Controller
{
    public function create(Request $request)
    {
        
        $transaction = CustomerTransactions::create([
            'status' => 'pending',
            'account_id' => $request->get('accounts_id')
        ]);
        Alert::success('Success', 'Request has been create');
        return back();
    }
}
