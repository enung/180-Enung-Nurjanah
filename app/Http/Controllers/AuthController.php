<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {

       // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Mencari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Jika user tidak ditemukan
        if (!$user) {
            return redirect()->route('homepage')->with('error', 'Email tidak ditemukan.');
        }

        // Mengecek password yang dimasukkan
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->route('homepage')->with('error', 'Password salah.');
        }

        // Loginkan user
        Auth::login($user);

        // Regenerasi session
        $request->session()->regenerate();

        // Redirect ke dashboard
        return redirect()->route('dashboard');

    }
    public function logout()
    {
        Auth::logout();

        return redirect('/homepage');
    }
}
