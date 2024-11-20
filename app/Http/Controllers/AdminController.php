<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['loginError' => 'Username atau password salah']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:admins,username',
            'password' => 'required|min:6',
        ], [
            'username.unique' => 'Username sudah digunakan',
        ]);

        $admin = new Admin();
        $admin->username = $request->username;
        $admin->password = bcrypt($request->password);
        $admin->save();

        return redirect()->route('listadmin')->with('success', 'Akun admin berhasil dibuat.');
    }

    public function list()
    {
        $admins = Admin::all();
        return view('adminpanel.listadmin', compact('admins'));
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('listadmin')->with('success', 'Data berhasil dihapus.');
    }
}
