<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showHomeForm()
    {
        return view('index');
    }



    public function showSofasForm()
    {
        return view('shop.products');
    }
    public function showProductsForm()
    {
        return view('shop.products');
    }

    public function showAboutUsForm()
    {
        return view('about');
    }


}
