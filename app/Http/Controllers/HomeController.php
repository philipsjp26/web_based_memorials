<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Relationship;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{

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
}
