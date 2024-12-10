<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'role' => 'required|in:admin,organizer',
        ]);

        if ($request->role === 'admin') {
            $request->validate([
                'admin_username' => 'required',
                'admin_key' => 'required',
                'admin_password' => 'required',
            ]);

            $admin = User::where('username', $request->admin_username)
                         ->where('role', 'admin')
                         ->where('admin_key', $request->admin_key)
                         ->first();

            if ($admin && Hash::check($request->admin_password, $admin->password)) {
                Auth::login($admin);
                return redirect()->route('admindashboard');
            }
        } elseif ($request->role === 'organizer') {
            $request->validate([
                'organizer_username' => 'required',
                'organizer_password' => 'required',
            ]);

            $organizer = User::where('username', $request->organizer_username)
                             ->where('role', 'organizer')
                             ->first();

            if ($organizer && Hash::check($request->organizer_password, $organizer->password)) {
                Auth::login($organizer);
                return redirect('home'); // Redirect to homepage
            }
        }

        return back()->withErrors(['error' => 'Invalid credentials or role.']);
    }
}
