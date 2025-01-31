<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthControllerLogic extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'userEmail' => 'required|string|email|unique:users',
            'userPassword' => 'required|string|min:6',
            'userPosition' => 'required|in:CLASS_MONITOR,HEAD_TEACHER,TEACHER,PATRON',
            'classe' => 'nullable|string',
            'lesson' => 'nullable|string',
        ]);
        
        $nameFromEmail = explode('@', $request->userEmail)[0];
        
        $user = User::create([
            'userName' => $nameFromEmail,
            'userEmail' => $request->userEmail,
            'password' => Hash::make($request->userPassword),
            'userPosition' => $request->userPosition,
            'classe' => $request->classe,
            'lesson' => $request->lesson,
        ]);

        try {
            
            $token = JWTAuth::fromUser($user);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not create token'], 500);
        }

        return response()->json([
            'message' => 'User registered successfully',
            'token' => $token,
            'userName' => $nameFromEmail
        ], 201);
    }

    public function login(Request $request)
    {
        Log::info('login request received');

        $request->validate([
            'userEmail' => 'required|string|email',
            'userPassword' => 'required|string',
        ]);
        
        $user = User::where('userEmail', $request->userEmail)->first();
        
        if (!$user || !Hash::check($request->userPassword, $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
        
        if (in_array($user->userPosition, ['CLASS_MONITOR', 'TEACHER'])) {
            $request->validate([
                'classe' => 'required|string',
                'lesson' => 'required|string',
            ]);
        }

        try {
            
            $token = JWTAuth::fromUser($user);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not create token'], 500);
        }

        return response()->json([
            'message' => 'Login successful',
            'token' => $token,
            'userName' => $user->userName,
            'userEmail' => $user->userEmail,
            'userPosition' => $user->userPosition,
            'classe' => $user->userPosition === 'CLASS_MONITOR' || $user->userPosition === 'TEACHER' ? $user->classe : null,
            'lesson' => $user->userPosition === 'CLASS_MONITOR' || $user->userPosition === 'TEACHER' ? $user->lesson : null,
        ], 200);
    }

    public function logout(Request $request)
    {
        try {
            JWTAuth::invalidate(JWTAuth::getToken());
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not invalidate token'], 500);
        }

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
