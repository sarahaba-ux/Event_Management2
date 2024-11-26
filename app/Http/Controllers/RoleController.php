<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    // Handle Organizer Login
    public function organizerLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Fixed Organizer password check
        if ($password === 'organizer123') {
            // Redirect to the homepage with the username
            return redirect()->route('homepage')->with('username', $username);
        } else {
            // Redirect to error page if credentials are incorrect
            return redirect()->route('error.page');
        }
    }

    // Handle Admin Login
    public function adminLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Fixed Admin password check
        if ($password === 'admin') {            
            return view('admindashboard', ['username' => $username]);  // Pass username to view on success
        } else {
            // Redirect to error page if credentials are incorrect
            return redirect()->route('error.page');
        }
    }
}