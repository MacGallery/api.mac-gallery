<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use App\Http\Resources\ProductCategoryCollection;
use App\Http\Resources\ProductCategoryResource;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $productCategories = [];
        if ($request->per_page) {
            $productCategories = ProductCategory::withCount('products')->search()->filterable($request->all())->sortable()->paginate($request->per_page);
            $productCategories = (new ProductCategoryCollection($productCategories))->response()->getData(true);
        } else {
            $productCategories = ProductCategory::withCount('products')->search()->filterable($request->all())->sortable()->get();
            $productCategories = (new ProductCategoryCollection($productCategories));
        }
        // $productCategories = ProductCategory::with('media')->search()->sortable()->paginate($request->per_page ?? 10);
        return $this->success($productCategories, 'Product Category data is successfully displayed');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductCategoryRequest $request)
    {
        $productCategory = ProductCategory::create(Arr::except($request->validated(), 'image'));
        if ($request->has('image')) {
            $productCategory->addMedia($request->image)->toMediaCollection('image');
        }
        return $this->success(new ProductCategoryResource($productCategory), 'Product Category data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {
        return $this->success(new ProductCategoryResource($productCategory), 'Product Category data is successfully displayed');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {
        $validated = $request->validated();
        $productCategory->update($validated);
        if (Arr::has($request, 'image')) {
            $productCategory->addMedia($request->file('image'))->toMediaCollection('image');
        }
        return $this->success(new ProductCategoryResource($productCategory), 'Product Category data has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        return $this->success(new ProductCategoryResource($productCategory), 'Product Category data has been successfully deleted');
    }
}
