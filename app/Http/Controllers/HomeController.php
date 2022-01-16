<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Memorials;
use App\Models\Relationship;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{

    public function index()
    {
        $data = Memorials::with('memorialImages')->get();
        return view('components.slider', compact('data'));
    }
    public function pageList()
    {
        return view('pages.list');
    }
    public function pageCreate()
    {
        $relationship = Relationship::all();
        $category = Category::all();
        return view('pages.memorials.create', compact('relationship', 'category'));
    }
    public function pageDetail($id)
    {
        $data = Memorials::with('memorialImages')->find($id);
        return view('pages.memorials.details', compact('data'));
    }
    public function pagePlanAndFeatures()
    {
        return view('pages.PlanAndFeature');
    }
    public function pageFreemium()
    {
        return view('pages.detail_feature');
    }
    public function pageMyAccount()
    {
        return view('pages.myaccount');
    }
}
