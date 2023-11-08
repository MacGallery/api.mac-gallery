<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductHasProductSparePartRequest;
use App\Models\ProductSparePart;
use App\Http\Requests\StoreProductSparePartRequest;
use App\Http\Requests\UpdateProductHasProductSparePartRequest;
use App\Http\Requests\UpdateProductSparePartRequest;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductSparePartCollection;
use App\Http\Resources\ProductSparePartResource;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SparePartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Product $product)
    {
        $with = [];
        if ($request->get('with')) {
            $with = explode(',', $request->get('with', null));
        }
        $productSpareParts = [];
        if ($request->per_page) {
            $productSpareParts = $product->spareParts()->orderByPivot('created_at', 'desc')->with($with)->search()->filterable($request->all())->sortable()->paginate($request->per_page);
            $productSpareParts = (new ProductSparePartCollection($productSpareParts))->response()->getData(true);
        } else {
            $productSpareParts = $product->spareParts()->orderByPivot('created_at', 'desc')->with($with)->search()->filterable($request->all())->sortable()->get();
            $productSpareParts = (new ProductSparePartCollection($productSpareParts));
        }
        return $this->success($productSpareParts, 'Product Spare Parts data is successfully displayed');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Product $product, StoreProductHasProductSparePartRequest $request)
    {
        $validated = $request->validated();
        $sparePartId = Arr::get($validated, 'product_spare_part_id');
        $data  = Arr::except($validated, 'product_spare_part_id');
        $sparePart = $product->spareParts()->attach([$sparePartId => $data]);
        return $this->success($sparePart, 'Product Spare Parts data is successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product, ProductSparePart $productSparePart)
    {
        $productSparePart = $product->spareParts()->find($productSparePart->id);
        return $this->success(new ProductSparePartResource($productSparePart), 'Product Spare Part data is successfully displayed');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Product $product, UpdateProductHasProductSparePartRequest $request, int $productSparePart)
    {
        $validated = $request->validated();
        $id = $productSparePart;
        $productSparePart = $product->spareParts()->wherePivot('id', '=', $id)->rawUpdate($validated);
        $productSparePart = $product->spareParts()->wherePivot('id', '=', $id)->first();
        return $this->success(new ProductSparePartResource($productSparePart), 'Product Spare Part data has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, int $productSparePart)
    {
        $id = $productSparePart;
        $productSparePart = $product->spareParts()->wherePivot('id', '=', $id);
        $productSparePart->detach();
        return $this->success(null, 'Product Spare Part data has been successfully deleted');
    }
}
