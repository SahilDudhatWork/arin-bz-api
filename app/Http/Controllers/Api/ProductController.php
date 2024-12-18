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
    public function index()
    {
        $products = Product::with(['amenities', 'media'])->get();
        return response()->json($products);
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'number_of_bedrooms' => 'required|integer|min:0',
            'number_of_bathrooms' => 'required|integer|min:0',
            'location' => 'required|string|max:255',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'description' => 'nullable|string',
            // 'price' => 'required|numeric|min:0',
            // 'discounted_price' => 'nullable|numeric|min:0',
            // 'maximum_guests' => 'required|integer|min:0',
            // 'available_from' => 'required|date',
            // 'inquiry_limit' => 'nullable|integer|min:0',
            // 'product_hero_image' => 'nullable|string',
            // 'other_images' => 'nullable|array',
            'amenities' => 'nullable|array',
            'amenities.*' => 'exists:amenities,id',
        ]);

        $product = Product::create($validated);

        if (isset($validated['amenities'])) {
            $product->amenities()->sync($validated['amenities']);
        }

        return response()->json($product, 201);
    }

    /**
     * Display the specified product.
     */
    public function show($id)
    {
        $product = Product::with(['amenities', 'media'])->findOrFail($id);
        return response()->json($product);
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'number_of_bedrooms' => 'sometimes|required|integer|min:0',
            'number_of_bathrooms' => 'sometimes|required|integer|min:0',
            'location' => 'sometimes|required|string|max:255',
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

        return response()->json($product);
    }


    /**
     * Remove the specified product from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
