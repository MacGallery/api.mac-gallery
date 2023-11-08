<?php

namespace App\Http\Controllers;

use App\Models\ProductSparePart;
use App\Http\Requests\StoreProductSparePartRequest;
use App\Http\Requests\UpdateProductSparePartRequest;
use App\Http\Resources\ProductSparePartCollection;
use App\Http\Resources\ProductSparePartResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class ProductSparePartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $with = [];
        if (!Str::of($request->get('with'))->isEmpty()) {
            $with = explode(',', $request->get('with', ''));
        }
        $productSpareParts = [];
        if ($request->per_page) {
            $productSpareParts = ProductSparePart::with($with)->search()->filterable($request->all())->sortable()->paginate($request->per_page);
            $productSpareParts = (new ProductSparePartCollection($productSpareParts))->response()->getData(true);
        } else {
            $productSpareParts = ProductSparePart::with($with)->search()->filterable($request->all())->sortable()->get();
            $productSpareParts = (new ProductSparePartCollection($productSpareParts));
        }
        return $this->success($productSpareParts, 'Product Spare Parts data is successfully displayed');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductSparePartRequest $request)
    {
        $productSparePart = ProductSparePart::create(Arr::except($request->validated(), 'image'));
        if ($request->has('image')) {
            $productSparePart->addMedia($request->image)->toMediaCollection('image');
        }
        return $this->success(new ProductSparePartResource($productSparePart), 'Product Spare Part data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductSparePart $productSparePart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductSparePartRequest $request, ProductSparePart $productSparePart)
    {
        $validated = $request->validated();
        $productSparePart->update($validated);
        if (Arr::has($request, 'image')) {
            $productSparePart->addMedia($request->file('image'))->toMediaCollection('image');
        }
        return $this->success(new ProductSparePartResource($productSparePart), 'Product Spare Part data has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductSparePart $productSparePart)
    {
        $productSparePart->delete();
        return $this->success(new ProductSparePartResource($productSparePart), 'Product Spare Part data has been successfully deleted');
    }
}
