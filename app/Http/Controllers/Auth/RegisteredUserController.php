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
    public function store(User $user, Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'height' => ['required'],
            'store_height' => ['nullable'],
            'store_weight' => ['nullable'],
            'sex' => ['required'],
            'birthday' => ['required'],
            'image' => ['nullable']
        ]);

        // $画像選択は何も選択していない場合NULLになる。
        // プロパティから削除することで、MySQL側で設定したデフォルト値を設定できるようにする。
        $register_request
            = $request->all();

        if (is_null($register_request['image'])) {
            unset($register_request['image']);
        }

        $user->fill(array_merge(
            $register_request,
            ['password' => Hash::make($request->password)]
        ))->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
