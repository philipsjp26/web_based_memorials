<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memorials;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class MemorialsController extends Controller
{
    public function create(Request $request)
    {

        $credentials = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'middle_name' => 'required',
            'nik' => 'required',
            'gender' => 'required',
            'relationship' => 'required',
            'memorial_category' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,|max:2048'
        ]);
        if ($credentials->fails()) {
            Alert::error('Error', $credentials);
            return back();
        }
        try {

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('images'), $imageName);
            $data = new Memorials;
            $data->first_name = $request->first_name;
            $data->middle_name = $request->middle_name;
            $data->last_name = $request->last_name;
            $data->nik = $request->nik;
            $data->gender = $data->getGenderAttribute($request->gender);
            $data->relationship_id = $request->relationship;
            $data->category_id = $request->memorial_category;
            $data->save();
            insertIntoMemorialImages($data, $imageName, 'ceca');
            Alert::success('Success', 'Memorial has been created');
            return back();
        } catch (\Exception $e) {
            //throw $th;
            return $e->getMessage();
        }
    }
}
