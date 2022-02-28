<?php

namespace App\Http\Controllers;

use App\Models\ClaimMemorials;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ClaimMemorialController extends Controller
{
    public function create(Request $request)
    {
        // $filename = time(). '.'. $request->image->extension();                
        $data = new ClaimMemorials;
        $data->create($request->account_id, $request->memorial_id, $request->relationship, $request, $request->fullname);
        // dd($data);
        Alert::success('Success', 'Claim success, wait for approved');
        return back();
    }
}
