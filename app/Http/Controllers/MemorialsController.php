<?php

namespace App\Http\Controllers;

use App\Models\MemorialImages;
use Illuminate\Http\Request;
use App\Models\Memorials;
use App\Models\MemorialsAccounts;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Image;

class MemorialsController extends Controller
{
    public function create(Request $request)
    {
        // dd('Chek'.$request->get('account_id'));
        $credentials = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'nik' => 'required',
            'gender' => 'required',
            'relationship' => 'required',
            'memorial_category' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,|max:2048',
            'alamat' => 'required|max:255',
            'date_of_birth' => 'date_format:Y-m-d',
            'date_of_death' => 'date_format:Y-m-d'
        ]);
        if ($credentials->fails()) {
            Alert::error('Error', $credentials->errors()->first());
            return back();
        }
        try {

            $data = new Memorials;

            $result = $data->isExist($request);
            if ($result['status'] == true) {
                Alert::error('Error', $result['message']);
            } else {
                $data->first_name = $request->first_name;
                $data->middle_name = $request->middle_name ? $request->middle_name : '';
                $data->last_name = $request->last_name;
                $data->nik = $request->nik;
                $data->gender = $data->getGenderAttribute($request->gender);
                $data->relationship_id = $request->relationship;
                $data->category_id = $request->memorial_category;
                $data->date_of_birth = $request->date_of_birth;
                $data->date_of_death = $request->date_of_death;
                $data->alamat = $request->alamat;
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

        $memorial_image = new MemorialImages();
        $validate = $memorial_image->validate_total_image($id);
        if ($validate['status'] == true) {
            Alert::error('Validate', $validate['message']);
            return back();
        } else {
            for ($i = 0; $i < count($request->file('image')); $i++) {
                $filename = str_replace(' ', '', $request->file('image')[$i]->getClientOriginalName());
                $image = $request->file('image')[$i];
                $img = Image::make($image->path());
                $destination = public_path('/storage/images/');
                $img->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destination . $filename, 80);
                insertIntoMemorialImages($data, $filename, $destination . $filename);
            }
            Alert::success('Success', "Images has bean added");
            return back();
        }        
    }
    public function update(Request $request, $id)
    {

        $credentials = Validator::make($request->all(), [
            'first_name' => 'nullable|max:255',
            'middle_name' => 'nullable',
            'last_name' => 'nullable',
        ]);
        $description = $request->description || $request->life ? array('description' => $request->description, 'life' => $request->life) : null;

        if ($credentials->fails()) {
            Alert::error('Error', $credentials->errors()->first());
            return back();
        }
        $data = Memorials::find($id);
        $data->first_name = $request->first_name;
        $data->middle_name = $request->middle_name;
        $data->last_name = $request->last_name;
        $data->gender = $data->getGenderAttribute($request->gender);
        if (!is_null($description)) create_or_update_memorial_description($data, $description);
        Alert::success('Success', 'Successfully updated data');
        return back();
    }
    public function delete(Request $request)
    {
        $data = Memorials::with('memorialImages')
            ->whereHas('memorialImages', function ($q) use ($request) {
                $q->where('memorial_id', '=', $request->id);
            })->get();
        $memorial = Memorials::find($request->id);
        try {
            //code...
            foreach ($data as $items) {
                # code...
                
                $count_items = count($items->memorialImages->pluck('title'));                
                for ($i = 0; $i < $count_items; $i++) {
                    # code...
                    Storage::delete("public/images/$items->memorialImages->pluck('title')[$i]");
                }
            }       
            $memorial_image = MemorialImages::whereMemorialId($request->id);
            $memorial_image->delete();       
            $memorial_accounts = MemorialsAccounts::whereMemorialsId($request->id);
            $memorial_accounts->delete();
            $memorial->delete();
                                                           
            toast('Memorials Deleted', 'warning');
            return back();
        } catch (\Exception $e) {
            //throw $th;
            Alert::error('Error', $e->getMessage());
            return back();
        }
    }
}
