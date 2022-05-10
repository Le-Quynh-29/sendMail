<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function activeAccount(User $user, $token)
    {
        if ($user->token == $token) {
            $user->update(['status' => 1]);
        }
        return view('success');
    }

    public function createPassword()
    {
        return view('create_password');
    }

    public function storePassword(Request $request)
    {

    }

    public function forgetPassword()
    {
        return view('forget_password');
    }

    public function sendMail(Request $request)
    {

    }
}
