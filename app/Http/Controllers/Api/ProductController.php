<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of products.
     */
    public function index(Request $request)
    {
        try {
            $business = auth('business')->user();
            $keyword = $request->input('keyword'); // Get the search keyword from the request
            $products = Product::where('business_id', $business->id)->with(['amenities', 'media'])
                ->when(!empty($keyword), function ($query) use ($keyword) {
                    $query->where(function ($q) use ($keyword) {
                        $q->where('name', 'LIKE', "%{$keyword}%")
                            ->orWhere('location', 'LIKE', "%{$keyword}%")
                            ->orWhere('description', 'LIKE', "%{$keyword}%");
                    });
                })
                ->latest()
                ->get();

            return $this->responseSuccess(['products' => $products], 'Products fetched successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    public function getAllProduct(Request $request)
    {
        try {
            $keyword = $request->input('keyword'); // Get the search keyword from the request
            $products = Product::with(['business', 'amenities', 'media'])
                ->when(!empty($keyword), function ($query) use ($keyword) {
                    $query->where(function ($q) use ($keyword) {
                        $q->where('name', 'LIKE', "%{$keyword}%")
                            ->orWhere('location', 'LIKE', "%{$keyword}%")
                            ->orWhere('description', 'LIKE', "%{$keyword}%");
                    });
                })
                ->latest()
                ->get();

            return $this->responseSuccess(['products' => $products], 'Products fetched successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    public function getProductsByCity(Request $request)
    {
        try {
            $city = $request->input('city'); // Get the search keyword from the request
            $products = Product::with(['business', 'amenities', 'media'])->where('city', $city)->latest()->get();

            return $this->responseSuccess(['products' => $products], 'Products fetched successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    public function getProductsById($id)
    {
        try {
            $product = Product::with(['business', 'amenities', 'media'])->find($id);

            return $this->responseSuccess(['product' => $product], 'Product fetched successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    public function getSearchProduct(Request $request)
    {
        try {
            $keyword = $request->input('keyword'); // Get the search keyword from the request

            $products = Product::with(['media'])
                ->when(!empty($keyword), function ($query) use ($keyword) {
                    $query->where(function ($q) use ($keyword) {
                        $q->where('name', 'LIKE', "%{$keyword}%")
                            ->orWhere('city', 'LIKE', "%{$keyword}%")
                            ->orWhere('location', 'LIKE', "%{$keyword}%")
                            ->orWhere('description', 'LIKE', "%{$keyword}%");
                    });
                })->latest()
                ->get();
            return $this->responseSuccess(['products' => $products], 'Products fetched successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    public function productCount(Request $request)
    {
        try {
            $business = auth('business')->user();
            $productCount =  Product::where('business_id', $business->id)->count();
            return $this->responseSuccess(['products' => $productCount], 'Product-count fetched successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }
    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        try {
            $business = auth('business')->user();

            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'number_of_bedrooms' => 'required|integer|min:0',
                'number_of_bathrooms' => 'required|integer|min:0',
                'location' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'latitude' => 'nullable|numeric',
                'longitude' => 'nullable|numeric',
                'description' => 'nullable|string',
                'amenities' => 'nullable|array',
                'amenities.*' => 'exists:amenities,id',
            ]);
            $validated['business_id'] = $business->id;

            $product = Product::create($validated);

            if (isset($validated['amenities'])) {
                $product->amenities()->sync($validated['amenities']);
            }

            return $this->responseSuccess(['product' => $product], 'Product created successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    /**
     * Display the specified product.
     */
    public function show($id)
    {
        try {
            $product = Product::with(['amenities', 'media'])->findOrFail($id);
            return $this->responseSuccess(['product' => $product], 'Product fetched successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $product = Product::findOrFail($id);

            $validated = $request->validate([
                'name' => 'sometimes|required|string|max:255',
                'number_of_bedrooms' => 'sometimes|required|integer|min:0',
                'number_of_bathrooms' => 'sometimes|required|integer|min:0',
                'location' => 'sometimes|required|string|max:255',
                'city' => 'sometimes|required|string|max:255',
                'latitude' => 'sometimes|nullable|numeric',
                'longitude' => 'sometimes|nullable|numeric',
                'description' => 'sometimes|nullable|string',
                'price' => 'sometimes|required|numeric|min:0',
                'discounted_price' => 'sometimes|nullable|numeric|min:0',
                'maximum_guests' => 'sometimes|required|integer|min:0',
                'available_from' => 'sometimes|required|date',
                'inquiry_limit' => 'sometimes|nullable|integer|min:0',
                'amenities' => 'sometimes|nullable|array',
                'amenities.*' => 'sometimes|exists:amenities,id',
            ]);

            $product->update($validated);

            if (isset($validated['amenities'])) {
                $product->amenities()->sync($validated['amenities']);
            }

            return $this->responseSuccess(['product' => $product], 'Product updated successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }


    /**
     * Remove the specified product from storage.
     */
    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
            return $this->responseSuccess(['product' => $product], 'Product deleted successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }
}
