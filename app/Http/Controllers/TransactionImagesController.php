<?php

namespace App\Http\Controllers;

use App\Models\TransactionImages;
use Illuminate\Http\Request;
use Image;
use RealRashid\SweetAlert\Facades\Alert;

class TransactionImagesController extends Controller
{
    //
    public function upload(Request $request)
    {
        
        try {            
            $filename = str_replace(' ', '', $request->file('image')->getClientOriginalName());        
            $img = $request->image->storeAs('public/bukti_bayar', $filename);
            $data = TransactionImages::create([
                'filename' => $filename,
                'directory' => $img,
                'transaction_id' => (int) $request->transaction_id
            ]);
            Alert::success('Success', 'Success uploaded');
            return back();
        } catch (\Exception $e) {
            //throw $th;
            Alert::error('Error', $e->getMessage());
            return back();
        }
    }
}
