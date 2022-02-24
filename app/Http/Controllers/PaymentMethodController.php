<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethods;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PaymentMethodController extends Controller
{
    //

    public function index(Request $request)
    {
        $data = PaymentMethods::all();
        return view('dashboard.pages.payment_methods', compact('data'));
    }
    public function create(Request $request)
    {
        $check_if_exists = PaymentMethods::where('account_number', $request->account_number)->get();
        if (count($check_if_exists) > 0) {
            Alert::error("Error", "Account number already exists");
            return back();
        }
        $data = PaymentMethods::create([
            'bank_name' => $request->bank_name,
            'account_number' => $request->account_number
        ]);
        Alert::success("Success", 'Success create data');
        return back();
    }
    public function update(Request $request)
    {
        $data = PaymentMethods::find($request->id);
        $data->update([
            'bank_name' => $request->bank_name,
            'account_number' => $request->account_number
        ]);
        Alert::success('Success', 'Success update data');
        return back();
    }
    public function delete(Request $request)
    {
        $data = PaymentMethods::destroy($request->id);   
        toast('Success deleted','success');
        return back();
    }
}
