<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\ProductSparePart;
use App\Http\Requests\StoreProductSparePartRequest;
use App\Http\Requests\UpdateProductSparePartRequest;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductSparePartCollection;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class SparePartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Product $product)
    {
        // $spareParts = $productVariant->load(['spareParts'])->spareParts()->search()->get();
        // $spareParts = (new ProductSparePartCollection($spareParts));

        $with = [];
        if ($request->get('with')) {
            $with = explode(',', $request->get('with', null));
        }
        $productSpareParts = [];
        if ($request->per_page) {
            $productSpareParts = $product->spareParts()->with($with)->search()->filterable($request->all())->sortable()->paginate($request->per_page);
            $productSpareParts = (new ProductSparePartCollection($productSpareParts))->response()->getData(true);
        } else {
            $productSpareParts = $product->spareParts()->with($with)->search()->filterable($request->all())->sortable()->get();
            $productSpareParts = (new ProductSparePartCollection($productSpareParts));
        }
        return $this->success($productSpareParts, 'Product Spare Parts data is successfully displayed');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductSparePartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductSparePart $productSparePart)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductSparePartRequest $request, ProductSparePart $productSparePart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductSparePart $productSparePart)
    {
        //
    }
}
