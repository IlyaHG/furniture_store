<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordFormRequest;
use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\ResetPasswordFormRequest;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

    public function showAuthForm()
    {
        return view('auth.login');
    }

    public function login($data)
    {
        if (auth('web')->attempt($data)) {
            $user = User::where('email', $data['email'])->first();
            return  redirect(route('my_settings'));
        }

        return redirect(route('login'))->withErrors(
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

    public function logout(): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        auth('web')->logout();
        return redirect(route('home'));
    }

    public function forgot(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('auth.forgot-password');
    }

    public function forgotPassword(ForgotPasswordFormRequest $request): RedirectResponse
    {
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['message' => __($status)])
            : back()->withErrors(['message' => __($status)]);
    }

    public function reset(string $token): Factory|View|Application
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function resetPassword(ResetPasswordFormRequest $request): RedirectResponse
    {

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => bcrypt($password)
                ])->setRememberToken(str()->random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('message', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }

    public function github(): \Symfony\Component\HttpFoundation\RedirectResponse|RedirectResponse
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubCallback(): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $githubUser = Socialite::driver('github')->stateless()->user();


        $user = User::query()->updateOrCreate([
            'github_id' => $githubUser->id,
        ], [
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'password'=>bcrypt(str()->random(20)),
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
        ]);

        auth()->login($user);

        return redirect()
            ->intended(route('home'));
    }
}
