<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function checkLogin(Request $request) {
        
        try {
            $account = Account::query()
            ->where('email', $request->email)
            ->where('password', $request->password)
            ->firstOrFail(); 
            session()->put('email',$account->email);
            session()->put('name',$account->name);
            session()->put('id', $account->id);

            return redirect()->route('HomeIndex');
        }catch(\Throwable $e){
            return redirect()->route('login_checkout')->with('error', 'Email hoặc password sai');
        }
    }
    public function logout() {
        session()->flush();

        return redirect()->route('HomeIndex');
    }
}
