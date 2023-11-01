<?php

namespace App\Http\Controllers;

use App\Models\ProductVariant;
use App\Http\Requests\StoreProductVariantRequest;
use App\Http\Requests\UpdateProductVariantRequest;
use App\Http\Resources\ProductVariantCollection;
use App\Http\Resources\ProductVariantResource;
use Illuminate\Http\Request;

class ProductVariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $productVariants = [];
        if ($request->per_page) {
            $productVariants = ProductVariant::search()->filterable($request->all())->sortable()->paginate($request->per_page);
            $productVariants = (new ProductVariantCollection($productVariants))->response()->getData(true);
        } else {
            $productVariants = ProductVariant::search()->filterable($request->all())->sortable()->get();
            $productVariants = (new ProductVariantCollection($productVariants));
        }
        // $productVariants = ProductVariant::search()->sortable()->paginate($request->per_page ?? 10);
        return $this->success($productVariants, 'Product Variant data is successfully displayed');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductVariantRequest $request)
    {
        $productVariant = ProductVariant::create($request->validated());
        return $this->success(new ProductVariantResource($productVariant), 'Product Variant data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductVariant $productVariant)
    {
        return $this->success(new ProductVariantResource($productVariant), 'Product Variant data is successfully displayed');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductVariantRequest $request, ProductVariant $productVariant)
    {
        $productVariant->update($request->validated());
        return $this->success(new ProductVariantResource($productVariant), 'Product Variant data has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductVariant $productVariant)
    {
        $productVariant->delete();
        return $this->success(new ProductVariantResource($productVariant), 'Product Variant data has been successfully deleted');
    }
}
