<?php

namespace App\Models;

use App\Concerns\Models\Filterable;
use App\Concerns\Models\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Arr;
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
        'stock' => 'integer',
        'visible' => 'boolean',
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

    public function updateImage($newImages)
    {
        $updatedImage = [];
        $imageToUpload = Arr::get($newImages, 'upload', []);

        foreach (Arr::get($newImages, 'update', []) as $image) {
            $updatedImage[] = json_decode($image, true);
        }

        $this->updateMedia($updatedImage, 'images');

        foreach ($imageToUpload as $image) {
            $this->addMedia($image)->toMediaCollection('images');
        }
    }

    public function getImages()
    {
        return $this->getMedia('images')->map(function ($value) {
            // $value->url = $value->getUrl();
            return ['id' => $value->id, 'url' => $value->getUrl(), 'name' => $value->name,];
        })->toArray();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }
}
