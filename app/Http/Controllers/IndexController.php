<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showHomeForm()
    {
        return view('index');
    }
    public function showMyAccountForm($id)
    {
        return view('user.my-account');
    }
}
