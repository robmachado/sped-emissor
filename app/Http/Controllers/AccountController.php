<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::select(
            'id',
            'razao_social',
            'documento',
            'documento_tipo'
        )->orderBy('razao_social')->paginate(20);

        return view('accounts.index', compact('accounts'));
    }

    public function edit($id)
    {
        $account = Account::find($id);
        return view('accounts.edit', compact('account'));
    }

    public function update(Request $r)
    {
        dd($r);
    }

    public function destroy($id)
    {
        Account::destroy($id);
        return redirect()->action('AccountController@index');
    }
}
