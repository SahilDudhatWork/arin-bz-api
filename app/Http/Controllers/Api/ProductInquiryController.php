<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductInquiry;
use Illuminate\Http\Request;

class ProductInquiryController extends Controller
{
    // Create a new inquiry
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'product_id' => 'required|exists:products,id',
                'user_id' => 'required|exists:users,id',
                'booking_date' => 'required|date',
            ]);

            $inquiry = ProductInquiry::create($validated);

            return $this->responseSuccess(['inquiry' => $inquiry], 'Inquiry created successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    // Get all inquiries
    public function index(Request $request)
    {
        try {
            // Retrieve the authenticated business
            $business = auth('business')->user();
            $keyword = $request->input('keyword'); // Get the search keyword from the request

            // Ensure a business is authenticated
            if (!$business) {
                return $this->responseError('Business not found', 404);
            }

            $inquiriesQuery = ProductInquiry::with(['product', 'user'])
                ->whereHas('product', function ($query) use ($business) {
                    $query->where('business_id', $business->id);
                });

            // Add keyword search logic if a keyword is provided
            if ($keyword) {
                $inquiriesQuery->where(function ($query) use ($keyword) {
                    $query->whereHas('product', function ($subQuery) use ($keyword) {
                        $subQuery->where('name', 'like', "%{$keyword}%");
                    })
                        ->orWhereHas('user', function ($subQuery) use ($keyword) {
                            $subQuery->where('name', 'like', "%{$keyword}%");
                        });
                });
            }
            $inquiries = $inquiriesQuery->latest()->get();


            return $this->responseSuccess(['inquiries' => $inquiries], 'Inquiries fetched successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }
    // Get single inquiry
    public function show($id)
    {
        try {
            // Retrieve the authenticated business
            $business = auth('business')->user();

            // Ensure a business is authenticated
            if (!$business) {
                return $this->responseError('Business not found', 404);
            }

            // Fetch inquiries related to the authenticated business's products
            $inquiry = ProductInquiry::with(['product', 'user'])->find($id);

            return $this->responseSuccess(['inquiry' => $inquiry], 'Inquiry fetched successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    public function getInquiriesByProduct(Request $request, $productId)
    {
        try {
            // Retrieve the authenticated business
            $business = auth('business')->user();
            $keyword = $request->input('keyword');

            // Ensure a business is authenticated
            if (!$business) {
                return $this->responseError('Business not found', 404);
            }
            $product = Product::where('business_id', $business->id)
                ->with(['media'])
                ->find($productId);
            // Fetch inquiries related to the authenticated business's products

            $inquiriesQuery = ProductInquiry::with(['product', 'user'])
                ->where('product_id', $productId)
                ->whereHas('product', function ($query) use ($business) {
                    $query->where('business_id', $business->id); // Ensure the business is the correct one
                });
            if ($keyword) {
                $inquiriesQuery->where(function ($query) use ($keyword) {
                    $query->whereHas('product', function ($subQuery) use ($keyword) {
                        $subQuery->where('name', 'like', "%{$keyword}%"); // Search by product name
                    })
                        ->orWhereHas('user', function ($subQuery) use ($keyword) {
                            $subQuery->where('name', 'like', "%{$keyword}%"); // Search by user name
                        });
                });
            }
            $inquiries = $inquiriesQuery->latest()->get();


            return $this->responseSuccess(['product' => $product, 'inquiries' => $inquiries], 'Inquiries fetched successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }

    public function inquiriesByProduct(Request $request)
    {
        try {
            // Retrieve the authenticated business
            $business = auth('business')->user();
            $keyword = $request->input('keyword'); // Get the search keyword from the request

            // Ensure a business is authenticated
            if (!$business) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

            $productsQuery = Product::where('business_id', $business->id)
                ->withCount('inquiries')
                ->with('media') // Eager load media
                ->get(['id', 'name']);
            // Add keyword search logic if a keyword is provided
            if ($keyword) {
                $productsQuery = $productsQuery->filter(function ($product) use ($keyword) {
                    return stripos($product->name, $keyword) !== false; // Search by product name
                });
            }

            // Filter out products with zero inquiries
            $products = $productsQuery->filter(function ($product) {
                return $product->inquiries_count > 0; // Only include products with inquiries
            })->values();

            // Format the response
            $response = $products->map(function ($product) {
                $imageUrl = $product->media->isNotEmpty() ? $product->media->first() : null;

                return [
                    'product_id' => $product->id,
                    'product_name' => $product->name,
                    'inquiries' => $product->inquiries_count,
                    'inquiry_limit' => $product->inquiry_limit,
                    'image' => $imageUrl,
                ];
            });

            return $this->responseSuccess(['inquiries' => $response], 'Inquiries fetched successfully');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), 404);
        }
    }
}
