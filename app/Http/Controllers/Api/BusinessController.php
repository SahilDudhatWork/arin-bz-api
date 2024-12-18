<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusinessRequest;
use App\Http\Requests\UpdateBusinessRequest;
use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        // Return all businesses
        $businesses = Business::with(['category'])->get();
        return $this->responseSuccess(['businesses' => $businesses]);
    }

    public function store(StoreBusinessRequest $request)
    {
        try {
            // Create a new business using validated data

            $business = Business::create($request->validated());

            return $this->responseSuccess(['business' => $business]);
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    public function show($id)
    {
        $business = Business::with(['category'])->find($id);

        if (!$business) {
            return $this->responseError('Business not found', 404);
        }

        return $this->responseSuccess(['business' => $business]);
    }


    public function update(UpdateBusinessRequest $request, $id)
    {
        $business = Business::find($id);

        if (!$business) {
            return $this->responseError('Business not found', 404);
        }
        $validatedData = $request->validated();

        $business->update($validatedData);


        return $this->responseSuccess(['business' => $business]);
    }


    public function destroy($id)
    {
        $business = Business::find($id);

        if (!$business) {
            return $this->responseError('Business not found', 404);
        }

        $business->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Business deleted successfully.',
        ]);
    }
}
