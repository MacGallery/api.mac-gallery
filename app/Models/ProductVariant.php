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

class ProductVariant extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, Sortable, Searchable, Filterable;

    protected $casts = [
        'price' => 'integer',
        'stock' => 'integer'
    ];
    public $searchable = ['name'];
    public $sortable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];
    public $filterable = ['product_id'];
    public $boolFilterFields = ['visible'];

    protected $fillable = ["product_id", "name", "price", "stock", 'visible'];
    // protected $guarded = [];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }
}
