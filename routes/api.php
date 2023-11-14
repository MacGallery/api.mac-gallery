<?php

use App\Http\Controllers\Product\SparePartController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\VariantController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductSparePartController;
use App\Http\Controllers\ProductVariantController;
use App\Http\Controllers\Settings\GeneralSettingController;
use App\Http\Controllers\UploadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleare' => ['api']], function () {
    Route::put('products/bulk-update', [ProductController::class, 'bulkUpdate']);
    Route::delete('products/bulk-delete', [ProductController::class, 'bulkDelete']);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('products/{product}/variants', VariantController::class)->parameter('variants', 'product_variant');
    Route::apiResource('products/{product}/spare-parts', SparePartController::class)->only(['index', 'store', 'update', 'show', 'destroy'])
        ->parameter('spare-parts', 'product_spare_part');

    Route::apiResource('product-categories', ProductCategoryController::class);
    Route::apiResource('product-variants', ProductVariantController::class);
    Route::apiResource('product-spare-parts', ProductSparePartController::class);

    // Route::apiResource('settings/general', GeneralSettingController::class)->only(['index', 'update'])->parameter('general', '');

    Route::get('settings/general', [GeneralSettingController::class, 'index']);
    Route::put('settings/general', [GeneralSettingController::class, 'update']);

    Route::post('uploads', [UploadController::class, 'upload']);
});
