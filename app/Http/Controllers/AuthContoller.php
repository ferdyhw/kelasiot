<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthContoller extends Controller
{
    public function indexSignup()
    {
        $data = [
            'title' => 'KelasIOT | SignUp'
        ];

        return view('auth.signup', $data);
    }

    public function signup(Request $request)
    {
        $request->validate([
            'username'  => 'required',
            'email'     => 'required|email:dns',
            'password' => 'min:5|required|same:password_confirm',
            'password_confirm' => 'min:5|required|same:password'
        ]);

        $password = Hash::make($request->password_confirm);

        $rand  = rand(1, 4);
        if ($rand == 1) {
            $member_pic = 'img-profile-users/member-pic-1.jpg';
        } else if ($rand == 2) {
            $member_pic = 'img-profile-users/member-pic-2.jpg';
        } else if ($rand == 3) {
            $member_pic = 'img-profile-users/member-pic-3.jpg';
        } else if ($rand == 4) {
            $member_pic = 'img-profile-users/member-pic-4.jpg';
        }

        $data = [
            'role_id'   => 3,
            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => $password,
            'image'     => $member_pic,
            'status'    => 'true',
            'created_at' => now()
        ];
        // dd($data);

        DB::table('users')->insert($data);

        return redirect('/login')->with('status', 'Akun berhasil dibuat, silahkan Login.');
    }

    public function indexLogin()
    {
        // if (auth()->user() != null) {
        //     return redirect('/welcome');
        // } else {
        $data = [
            'title' => 'KelasIOT | Login'
        ];

        return view('auth.login', $data);
        // }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'     => 'required|email:dns',
            'password'  => 'required'
        ]);

        $email     = $request->email;
        $password  = $request->password;
        $user      = User::where('email', $email)->first();
        // dd($user->email);

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            if ($user->role_id <= 3 and $user->status == 'true') {
                $request->session()->regenerate();
                return redirect()->intended('welcome');
            } else {
                return back()->with('loginError', 'Akun tidak aktif!');
            }
        }
        return back()->with('loginError', 'Email / Password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('sukses', ' ');
    }
}
