{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <div>
                <x-label for="role" :value="__('Role')" />
                <select name="role" class="block mt-1 w-full" id="role">
                    <option selected disabled value="">Select</option>
                    <option value="0">Seller</option>
                    <option value="1">Buyer</option>

                </select>
                <x-input id="" class="block mt-1 w-full" type="text" name="role" :value="old('role')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}



@extends('layouts.app2')
@section('content')

{{-- <section class="dorne-welcome-area bg-img bg-overlay"
style="background-image:url(assets/img/bg-img/xhero-1.jpg.pagespeed.ic.hwB2Ntcwl-.jpg)">
<div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <div class="contact-form-area equal-height login-form-area">
                    <div class="contact-form ">
                          <div class="contact-form-title">
                                <h6>Join Freelanweb</h6>
                          </div>
                          <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                          <form method="POST" action="{{ route('register') }}">
                            @csrf
                                <div class="row">
                                    <div class="col-12 ">
                                        <select name="role" class="select" required id="role">
                                            <option class="option" selected disabled value="">--Select--</option>
                                            <option class="option" value="0">Seller</option>
                                            <option class="option" value="1">Buyer</option>

                                        </select>

                                    </div>
                                      <div class="col-12">
                                            <input type="email" name="email" class="form-control"
                                                  placeholder="Email Address" required>
                                      </div>
                                      <div class="col-12">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                     </div>

                                      <div class="col-12">
                                        <input type="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                                     </div>

                                      <div class="col-12">
                                            <button type="submit" class="btn dorne-btn btn-block">Register</button>
                                      </div>
                                      <div class="col-12">
                                        <p class="message"> Registered? <a href="{{ route('login') }}">Login account</a></p>
                                      </div>
                                </div>
                          </form>
                    </div>
              </div>
            </div>
      </div>
</div>

</section> --}}


{{-- <div class="breadcumb-area bg-img bg-overlay"
style="background-image:url(assets/img/bg-img/xhero-1.jpg.pagespeed.ic.hwB2Ntcwl-.jpg)">
</div> --}}

<div class="dorne-contact-area d-md-flex  bg-img bg-overlay"  id="contact"
style="background-image:url(assets/img/bg-img/visa/german.jpg)">

    <div class="dorne-map-area equal-height">
        {{-- <img src="{{ asset('assets/img/bg-img/visa/german.jpg') }}" alt=""> --}}
   </div>

<div class="contact-form-area equal-height ">
    <div class="contact-form regi-form">
          <div class="contact-form-title">
                <h6>Join Freelanweb</h6>
          </div>
          <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

          <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-12 ">
                        <select name="role" class="select" required id="role">
                            <option class="option" selected disabled value=""> --Please Select Type</option>
                            <option class="option" value="0">Seller</option>
                            <option class="option" value="1">Buyer</option>

                        </select>

                    </div>
                      <div class="col-6">
                            <input type="text" name="name" class="form-control"
                                  placeholder="Enter Name" required>
                      </div>
                      <div class="col-6">
                          <input type="email" name="email" class="form-control"
                                placeholder="Email Address" required>
                      </div>
                    <div class="col-6">
                        <input type="text" name="address" class="form-control"
                              placeholder="Enter Address" required>
                    </div>
                    <div class="col-6">
                        <input type="number" name="phone" class="form-control"
                              placeholder="Enter phone number" required>
                    </div>
                      <div class="col-6">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                     </div>

                      <div class="col-6">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                     </div>
                     <div class="col-12">
                         <input type="file" name="image" class="form-control"
                                required>
                     </div>

                      <div class="col-12">
                            <button type="submit" class="btn dorne-btn btn-block">Register</button>
                      </div>
                      <div class="col-12">
                        <p class="message"> Registered? <a href="{{ route('login') }}">Login account</a></p>
                      </div>
                </div>
          </form>
    </div>
</div>
</div>
@endsection

