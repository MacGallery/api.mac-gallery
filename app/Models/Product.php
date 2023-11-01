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

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, Sortable, Searchable, Filterable;

    protected $casts = [
        'visible' => 'boolean',
        'product_category_id' => 'integer',
    ];

    public $sortable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];

    public $searchable = ['name', 'category.name'];
    public $filterable = ['product_category_id'];
    public $boolFilterFields = ['visible'];

    protected $fillable = ['name', 'product_category_id', 'description', 'year_release', 'visible'];
    // protected $guarded = [];



    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function spareParts()
    {
        return $this->belongsToMany(ProductSparePart::class, 'product_has_product_spare_parts')->withPivot(['item_price', 'service_price', 'stock', 'additional_info', 'product_id', 'id']);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('image')
            ->singleFile();
    }
}
