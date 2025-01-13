<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;


class CityController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword'); // Get the search keyword from the request
        $cities = City::when(!empty($keyword), function ($query) use ($keyword) {
            $query->where(function ($q) use ($keyword) {
                $q->where('name', 'LIKE', "%{$keyword}%");
            });
        })->get();
        return $this->responseSuccess(['cities' => $cities], 'Cities fetched successfully');
    }

    public function store(Request $request)
    {
        try {
            // Create a new amenity
            $city = City::create($request->all());
            return $this->responseSuccess(['city' => $city], 'City created successfully');
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
