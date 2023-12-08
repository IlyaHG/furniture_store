<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function showAuthForm()
    {
        return view('user.login');
    }

    public function login($data)
    {
        if (auth('web')->attempt($data)) {
            $user = User::where('email', $data['email'])->first();
            return  redirect(route('my-settings'));
        }

        return redirect(route('showAuthForm'))->withErrors(
            ["fail" => "Пользователь не найден, либо данные введены неправильно"]
        );
    }

    public function register($data)
    {
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'date_of_birth' => '01.01.2000',
            'phone' => '8-800-555-35-35',
            'age' => 0,
            'country' => "Страна",
            'sur_name' => "Ваша фамилия",
            'gender' =>'Ваш пол'
        ]);

        return $this->login($data);
    }

    public function loginOrRegister(Request $request)
    {
        if (is_null($request->input('password_confirmation'))) {
            $dataLogin = [
                'email' => $request->login_email,
                'password' => $request->login_password
            ];
            return $this->login($dataLogin);
        } else {
            $dataRegister = [
                'name' => $request->register_username,
                'email' => $request->register_email,
                'password' => $request->register_password,
            ];
            return $this->register($dataRegister);
        }
    }

    public function logout()
    {
        auth('web')->logout();
        return redirect(route('home'));
    }
}
