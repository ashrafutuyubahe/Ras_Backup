<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getAuth()
    {
        return view('Auth.login');
    }




    

    // public function authenticate(Request $request)
    // {
    //     $validated = $request->validate([
    //         'position' => 'required|string',
    //         'class' => 'sometimes|string', // 'class' may not apply for certain roles
    //         'lesson' => 'sometimes|string', // 'lesson' may not apply for certain roles
    //         'email' => 'required|email',
    //         'password' => 'required|string',
    //     ]);

    //     // Attempt authentication
    //     if (Auth::attempt($request->only('email', 'password'))) {
    //         $user = Auth::user();

    //         // Redirect based on the position
    //         switch ($request->position) {
    //             case 'Headteacher':
    //                 return redirect()->route('headteacher.dashboard'); // Replace with the headteacher's route
    //             case 'Teacher':
    //                 return redirect()->route('teacher.dashboard'); // Replace with the teacher's route
    //             case 'Class Monitor':
    //                 return redirect()->route('monitor.dashboard'); // Replace with the monitor's route
    //             case 'Patron':
    //                 return redirect()->route('patron.dashboard'); // Replace with the patron's route
    //             default:
    //                 return redirect()->route('home'); // Fallback route
    //         }
    //     }

    //     // If authentication fails, redirect back with an error
    //     return redirect()->back()->withErrors([
    //         'email' => 'Invalid credentials or user role.',
    //     ]);
    // }



}
