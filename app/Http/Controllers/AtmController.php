<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BankAccount;

class AtmController extends Controller
{
    public function createToken()
    {
        return csrf_field();
    }

    // 新規口座を開設する
    public function accountOpen()
    {
        $account = new BankAccount();
        $account->deposit_balance = 0;
        $account->save();
  
        return $account;
    }

    // 残高照会機能
    public function balanceReference($accountId)
    {
        $account = BankAccount::find($accountId);
  
        return response()->json(['deposit_balance' => $account->deposit_balance]);
    }
}
