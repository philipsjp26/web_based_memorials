<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReviewsController extends Controller
{
    //
    public function create(Request $request)
    {
        $data = array('comments' => $request->comments, 'rating' => $request->rating, 'username' => $request->username);
        $review = Reviews::create($data);
        $review->memorials()->attach($request->memorial_id);
        Alert::success('Success', 'Reviews has been created');
        return back();
    }
}
