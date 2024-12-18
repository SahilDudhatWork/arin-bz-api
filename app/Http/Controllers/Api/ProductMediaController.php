<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Media;
use App\Http\Controllers\Controller;

class ProductMediaController extends Controller
{
    public function uploadImages(Request $request, $productId)
    {
        $request->validate([
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Single image
            'other_images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Multiple images
        ]);

        $product = Product::findOrFail($productId);

        // Upload Hero Image
        if ($request->hasFile('hero_image')) {
            $heroImage = $request->file('hero_image')->store('product_images', 'public');

            $media = Media::create([
                'file_path' => $heroImage,
                'is_hero_image' => 1,
            ]);

            $product->media()->attach($media->id);
        }

        // Upload Other Images
        if ($request->hasFile('other_images')) {
            foreach ($request->file('other_images') as $otherImage) {
                $filePath = $otherImage->store('product_images', 'public');

                $media = Media::create([
                    'file_path' => $filePath,
                    'is_hero_image' => 0,
                ]);

                $product->media()->attach($media->id);
            }
        }

        return response()->json([
            'message' => 'Images uploaded successfully.',
            'product' => $product->load('media'),
        ]);
    }
}
