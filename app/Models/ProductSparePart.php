<?php

namespace App\Models;

use App\Concerns\Models\Filterable;
use App\Concerns\Models\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductSparePart extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, Sortable, Searchable, Filterable;

    // protected $with = ['category'];
    protected $casts = [
        'item_price' => 'integer'
    ];

    public $searchable = ['name', 'category.name'];
    public $filterable = ['product_category_id'];
    public $sortable = ['name', 'created_at'];

    // protected $fillable = [];
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_has_product_spare_parts')->withPivot(['item_price', 'service_price', 'stock', 'additional_info', 'product_id', 'id']);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }
}
