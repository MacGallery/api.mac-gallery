<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use App\Http\Resources\ProductTypeResource;
use App\Http\Requests\StoreProductTypeRequest;
use App\Http\Requests\UpdateProductTypeRequest;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $productTypes = ProductType::paginate($request->per_page);
        return $this->success(new ProductTypeResource($productTypes), 'Product Type data is successfully displayed');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductTypeRequest $request)
    {
        $productType = ProductType::create($request->validated());
        return $this->success(new ProductTypeResource($productType), 'Product Type data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductType $productType)
    {
        return $this->success(new ProductTypeResource($productType), 'Product data is successfully displayed');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductTypeRequest $request, ProductType $productType)
    {
        $productType->update($request->validated());
        return $this->success(new ProductTypeResource($productType), 'Product data has been successfully changed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductType $productType)
    {
        $productType->delete();
        return $this->success(new ProductTypeResource($productType), 'Product data has been successfully deleted');
    }
}