<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\CustomerTransactions;
use App\Models\Memorials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function memorials()
    {
        $data = Memorials::paginate(15);
        return view('dashboard.pages.memorials', compact('data'));
    }
    public function transactions()
    {
        $data = CustomerTransactions::with('transaction_images')->paginate(15);
        
        return view('dashboard.pages.transactions', compact('data'));
    }
    public function profile_detail()
    {
        return view("dashboard.pages.profile");
    }
    public function download(Request $request){
        return Storage::download("public/bukti_bayar/{$request->filename}");
    }
}
