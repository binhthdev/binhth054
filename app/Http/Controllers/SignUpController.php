<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignUpController extends Controller
{
   
    public function store(Request $request)
    {
        $params = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phoneNumber' => $request->phoneNumber
        ];
        DB::table('account')->insert($params);
        return redirect()->route('login_checkout');
    }

    
}
