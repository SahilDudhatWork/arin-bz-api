<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusinessRequest;
use App\Http\Requests\UpdateBusinessRequest;
use App\Models\Business;
use Illuminate\Http\Request;
use App\Services\SmsService;
use Tymon\JWTAuth\Facades\JWTAuth;


class BusinessController extends Controller
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
        $business = Business::where('business_number', $request->phone)->first();
        if (!$business) {
            return $this->responseError('Business number is not registered.', 404);
        }


        $phoneOtp = rand(100000, 999999);
        $phoneOtpExp = now()->addMinutes(10); // Set OTP expiration 10 minutes from now

        $otpMessage = 'Your OTP for Registration is: ' . $phoneOtp . ' This is valid for 10 mins. Do not share it with anyone. - GLOBE TECHNOLOGIES';
        try {
            $toNumber = $request->phone;
            $response = $this->smsService->sendSms($otpMessage, $toNumber);
            if ($response[0]['status'] == "success") {
                $business->update(["phone_otp" => $phoneOtp, "phone_otp_exp" => $phoneOtpExp]);
                return $this->responseSuccess([], 'Confirmation OTP is sent to your registered phone.');
            }
            return $this->responseError('Business number is not registered.', 404);
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

        // Find the business by phone number
        $business = Business::where('business_number', $request->phone)->first();

        if (!$business) {
            return $this->responseError('Business number is not registered.', 404);
        }

        // Check if OTP matches and is not expired
        if (
            $business->phone_otp === $request->otp &&
            now()->lt($business->phone_otp_exp)
        ) {
            // Clear OTP after successful validation for security
            $business->update(['phone_otp' => null, 'phone_otp_exp' => null]);

            // Generate JWT token
            $token = JWTAuth::fromUser($business);

            // Return success response with token
            return $this->responseSuccess([
                'business' => $business,
                'token' => $token,
            ], 'OTP is valid. Login successful.');


            // Return success response
            return $this->responseSuccess(['business' => $business], 'OTP is valid. Login successful.');
        }

        // Handle invalid or expired OTP
        if (now()->gte($business->phone_otp_exp)) {
            return $this->responseError('OTP has expired. Please request a new OTP.', 422);
        }

        return $this->responseError('Invalid OTP. Please try again.', 422);
    }


    public function index()
    {
        try {
            // Return all businesses
            $businesses = Business::with(['category'])->get();
            return $this->responseSuccess(['businesses' => $businesses], 'Businesses fetched successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    public function store(StoreBusinessRequest $request)
    {
        try {
            // Create a new business using validated data

            $business = Business::create($request->validated());

            return $this->responseSuccess(['business' => $business], 'Business created successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    public function show($id)
    {
        try {
            $business = Business::with(['category'])->find($id);

            if (!$business) {
                return $this->responseError('Business not found', 404);
            }

            return $this->responseSuccess(['business' => $business], 'Business fetched successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }
    public function profile(Request $request)
    {
        try {
            $business = auth('business')->user();

            if (!$business) {
                return $this->responseError('Business not found', 404);
            }

            return $this->responseSuccess(['business' => $business], 'Profile fetched successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }
    public function updateProfile(Request $request)
    {
        try {
            $business = auth('business')->user();
            $businessDtl = Business::find($business->id);

            if (!$businessDtl) {
                return $this->responseError('Business not found', 404);
            }

            $businessDtl->update($request->all());
            return $this->responseSuccess(['business' => $businessDtl], 'Business-profile updated successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }


    public function update(UpdateBusinessRequest $request, $id)
    {
        try {
            $business = Business::find($id);

            if (!$business) {
                return $this->responseError('Business not found', 404);
            }
            $validatedData = $request->validated();

            $business->update($validatedData);


            return $this->responseSuccess(['business' => $business], 'Business updated successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }


    public function destroy($id)
    {
        try {
            $business = Business::find($id);

            if (!$business) {
                return $this->responseError('Business not found', 404);
            }

            $business->delete();

            return $this->responseSuccess(['business' => $business], 'Business deleted successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }
}
