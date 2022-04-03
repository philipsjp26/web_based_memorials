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

        $totalAccount = Account::count();
        $totalTransaction = CustomerTransactions::count();
        $totalMemorial = Memorials::count();

        $navbar = array(
            'totalAccount' => $totalAccount,
            'totalTransaction' => $totalTransaction,
            'totalMemorial' => $totalMemorial
        );

        $page_login = $request->get('page_login');
        return view('dashboard.pages.list', compact('data', 'page_login', 'navbar'));
    }
    public function login()
    {
        $page_login = true;
        return view('dashboard.pages.login', compact('page_login'));
    }
    public function memorials(Request $request)
    {
        $data = Memorials::paginate(8);
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
        $data = Account::find($request->id);
        $page_login = $request->get('page_login');

        return view("dashboard.pages.profile", compact('data', 'page_login'));
    }
    public function download(Request $request)
    {
        // $page_login = $request->get('page_login');

        return Storage::download("public/bukti_bayar/{$request->filename}");
    }

    public function deleteAccount(Request $request)
    {
        $data = Account::deleteAccount((int) $request->id);
        return back();
    }
}
