<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function editProfileAdmin(Request $request)
    {
        $request->validate([
            'email'     => 'required',
            'username'  => 'required',
            'image'     => 'image|file|max:1024'
        ]);

        $id = $request->id;
        $data = [
            'email'     => $request->email,
            'username'  => $request->username,
            'updated_at' => now()
        ];
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('img-profile-users');
        }

        DB::table('users')->where('id', $id)->update($data);

        return redirect('dashboard-admin')->with('sukses-profile', 'diupdate.');
    }

    public function editpasswordAdmin(Request $request)
    {
        $id = $request->id;
        $request->validate([
            'password_lama'     => 'required|min:5',
            'password_baru'   => 'required|min:5|same:konfirmasi_password_baru',
            'konfirmasi_password_baru'   => 'required|min:5|same:password_baru'
        ]);

        $pass_lama   = $request->password_lama;
        $pass_baru = $request->password_baru;

        if (!password_verify($pass_lama, auth()->user()->password)) {
            return redirect('dashboard-admin')->with('gagal-password', 'Password lama salah.');
        } else {
            if ($pass_lama == $pass_baru) {
                return redirect('dashboard-admin')->with('gagal-password', 'Password baru tidak boleh sama dengan yang lama.');
            } else {
                $fix_pass = [
                    'password' => Hash::make($request->konfirmasi_password_baru),
                    'updated_at' => now()
                ];

                DB::table('users')->where('id', $id)->update($fix_pass);

                return redirect('dashboard-admin')->with('sukses-password', 'di update.');
            }
        }
    }
}
