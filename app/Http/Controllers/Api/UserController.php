<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusinessRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateBusinessRequest;
use App\Http\Requests\UpdateBusinessProfileRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Business;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\SmsService;
use Tymon\JWTAuth\Facades\JWTAuth;


class UserController extends Controller
{
    protected $smsService;

    public function __construct(SmsService $smsService)
    {
        $this->smsService = $smsService;
    }
    public function login(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|regex:/^\+?[0-9]{10,15}$/',
        ]);
        $user = User::where('number', $request->phone)->first();
        if (!$user) {
            return $this->responseError('User number is not registered.', 404);
        }


        $phoneOtp = rand(100000, 999999);
        $phoneOtpExp = now()->addMinutes(10); // Set OTP expiration 10 minutes from now

        $otpMessage = 'Your OTP for Registration is: ' . $phoneOtp . ' This is valid for 10 mins. Do not share it with anyone. - GLOBE TECHNOLOGIES';
        try {
            $toNumber = $request->phone;
            $response = $this->smsService->sendSms($otpMessage, $toNumber);
            if ($response[0]['status'] == "success") {
                $user->update(["phone_otp" => $phoneOtp, "phone_otp_exp" => $phoneOtpExp]);
                return $this->responseSuccess([], 'Confirmation OTP is sent to your registered phone.');
            }
            return $this->responseError('Number is not registered.', 404);
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }
    public function checkOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|regex:/^\+?[0-9]{10,15}$/',
            'otp' => 'required|numeric|digits:6',
        ]);

        $user = User::where('number', $request->phone)->first();

        if (!$user) {
            return $this->responseError('Number is not registered.', 404);
        }

        // Check if OTP matches and is not expired
        if (
            $user->phone_otp === $request->otp &&
            now()->lt($user->phone_otp_exp)
        ) {
            // Clear OTP after successful validation for security
            $user->update(['phone_otp' => null, 'phone_otp_exp' => null]);

            // Generate JWT token
            $token = JWTAuth::fromUser($user);

            // Return success response with token
            return $this->responseSuccess([
                'user' => $user,
                'token' => $token,
            ], 'OTP is valid. Login successful.');


            // Return success response
            return $this->responseSuccess(['user' => $user], 'OTP is valid. Login successful.');
        }

        // Handle invalid or expired OTP
        if (now()->gte($user->phone_otp_exp)) {
            return $this->responseError('OTP has expired. Please request a new OTP.', 422);
        }

        return $this->responseError('Invalid OTP. Please try again.', 422);
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|regex:/^\+?[0-9]{10,15}$/',
        ]);
        $user = User::where('number', $request->phone)->first();
        if (!$user) {
            return $this->responseError('Number is not registered.', 404);
        }


        $phoneOtp = rand(100000, 999999);
        $phoneOtpExp = now()->addMinutes(10); // Set OTP expiration 10 minutes from now

        $otpMessage = 'Your OTP for Registration is: ' . $phoneOtp . ' This is valid for 10 mins. Do not share it with anyone. - GLOBE TECHNOLOGIES';
        try {
            $toNumber = $request->phone;
            $response = $this->smsService->sendSms($otpMessage, $toNumber);
            if ($response[0]['status'] == "success") {
                $user->update(["phone_otp" => $phoneOtp, "phone_otp_exp" => $phoneOtpExp]);
                return $this->responseSuccess([], 'Confirmation OTP is sent to your registered phone.');
            }
            return $this->responseError('Number is not registered.', 404);
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }


    public function index() {}

    public function store(StoreUserRequest $request)
    {
        try {
            $user = User::create($request->validated());

            return $this->responseSuccess(['user' => $user], 'User registered successfully.');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    public function show($id) {}
    public function profile(Request $request) {}
    public function update(UpdateUserRequest $request, $id)
    {
        $userDtl = User::find($id);
        if (!$userDtl) {
            return $this->responseError('User not found', 404);
        }
        $validatedData = $request->validated();
        $userDtl->update($validatedData);
        return $this->responseSuccess(['user' => $userDtl], 'User updated successfully');
    }




    public function destroy($id) {}
}
