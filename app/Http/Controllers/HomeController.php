<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Memorials;
use App\Models\Relationship;
use App\Models\Account;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Memorials::with('memorialImages')->paginate();
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

        $data = Account::with(['customer_transactions' => function ($q) use ($account_id) {
            $q->where('account_id', '=', $account_id);
        }])->get();
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
        return view('pages.myaccount', compact('dashboard'));
    }
}
