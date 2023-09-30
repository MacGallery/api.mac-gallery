<?php

namespace App\Http\Controllers;

use App\Models\ProductSparePart;
use App\Http\Requests\StoreProductSparePartRequest;
use App\Http\Requests\UpdateProductSparePartRequest;
use App\Http\Resources\ProductSparePartResource;
use Illuminate\Http\Request;

class ProductSparePartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $productSpareParts = ProductSparePart::paginate($request->per_page);
        return $this->success(new ProductSparePartResource($productSpareParts), 'Product Spare Part data is successfully displayed');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductSparePartRequest $request)
    {
        $productSparePart = ProductSparePart::create($request->validated());
        return $this->success(new ProductSparePartResource($productSparePart), 'Product data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductSparePart $productSparePart)
    {
        return $this->success(new ProductSparePartResource($productSparePart), 'Product data is successfully displayed');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductSparePartRequest $request, ProductSparePart $productSparePart)
    {
        $productSparePart->update($request->validated());
        return $this->success(new ProductSparePartResource($productSparePart), 'Product data has been successfully changed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductSparePart $productSparePart)
    {
        $productSparePart->delete();
        return $this->success(new ProductSparePartResource($productSparePart), 'Product data has been successfully deleted');
    }
}
