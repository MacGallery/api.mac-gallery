<?php

namespace App\Http\Controllers;

use App\Models\ProductSparePart;
use App\Http\Requests\StoreProductSparePartRequest;
use App\Http\Requests\UpdateProductSparePartRequest;
use App\Http\Resources\ProductSparePartCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        //
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