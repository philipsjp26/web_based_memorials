<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\CustomerTransactions;
use App\Models\Memorials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        $data = Account::paginate(15);
        $page_login = $request->get('page_login');
        return view('dashboard.pages.list', compact('data', 'page_login'));
    }
    public function login()
    {
        $page_login = true;
        return view('dashboard.pages.login', compact('page_login'));
    }
    public function memorials(Request $request)
    {
        $data = Memorials::paginate(15);
        $page_login = $request->get('page_login');

        return view('dashboard.pages.memorials', compact('data', 'page_login'));
    }
    public function transactions(Request $request)
    {
        $page_login = $request->get('page_login');

        $data = CustomerTransactions::with('transaction_images')->paginate(15);

        return view('dashboard.pages.transactions', compact('data', 'page_login'));
    }
    public function profile_detail(Request $request)

    {
        $page_login = $request->get('page_login');

        return view("dashboard.pages.profile", compact('page_login'));
    }
    public function download(Request $request)
    {
        // $page_login = $request->get('page_login');

        return Storage::download("public/bukti_bayar/{$request->filename}");
    }
}