<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Memorials;
use App\Models\Relationship;
use App\Models\Account;
use App\Models\CustomerTransactions;
use App\Models\TransactionImages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Memorials::with('memorialImages')->paginate(8);
        
        $totalMemorials = Memorials::count();
        $totalAccounts = Account::count();
        return view('components.slider', compact('data', 'totalMemorials', 'totalAccounts'));
    }

    public function searching(Request $request)
    {
        $data = new Memorials;
        $totalMemorials = Memorials::count();
        $totalAccounts = Account::count();
        $data = $data->search($request->q)->paginate(8);
        return view('components.slider', compact('data', 'totalMemorials', 'totalAccounts'));
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
        $data = Memorials::with('memorialImages', 'accounts', 'memorialDescription', 'reviews')->find($id);
        $account_id = NULL;
        foreach ($data->accounts as $account) {
            # code..
            $account_id = $account->pivot->accounts_id;
        }
        return view('pages.memorials.details', compact('data', 'account_id'));
    }
    public function pagePlanAndFeatures(Request $request)
    {
        $account_id = $request->get('accounts_id');

        $data = Account::with('customer_transactions')
            ->whereHas('customer_transactions', function ($q) use ($request) {
                $q->where('account_id', '=', $request->get('accounts_id'));
            })->get();        
        return view('pages.PlanAndFeature', compact('data'));
    }
    public function pageFreemium()
    {
        return view('pages.detail_feature');
    }
    public function pageMyAccount(Request $request)
    {

        $dashboard = Memorials::with('relationship', 'category', 'accounts')
            ->whereHas('accounts', function ($q) use ($request) {
                $q->where("accounts_id", "=", $request->get('accounts_id'));
            })->get();
        $transaction = Memorials::with(['accounts.customer_transactions' => function ($query) use ($request) {
            $query->where('account_id', '=', $request->get('accounts_id'));
        }])->first();
        $account = Account::find($request->get('accounts_id'));

        if ($transaction != null) {

            $transaction = count($transaction->accounts) > 0 ? $transaction->accounts->first()->customer_transactions : null;

            if (!is_null($transaction)) {
                $transaction_id = $transaction->pluck('id')->first();
                $image = CustomerTransactions::find($transaction_id);
                return view('pages.myaccount', compact('account', 'dashboard', 'transaction', 'image'));
            }
        }

        return view('pages.myaccount', compact('account', 'dashboard', 'transaction'));
    }
}
