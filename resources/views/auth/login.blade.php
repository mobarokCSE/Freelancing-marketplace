{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}



@extends('layouts.app2')
@section('content')

<section class="dorne-welcome-area bg-img bg-overlay"
style="background-image:url(assets/img/bg-img/visa/japan.jpg)">
<div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <div class="contact-form-area equal-height login-form-area">
                    <div class="contact-form ">
                          <div class="contact-form-title">
                                <h6>Contact Business</h6>
                          </div>
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                          <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="row">

                                      <div class="col-12">
                                            <input type="email" name="email" class="form-control"
                                                  placeholder="Email Address">
                                      </div>
                                      <div class="col-12">
                                        <input type="password" name="password" class="form-control" placeholder="password">
                                     </div>
                                     <div class="col-12">
                                        <div class="remembar-pass">
                                            <div class="rem">
                                                <label for="remember_me" class="inline-flex items-center">
                                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                </label>
                                            </div>

                                            <div class="flex items-center justify-end mt-4">
                                                {{-- @if (Route::has('password.request')) --}}
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="">
                                                        {{ __('Forgot password?') }}
                                                    </a>
                                                {{-- @endif --}}
                                            </div>
                                        </div>
                                     </div>
                                      <div class="col-12">
                                            <button type="submit" class="btn dorne-btn btn-block">Login</button>
                                      </div>
                                      <div class="col-12">
                                        <p class="message">Not registered? <a href="{{ route('register') }}">Create an account</a></p>
                                      </div>
                                </div>
                          </form>
                    </div>
              </div>
            </div>
      </div>
</div>

</section>


{{-- <div class="breadcumb-area bg-img bg-overlay"
style="background-image:url(assets/img/bg-img/xhero-1.jpg.pagespeed.ic.hwB2Ntcwl-.jpg)">
</div>

<div class="dorne-contact-area d-md-flex" id="contact">

    <div class="dorne-map-area equal-height">
        <div id="googleMap"></div>
   </div>

    <div class="contact-form-area equal-height">
          <div class="contact-form">
                <div class="contact-form-title">
                      <h6>Contact Business</h6>
                </div>
                <form action="#">
                      <div class="row">
                            <div class="col-12 col-md-6">
                                  <input type="text" name="name" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-12 col-md-6">
                                  <input type="email" name="email" class="form-control"
                                        placeholder="Email Address">
                            </div>
                            <div class="col-12">
                                  <input type="text" name="subject" class="form-control" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                  <textarea name="message" class="form-control" id="Message" cols="30" rows="10"
                                        placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-12">
                                  <button type="submit" class="btn dorne-btn">Send</button>
                            </div>
                      </div>
                </form>
          </div>
    </div>


</div> --}}
@endsection
