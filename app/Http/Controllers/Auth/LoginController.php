<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use App\Models\RingOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\UserRelationshipController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $currentUser = User::find($user->id);
            Log::info('User already logged in', ['user_id' => $user->id]);

            if ($currentUser->hasRole('admin')) {
                Log::info('Redirecting to admin dashboard', ['user_id' => $user->id]);
                return redirect()->route('admin.dashboard')->with('success', "Login successfully!");
            } else if ($currentUser->hasRole('instructor')) {
                Log::info('Redirecting to instructor dashboard', ['user_id' => $user->id]);
                return redirect()->route('instructor.dashboard')->with('success', "Login successfully!");
            } else if ($currentUser->hasRole('student')) {
                Log::info('Redirecting to student (admin) dashboard', ['user_id' => $user->id]);
                return redirect()->route('admin.dashboard')->with('success', "Login successfully!");
            } else {
                Log::info('Redirecting to frontend home', ['user_id' => $user->id]);
                return redirect()->route('frontend.home')->with('success', "Login successfully!");
            }

        } else {
            Log::info('User not authenticated, showing login view');
            return view('auth.login');
        }
    }

    public function loginAttempt(Request $request)
    {
        Log::info('Login attempt received', ['input' => $request->only('email_username')]);

        // Validate the form
        $rules = [
            'email_username' => 'required|max:255',
            'password' => 'required',
        ];

        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            Log::warning('Login validation failed', ['errors' => $validate->errors()]);
            
            // Check if it's an API request
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation Error!',
                    'errors' => $validate->errors()
                ], 422);
            }
            
            return Redirect::back()
                ->withErrors($validate)
                ->withInput($request->all())
                ->with('error', 'Validation Error!');
        }

        try {
            // Determine whether the input is email or username
            $userfind = null;
            $input = $request->email_username;

            if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
                $userfind = User::where('email', $input)->first();
                Log::info('Attempting login with email', ['email' => $input]);
            } else {
                $userfind = User::where('username', $input)->first();
                Log::info('Attempting login with username', ['username' => $input]);
            }

            if ($userfind) {
                Log::info('User found', ['user_id' => $userfind->id]);

                if (Hash::check($request->password, $userfind->password)) {
                    Log::info('Password matched for user', ['user_id' => $userfind->id]);

                    $remember_me = $request->remember ? true : false;

                    if (Auth::attempt(['email' => $userfind->email, 'password' => $request->password], $remember_me)) {
                        Log::info('User authenticated successfully', ['user_id' => $userfind->id]);

                        // Check if it's an API request
                    if ($request->expectsJson()) {
    $token = $userfind->createToken('auth_token')->plainTextToken;

     $hasRingOrders = RingOrder::where('user_id', $userfind->id)->exists();
    $ringOrderStatus = $hasRingOrders ? 1 : 0;

        $isConnectedWithOwner = UserRelationshipController::checkIfConnectedWithOwner($userfind->id);
    $ownerConnectionStatus = $isConnectedWithOwner ? 1 : 0;

$isSubscriptionActive = 0;
if ($userfind->trial_started && $userfind->trial_days) {
    $trialEndsAt = \Carbon\Carbon::parse($userfind->trial_started)->addDays($userfind->trial_days);
    if (now()->lessThanOrEqualTo($trialEndsAt)) {
        $isSubscriptionActive = 1; // still valid
    }
}

    return response()->json([
        'success' => true,
        'message' => 'Login successfully!',
        'token' => $token,
        'token_type' => 'Bearer',
        'user' => [
            'id' => $userfind->id,
            'name' => $userfind->name,
            'email' => $userfind->email,
            'username' => $userfind->username,
            'connection_code' => $userfind->connection_code,
            'dob' => $userfind->dob,
            'country' => $userfind->country,
            'is_first' => $userfind->is_first,
            'profile_picture' => $userfind->profile_picture,
            'roles' => $userfind->getRoleNames()
        ],
        'prerequisite' => [
        'is_owner' => $ringOrderStatus,
        'is_subscription' => $isSubscriptionActive,
        'is_connected_with_owner' => $ownerConnectionStatus,
        'subscription_end' => isset($trialEndsAt) ? $trialEndsAt->toDateTimeString() : null
        ]
    ], 200);
}


                        if ($userfind->hasRole('admin')) {
                            Log::info('Redirecting to admin dashboard', ['user_id' => $userfind->id]);
                            return redirect()->route('admin.dashboard')->with('success', "Login successfully!");
                        } else if ($userfind->hasRole('customer')) {
                            Log::info('Redirecting to customer home', ['user_id' => $userfind->id]);
                            return redirect()->route('home')->with('success', "Login successfully!");
                        } else {
                            Log::info('Redirecting to default home', ['user_id' => $userfind->id]);
                            return redirect()->route('frontend.home')->with('success', "Login successfully!");
                        }

                    } else {
                        Log::error('Auth::attempt failed despite password match', ['user_id' => $userfind->id]);
                        
                        // Check if it's an API request
                        if ($request->expectsJson()) {
                            return response()->json([
                                'success' => false,
                                'message' => 'Authentication Error'
                            ], 401);
                        }
                        
                        return redirect()->back()->withInput($request->all())->with('error', 'Authentication Error');
                    }
                } else {
                    Log::warning('Password mismatch', ['user_id' => $userfind->id]);
                    
                    // Check if it's an API request
                    if ($request->expectsJson()) {
                        return response()->json([
                            'success' => false,
                            'message' => 'Password is mismatch'
                        ], 401);
                    }
                    
                    return redirect()->back()->withInput($request->all())->with('error', 'Password is mismatch');
                }
            } else {
                Log::warning('No user found with provided credentials', ['input' => $input]);
                
                // Check if it's an API request
                if ($request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Invalid credentials'
                    ], 401);
                }
                
                return redirect()->back()->withInput($request->all())->with('error', "Invalid credentials");
            }
        } catch (\Throwable $th) {
            Log::error("Login failed due to exception", [
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
            
            // Check if it's an API request
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong! Please try again later',
                    'error' => $th->getMessage()
                ], 500);
            }
            
            return redirect()->back()->withInput($request->all())->with('error', "Something went wrong! Please try again later");
        }
    }

public function check(Request $request)
    {
        $user = $request->user();

        // Check if user has ring orders
        $hasRingOrders = RingOrder::where('user_id', $user->id)->exists();
        $ringOrderStatus = $hasRingOrders ? 1 : 0;

        // Check if user is connected with another owner
        $isConnectedWithOwner = UserRelationshipController::checkIfConnectedWithOwner($user->id);
        $ownerConnectionStatus = $isConnectedWithOwner ? 1 : 0;

        // Check subscription
        $isSubscriptionActive = 0;
        $trialEndsAt = null;

        if ($user->trial_started && $user->trial_days) {
            $trialEndsAt = Carbon::parse($user->trial_started)->addDays($user->trial_days);
            if (now()->lessThanOrEqualTo($trialEndsAt)) {
                $isSubscriptionActive = 1; // Active subscription
            }
        }

        return response()->json([
            'success' => true,
            'prerequisite' => [
                'is_owner' => $ringOrderStatus,
                'is_subscription' => $isSubscriptionActive,
                'is_connected_with_owner' => $ownerConnectionStatus,
                'subscription_end' => $trialEndsAt ? $trialEndsAt->toDateTimeString() : null
            ]
        ], 200);
    }


}
