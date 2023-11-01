<?php

namespace App\Models;

use App\Concerns\Models\Filterable;
use App\Concerns\Models\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kyslik\ColumnSortable\Sortable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class ProductCategory extends Model implements HasMedia
{
    use HasFactory, HasSlug, InteractsWithMedia, Sortable, Searchable, Filterable;

    protected $casts = [
        'visible' => 'boolean',
    ];

    public $searchable = ['name'];

    public $with = ['media'];

    public $sortable = ['products_count', 'created_at'];
    public $filterable = [];

    protected $fillable = ['name', 'visible'];
    // protected $guarded = [];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('image')
            ->singleFile();
    }

    public function spareParts()
    {
        return $this->hasMany(ProductSparePart::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
