@extends('layout.layout')
@section('title','Мой Аккаунт')
@section('content')

    <main class="main__content_wrapper">

        <!-- my account section start -->
        <section class="my__account--section section--padding">
            <div class="container">

                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__left--sidebar">
                        <h3 class="account__content--title mb-20">My Profile</h3>
                        <ul class="account__menu">
                            <li class="account__menu--list"><a href="{{route('my_account')}}">Dashboard</a></li>
                            <li class="account__menu--list active"><a href="{{route('my_settings')}}">Change Profile</a>
                            </li>
                            <li class="account__menu--list"><a href="{{route('my_addresses')}}">Addresses</a></li>
                            <li class="account__menu--list"><a href="{{route('logout')}}">Log Out</a></li>
                        </ul>
                    </div>
                    <div class="account__wrapper">
                        <div class="account__content mb-20">
                            <h3 class="account__content--title mb-20">Credentials</h3>
                            <form action="{{route('edit_process')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-20">
                                    <div class="col-xl-6 mx-auto">
                                        <div id="panel-1" class="panel">
                                            <div class="panel-container">
                                                <div class="panel-content">
                                                    <!-- username -->
                                                    <div class="form-group">
                                                        <label class="form-label" for="simpleinput_name">
                                                            Name</label>
                                                        <input type="text" name="name" id="simpleinput_name"
                                                               class="form-control"
                                                               value="{{$user->name}}">
                                                    </div>

                                                    <!-- age -->
                                                    <div class="form-group">
                                                        <label class="form-label" for="simpleinput_role">
                                                            Age</label>
                                                        <input type="text" name="age" id="simpleinput_role"
                                                               class="form-control"
                                                               value="{{$user->age}}">
                                                    </div>

                                                    <!-- email -->
                                                    <div class="form-group">
                                                        <label class="form-label" for="simpleinput_role">
                                                            Email</label>
                                                        <input type="text" name="email" id="simpleinput_role"
                                                               class="form-control"
                                                               value="{{$user->email}}">
                                                    </div>

                                                    <!-- tel -->
                                                    <div class="form-group">
                                                        <label class="form-label" for="simpleinput_phone">
                                                            Phone</label>
                                                        <input type="text" name="phone" id="simpleinput_phone"
                                                               class="form-control"
                                                               value="{{$user->phone}}">
                                                    </div>

                                                    <!-- address -->
                                                    <div class="form-group">
                                                        <label class="form-label"
                                                               for="simpleinput_address">Country</label>
                                                        <select name="country" id="simpleinput_address"
                                                                class="form-control">
                                                            <option value="Russia">Russia</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="newsletter text-center primary__btn" type="submit">Edit
                                        <svg class="newsletter__subscribe--button__icon"
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="7.159" height="7.85" viewBox="0 0 9.159 7.85">
                                            <path data-name="Icon material-send"
                                                  d="M3,12.35l9.154-3.925L3,4.5,3,7.553l6.542.872L3,9.3Z"
                                                  transform="translate(-3 -4.5)" fill="currentColor"/>
                                        </svg>
                                    </button>
                                </div>


                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- my account section end -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Start Newsletter banner section -->
        <section class="newsletter__banner--section section--padding pt-0">
            <div class="container">
                <div class="newsletter__banner--thumbnail position__relative">
                    <img class="newsletter__banner--thumbnail__img" src="assets/img/banner/banner-bg7.webp"
                         alt="newsletter-banner">
                    <div class="newsletter__content newsletter__subscribe">
                        <h5 class="newsletter__content--subtitle text-white">Want to offer regularly ?</h5>
                        <h2 class="newsletter__content--title text-white h3 mb-25">Subscribe Our Newsletter <br>
                            for Get Daily Update</h2>
                        <form class="newsletter__subscribe--form position__relative" action="#">
                            <label>
                                <input class="newsletter__subscribe--input" placeholder="Enter your email address"
                                       type="email">
                            </label>
                            <button class="newsletter__subscribe--button primary__btn" type="submit">Subscribe
                                <svg class="newsletter__subscribe--button__icon" xmlns="http://www.w3.org/2000/svg"
                                     width="9.159" height="7.85" viewBox="0 0 9.159 7.85">
                                    <path data-name="Icon material-send"
                                          d="M3,12.35l9.154-3.925L3,4.5,3,7.553l6.542.872L3,9.3Z"
                                          transform="translate(-3 -4.5)" fill="currentColor"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Newsletter banner section -->

    </main>
@endsection
