<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusinessRequest;
use App\Http\Requests\UpdateBusinessRequest;
use App\Http\Requests\UpdateBusinessProfileRequest;
use App\Models\Business;
use Illuminate\Http\Request;
use App\Services\SmsService;
use Illuminate\Support\Facades\Storage;
use Tymon\JWTAuth\Facades\JWTAuth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;




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
    public function sendOtp(Request $request)
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
    public function updateProfile(UpdateBusinessProfileRequest $request)
    {
        try {
            $business = auth('business')->user();
            $businessDtl = Business::find($business->id);

            if (!$businessDtl) {
                return $this->responseError('Business not found', 404);
            }
            $validatedData = $request->validated();

            $businessDtl->update($validatedData);
            return $this->responseSuccess(['business' => $businessDtl], 'Business-profile updated successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    public function updateProfilePic(Request $request)
    {
        try {
            $business = auth('business')->user();
            $businessDtl = Business::find($business->id);
            if (!$businessDtl) {
                return $this->responseError('Business not found', 404);
            }
            $request->validate([
                'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Single image
            ]);

            // Delete existing images from the storage
            if (isset($businessDtl->profile_image) && !empty($businessDtl->profile_image)) {
                Storage::disk('public')->delete($businessDtl->profile_image); // Delete file from storage
            }

            if ($request->hasFile('profile_image')) {
                $profileImage = $request->file('profile_image')->store('business_images', 'public');
                $businessDtl->update(['profile_image' => $profileImage]);
            }

            return $this->responseSuccess(['business' => $businessDtl], 'Profile-image uploaded successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    public function removeProfilePic(Request $request)
    {
        try {
            $business = auth('business')->user();
            $businessDtl = Business::find($business->id);
            if (!$businessDtl) {
                return $this->responseError('Business not found', 404);
            }

            // Delete existing images from the storage
            if (isset($businessDtl->profile_image) && !empty($businessDtl->profile_image)) {
                Storage::disk('public')->delete($businessDtl->profile_image); // Delete file from storage
            }
            $businessDtl->update(['profile_image' => null]);

            return $this->responseSuccess(['business' => $businessDtl], 'Profile-image removed successfully');
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

    public function generateQrCode(Request $request)
    {

        $apiUrl = 'https://api.qrcode-monkey.com/qr/custom';
        $payload = [
            'data' => 'https://business.arin.bz',
            'config' => [
                'body' => 'circle-zebra-vertical',
                'eye' => 'frame14',
                'eyeBall' => 'ball16',
                'erf1' => [],
                'erf2' => ['fh'],
                'erf3' => ['fv'],
                'brf1' => [],
                'brf2' => ['fh'],
                'brf3' => ['fv'],
                'bodyColor' => '#1E90FF',
                'bgColor' => '#FFFFFF',
                'eye1Color' => '#464de7',
                'eye2Color' => '#464de7',
                'eye3Color' => '#464de7',
                'eyeBall1Color' => '#1978d5',
                'eyeBall2Color' => '#1978d5',
                'eyeBall3Color' => '#1978d5',
                'gradientColor1' => '#1E90FF',
                'gradientColor2' => '#464de7',
                'gradientType' => 'radial',
                'gradientOnEyes' => false,
                'logo' => 'https://api.sahildudhat.com/storage/business_images/arin_vatical_with_border.png',
                'logoMode' => 'clean',
            ],

            'size' => 300,
            'download' => false,
            'file' => 'svg',
        ];

        try {
            $response = Http::post($apiUrl, $payload);
            return response($response->body(), 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
