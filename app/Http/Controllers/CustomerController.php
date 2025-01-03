<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

use App\Mail\ContactFormMail;
use App\Mail\VerificationMail;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{

    public function signUpPage(){
        return view('frontend.pages.registration');
    }

    public function loginPage(){
        return view('frontend.pages.login');
    }


    protected function customerSignUp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => 'required|regex:/^[0-9]+$/',
            'password' => ['required', 'string', 'min:6'],
        ]);
    
        if ($validator->fails()) {
            $errors = implode('<br>', $validator->errors()->all());
            $response = [
                'success' => false,
                'message' => $errors,
            ];
            return response()->json($response);
        }
    
        $data = $request->all();
        $user = User::where('email', $data['email'])->first();
        
        if ($user && $user->is_guest == '0') {
            $response = [
                'success' => false,
                'message' => 'The email already exists.',
            ];
            return response()->json($response);
        } elseif ($user && $user->is_guest == '1') {
            $user->password = Hash::make($data['password']);
            $user->verification_code = rand(100000, 999999);
            $user->is_verified = false;
            $user->is_guest = '0';
            $user->save();
        } else {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'password' => Hash::make($data['password']),
                'role_id' => 2,
                'is_guest' => '0',
                'is_verified' => false,
                'verification_code' => rand(100000, 999999),
            ]);
        }
    
        $role = Role::where('name', 'Customer')->first();
        $user->assignRole($role);
    
        // Authenticate the user
        Auth::login($user);
    
        // Redirect or return success response
        return redirect()->route('index')->with('success', 'Successfully Registered and Logged In.');
    }
    

    public function customerLogin(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        if ($validator->fails()) {
            $errors = implode('<br>', $validator->errors()->all());
            $response = [
                'success' => false,
                'isVerification' => false,
                'message' => $errors,
            ];
            return response()->json($response);
        }

        $user = User::where('email', $request->email)->first();
        if($user && $user->is_guest == '1'){
            $response = [
                'success' => false,
                'isVerification' => false,
                'message' => 'Invalid credentials',
            ];
            return response()->json($response);
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {  // Authentication passed...
            return redirect()->route('index');
        }
        return redirect()->back();
    }

    public function customerLogout(Request $request){
        Auth::logout();
        return redirect()->route('index');
    }

    public function sendVerificationMail(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($request->type == "veryForForgot") {
            if ($user) {
                $user->verification_code = rand(100000, 999999);
                $user->update();
                Mail::to($user->email)->send(new VerificationMail($user->verification_code));
                $response = [
                    'success' => true,
                    'message' => 'Verification code sended',
                    'type' => 'forgotPassword'
                ];
                return response()->json($response);
            }
            $response = [
                'success' => false,
                'message' => 'Invalid Operation',
            ];
            return response()->json($response);
        } else {
            if ($user) {
                $user->verification_code = rand(100000, 999999);
                $user->update();
                Mail::to($user->email)->send(new VerificationMail($user->verification_code));
                $response = [
                    'success' => true,
                    'message' => 'Verification code sended',
                ];
                return response()->json($response);
            }
            $response = [
                'success' => false,
                'message' => 'Invalid Operation',
            ];
            return response()->json($response);
        }
    }

    public function verifyAccount(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                if ($user->verification_code == $request->code) {
                    $user->is_verified = true;
                    $user->update();
                    $response = [
                        'success' => true,
                        'message' => 'Verified',
                        'user' => $user,
                    ];
                    return response()->json($response);
                } else {
                    Auth::logout();
                    $response = [
                        'success' => false,
                        'message' => 'Verification code is not matched',
                    ];
                    return response()->json($response);
                }
            }
        }
        $response = [
            'success' => false,
            'message' => 'Invalid Operation',
        ];
        return response()->json($response);
    }

    public function verifyAccountForgotPassword(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($user->verification_code == $request->code) {
                $user->is_verified = true;
                $user->update();
                $response = [
                    'success' => true,
                    'message' => 'Verified',
                    'user' => $user,
                ];
                return response()->json($response);
            } else {
                $response = [
                    'success' => false,
                    'message' => 'Verification code is not matched',
                ];
                return response()->json($response);
            }
        }
    }

    public function updateCustomerData(Request $request)
    {
        // Get current authenticated user
        // return $request;
        $user = Auth::user();

        $checkEmailChangeStatus = 0;
        if ($request->email == $user->email) {
            $checkEmailChangeStatus = 0;
        } else {
            $checkEmailChangeStatus = 1;
        }

        $updateStatus = '';
        if ($checkEmailChangeStatus == 0) {
            // Validate request data
            $request->validate([
                'name' => 'required|string',
                'phone' => 'required',
            ]);

            // Update user data
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->update();
            $updateStatus = 'name';
            $response = [
                'success' => true,
            ];
        } else {
            $request->validate([
                'name' => 'required|string',
                'phone' => 'required',
                'email' => 'required|email|unique:users,email,' . $user->id,
            ]);
            $updateStatus = 'email';
            $user->verification_code = rand(100000, 999999);
            $user->update();
            Mail::to($user->email)->send(new VerificationMail($user->verification_code));
            $response = [
                'success' => true,
                'message' => 'Verification code sended',
            ];
        }
        $user = User::where('email', $user->email)->first();
        return response()->json(['message' => 'User updated successfully.', 'user' => $user, 'updateStatus' => $updateStatus, 'response' => $response]);
    }

    public function verifyAndUpdateMail(Request $request)
    {
        $user = Auth::user();
        if ($user) {
            if ($user->verification_code == $request->code) {
                $user->name = $request->name;
                $user->phone = $request->phone;
                $user->address = $request->address;
                $user->email = $request->email;
                $user->update();
                $response = [
                    'success' => true,
                    'message' => 'Verified',
                    'user' => $user,
                ];
                return response()->json($response);
            } else {
                $response = [
                    'success' => false,
                    'message' => 'Verification code is not matched',
                ];
                return response()->json($response);
            }
        }
        $response = [
            'success' => false,
            'message' => 'Invalid Operation',
        ];
        return response()->json($response);
    }

    public function updatePassword(Request $request)
    {
        // Validate the request data
        $request->validate([
            'password' => 'required',
            'newPassword' => 'required|min:6',
            'confirmNewPassword' => 'required|same:newPassword',
        ]);
        $request->password . '-' . $request->newPassword . '-' . $request->confirmNewPassword;
        // Get the currently authenticated user
        $user = Auth::user();

        // Check if the provided current password matches the one stored in the database
        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Current password does not match.'], 401);
        }

        // Update the user's password
        $user->password = Hash::make($request->newPassword);
        $user->save();

        // Return a success response
        return response()->json([
            'success' => true,
            'message' => 'Password update success',
            'user' => $user,
        ]);
    }
    public function changePassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'newPassword' => ['required', 'string', 'min:6'],
            'newConfirmPassword' => 'same:newPassword',
        ]);

        if ($validator->fails()) {
            $errors = implode('<br>', $validator->errors()->all());
            $response = [
                'success' => false,
                'message' => $errors,
            ];
            return response()->json($response);
        }

        $data = $request->all();
        $user = User::where('email', $request->email)->first();
        $user->password =  Hash::make($data['newPassword']);
        $user->update();
        $response = [
            'success' => true,
            'message' => 'Password forgot success',
        ];

        return response()->json($response);
    }


    public function submitContact(Request $request)
    {
        $data = $request->all();
        $rules = [
            'name' => 'required|string|max:255',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string'
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        // Handle the form submission logic (e.g., save to database, send email)
        // For demonstration, we'll just return the validated data
        Mail::to('mdsajibhassan01993@gmail.com')->send(new ContactFormMail($data));
        return response()->json([
            'message' => 'Form submitted successfully!',
            'data' => $request->all()
        ], 200);
    }


    public function dashboard(){
        $user = Auth()->user();
        $orders = Order::where('customer_id',$user->id)->get();
        return view('frontend.pages.dashboard', compact('user','orders'));
    }

    public function customerProfile(){

    }

    
    public function customerSupport(){
        
    }
}
