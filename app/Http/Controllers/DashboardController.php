<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.list');
    }
    public function transactions()
    {
        return view('dashboard.pages.transactions');
    }
}
