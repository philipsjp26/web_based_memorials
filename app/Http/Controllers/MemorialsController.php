<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memorials;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class MemorialsController extends Controller
{
    public function create(Request $request)
    {
        // dd('Chek'.$request->get('account_id'));
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

            $data = new Memorials;
            $result = $data->isExist($request);
            if ($result['status'] == true) {
                Alert::error('Error', $result['message']);
            } else {
                $data->first_name = $request->first_name;
                $data->middle_name = $request->middle_name;
                $data->last_name = $request->last_name;
                $data->nik = $request->nik;
                $data->gender = $data->getGenderAttribute($request->gender);
                $data->relationship_id = $request->relationship;
                $data->category_id = $request->memorial_category;
                $imageName = time() . '.' . $request->image->extension();
                $path = $request->image->storeAs('public/images', $imageName);
                $data->save();
                $data->accounts()->attach($request->get('accounts_id'));

                $data->createMemorialImages($imageName, $path);
                Alert::success('Success', 'Memorial has been created');
            }
            return back();
        } catch (\Exception $e) {
            //throw $th;
            return $e->getMessage();
        }
    }
    public function getDetail(Request $request)
    {
    }
    public function addMoreImages(Request $request, $id)
    {
        $data = Memorials::find($id);

        for ($i = 0; $i < count($request->file('image')); $i++) {
            $filename = str_replace(' ', '', $request->file('image')[$i]->getClientOriginalName());
            $path = $request->file('image')[$i]->storeAs('public/images', $filename);
            insertIntoMemorialImages($data, $filename, $path);
        }
        Alert::success('Success', "Images has bean added");
        return back();
    }
    public function update(Request $request, $id)
    {
        $data = Memorials::find($id);
        $data->first_name = $request->first_name;
        $data->middle_name = $request->middle_name;
        $data->last_name = $request->last_name;
        $data->gender = $data->getGenderAttribute($request->gender);
        $data->save();
        Alert::success('Success', 'Successfully updated data');
        return back();
    }
}
