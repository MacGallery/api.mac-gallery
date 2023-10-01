<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::paginate($request->per_page);
        return $this->success(new ProductResource($products), 'Product data is successfully displayed');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->validated());
        return $this->success(new ProductResource($product), 'Product data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return $this->success(new ProductResource($product), 'Product data is successfully displayed');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        // dd($request->validated());
        if ($request->has('attaches')) {
            $product->spareParts()->syncWithoutDetaching($request->attaches);
        }
        if ($request->has('detaches')) {
            $product->spareParts()->detach($request->detaches);
        }
        $product->update($request->validated());
        return $this->success(new ProductResource($product), 'Product data has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return $this->success(new ProductResource($product), 'Product data has been successfully deleted');
    }
}
