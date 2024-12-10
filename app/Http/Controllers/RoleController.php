<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleController extends Controller
{
    public function store(Request $request)
    {
        // Log the incoming request data
        \Log::info('Incoming Request:', $request->all());
        
        // Validate the request
        $validated = $request->validate([
            'role' => 'required|in:admin,organizer',
            'admin_username' => 'required_if:role,admin|nullable|unique:users,username',
            'admin_password' => 'required_if:role,admin|nullable|min:6',
            'admin_key' => 'required_if:role,admin|nullable|unique:users,admin_key',
            'organizer_fullname' => 'required_if:role,organizer|nullable|string',
            'organizer_phone' => 'required_if:role,organizer|nullable|numeric',
            'organizer_username' => 'required_if:role,organizer|nullable|unique:users,username',
            'organizer_password' => 'required_if:role,organizer|nullable|min:6',
        ]);
    
        // Prepare data for insertion
        $data = [
            'role' => $validated['role'],
            'username' => $validated['role'] === 'admin' ? $validated['admin_username'] : $validated['organizer_username'],
            'password' => $validated['role'] === 'admin' ? Hash::make($validated['admin_password']) : Hash::make($validated['organizer_password']),  // Hash the password here
            'admin_key' => $validated['role'] === 'admin' ? $validated['admin_key'] : null,
            'fullname' => $validated['role'] === 'organizer' ? $validated['organizer_fullname'] : null,
            'phone_number' => $validated['role'] === 'organizer' ? $validated['organizer_phone'] : null,
        ];
    
        // Attempt to save data
        try {
            User::create($data);
            \Log::info('User saved:', $data); // Log success
            return redirect()->route('login')->with('success', 'User registered successfully!');
        } catch (\Exception $e) {
            \Log::error('Error saving user: ' . $e->getMessage()); // Log any errors
            return redirect()->back()->with('error', 'There was an error saving the user. Please try again.');
        }
    }
}
