<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\CustomerTransactions;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Account::paginate(15);
        return view('dashboard.pages.list', compact('data'));
    }
    public function login()
    {
        $page_login = true;
        return view('dashboard.pages.login', compact('page_login'));
    }
    public function transactions()
    {
        $data = CustomerTransactions::paginate(15);
        return view('dashboard.pages.transactions', compact('data'));
    }    
}
