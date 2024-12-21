<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Amenity;


class AmenityController extends Controller
{
    public function index()
    {
        // Fetch all amenities
        $amenities = Amenity::all();
        return $this->responseSuccess(['amenities' => $amenities], 'Amenities fetched successfully');
    }

    public function store(Request $request)
    {
        try {
            // Create a new amenity
            $amenity = Amenity::create($request->all());
            return $this->responseSuccess(['amenity' => $amenity], 'Amenity created successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
