<?php

namespace App\Http\Controllers;

use App\Models\CustomerTransactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
    public function update(Request $request){
        $data = CustomerTransactions::find((int) $request->id);
        $data->update(['status' => $request->status]);
        toast('Success updated', 'success');
        return back();
    }
    public function delete(Request $request){
                
        $data = CustomerTransactions::with('transaction_images')->find((int) $request->id);
        $filename = $data->transaction_images->last()->filename;
        Storage::delete("public/bukti_bayar/$filename");
        $data->destroy((int) $request->id);
        toast('Transaction deleted', 'warning');
        return back();
    }
}
