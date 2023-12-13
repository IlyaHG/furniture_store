@extends('layout.auth-layout')
@section('title','Reset Password')
@section('content')

@dump($errors)


<div class="container text-center">
    <form action="{{route('password.update')}}" method="POST">
        @csrf
        <div class="login__section--inner">
                <div class="col-md-4 mb-10">
                    <div class="account__login">
                        <div class="account__login--header mb-25">
                            <h3 class="account__login--header__title mb-10">Enter your new information</h3>
                        </div>
                        <div class="account__login--inner">
                            <label>
                                <input class="account__login--input"
                                       name="email"
                                       value="{{request('email')}}"
                                       placeholder="Email Address">
                            </label>
                            <input type="hidden" name="token" value="{{ $token }}">

                        </div>
                        <div class="account__password--inner">
                            <label>
                                <input class="account__login--input"
                                       name="password"
                                       placeholder="New Password"
                                       type="password">
                            </label>
                        </div>
                        <div class="account__login--inner">
                            <label>
                                <input class="account__login--input"
                                       name="password_confirmation"
                                       placeholder="Repeat Password"
                                       type="password">
                            </label>
                            <button class="account__login--btn primary__btn" type="submit">Send</button>
                        </div>
                    </div>
                </div>

        </div>
    </form>
</div>
@endsection
