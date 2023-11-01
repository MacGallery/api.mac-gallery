<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\BulkDeleteProductRequest;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\TableRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = [];
        if ($request->per_page) {
            $products = Product::with('category')->search()->filterable($request->all())->sortable()->paginate($request->per_page);
            $products = (new ProductCollection($products))->response()->getData(true);
        } else {
            $products = Product::with('category')->search()->filterable($request->all())->sortable()->get();
            $products = (new ProductCollection($products));
        }
        return $this->success($products, 'Product data is successfully displayed');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();
        $product = Product::create($validated);
        if (Arr::has($validated, 'image')) {
            $product->addMedia(Arr::get($validated, 'image'))->toMediaCollection('image');
        }
        return $this->success(new ProductResource($product), 'Product data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product, Request $request)
    {
        $with = [];
        if (!Str::of($request->get('with'))->isEmpty()) {
            $with = explode(',', $request->get('with', ''));
        }
        $product->load($with);
        return $this->success(new ProductResource($product), 'Product data is successfully displayed');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $validated = $request->validated();
        if (Arr::has($validated, 'image')) {
            $product->addMedia(Arr::get($validated, 'image'))->toMediaCollection('image');
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

    public function bulkDelete(BulkDeleteProductRequest $request)
    {
        $validated = $request->validated();
        $deleted = Product::destroy(Arr::get($validated, 'ids'));
        return $this->success(null, "Success deleted $deleted product(s)");
    }

    public function bulkUpdate(Request $request)
    {
        $validated = $request->validate([
            'ids' => 'array|required',
            'ids.*' => 'numeric|exists:products,id',
            'data' => 'array|required',
            'data.visible' => 'boolean|nullable',
        ]);
        $updated = Product::whereIn('id', $validated['ids'])->update($validated['data']);
        return $this->success(null, "Success updated $updated product(s)");
    }
}
