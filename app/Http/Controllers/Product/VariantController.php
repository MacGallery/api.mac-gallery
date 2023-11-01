<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\ProductVariant;
use App\Http\Requests\StoreProductVariantRequest;
use App\Http\Requests\UpdateProductVariantRequest;
use App\Http\Resources\ProductVariantCollection;
use App\Http\Resources\ProductVariantResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class VariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Product $product)
    {
        // $variants = $product->variants;
        // if ($request->per_page) {
        //     $variants = (new ProductVariantCollection($variants))->response()->getData(true);
        // } else {
        //     $variants = (new ProductVariantCollection($variants));
        // }
        $with = [];
        if ($request->get('with')) {
            $with = explode(',', $request->get('with', null));
        }
        $variants = [];
        if ($request->per_page) {
            $variants = $product->variants()->with($with)->search()->filterable($request->all())->sortable()->paginate($request->per_page);
            $variants = (new ProductVariantCollection($variants))->response()->getData(true);
        } else {
            $variants = $product->variants()->with($with)->search()->filterable($request->all())->sortable()->get();
            $variants = (new ProductVariantCollection($variants));
        }
        return $this->success($variants, 'Product Variants data is successfully displayed');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Product $product, StoreProductVariantRequest $request)
    {
        $productVariant = $product->variants()->create($request->validated());
        return $this->success(new ProductVariantResource($productVariant), 'Product Variant data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product, ProductVariant $productVariant)
    {
        // dd($productVariant);
        return $this->success(new ProductVariantResource($productVariant), 'Product Variant data is successfully displayed');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Product $product, UpdateProductVariantRequest $request, ProductVariant $productVariant)
    {
        // dd($request->validated());
        $productVariant->update($request->validated());
        return $this->success(new ProductVariantResource($productVariant), 'Product Variant data has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, ProductVariant $productVariant)
    {
        $productVariant->delete();
        return $this->success(new ProductVariantResource($productVariant), 'Product Variant data has been successfully deleted');
    }
}