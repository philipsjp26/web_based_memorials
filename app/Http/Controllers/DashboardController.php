<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\CustomerTransactions;
use App\Models\Memorials;
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
    public function memorials(){
        $data = Memorials::paginate(15);
        return view('dashboard.pages.memorials', compact('data'));
    }
    public function transactions()
    {
        $data = CustomerTransactions::paginate(15);
        return view('dashboard.pages.transactions', compact('data'));
    }    
}
