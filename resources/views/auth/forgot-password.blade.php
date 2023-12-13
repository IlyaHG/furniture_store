@extends('layout.auth-layout')
@section('title','Reset Password')
@section('content')


<div class="container text-center">
    <form action="{{route('password.email')}}" method="POST">
        @csrf
        <div class="login__section--inner">
                <div class="col-md-4 mb-10">
                    <div class="account__login">
                        <div class="account__login--header mb-25">
                            <h3 class="account__login--header__title mb-10">Enter your email</h3>
                        </div>


                        <div class="account__login--inner">
                            <label>
                                <input class="account__login--input"
                                       name="email"
                                       placeholder="Email Address">
                            </label>
                            <button class="account__login--btn primary__btn" type="submit">Send</button>
                        </div>
                    </div>
                </div>

        </div>
    </form>
</div>
@endsection
