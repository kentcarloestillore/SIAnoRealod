<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function index(Request $request){
        $accounts = Account::orderBy('id','desc');

        if ($request->filter) {
            $filter = $request->filter;
            $accounts->where(function ($query) use ($filter) {
                $query->where('student_id', '=', $filter);
            });
        }
        $accounts->with('student')->get();

        return view('account_templates.accountsList', ['accounts' => $accounts]);

    }
}
