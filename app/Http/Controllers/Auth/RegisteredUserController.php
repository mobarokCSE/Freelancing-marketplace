<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'address' => ['required', 'string', 'max:255'],
            'role' => ['required'],
            'image' => ['file','mimes:jpeg,png,jpg,gif,svg', 'max:3072'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($request->HasFile('image')){
            $image = $request->file('image');
            $img_full_name = time().'.'.$image->getClientOriginalExtension();
            $img_path = 'media/profile/';
            $img_name = $img_path.$img_full_name;
            $image->move($img_path,$img_full_name);


        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'role' => $request->role,
            'email' => $request->email,
            'image' => $img_name,
            'password' => Hash::make($request->password),
        ]);
    }


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
