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
}
