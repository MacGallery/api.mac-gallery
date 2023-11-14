<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Settings\GeneralSettings;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class GeneralSettingController extends Controller
{
    public function index(GeneralSettings $settings)
    {
        return $this->success($settings->toArray(), 'General settings successfully displayed');
    }

    public function update(Request $request, GeneralSettings $settings)
    {
        $validated = $request->validate([
            'site_name' => 'string',
            'site_description' => 'string',
            'site_enable_dark_mode' => 'boolean',
            'site_enable_reviews' => 'boolean',
            'site_banners.update' => 'array',
            'site_banners.upload' => 'array',
            'site_banners.upload.*' => 'image',
        ]);

        $site_banners = [];

        if (Arr::exists($validated, 'site_banners')) {
            if (Arr::exists(Arr::get($validated, 'site_banners'), 'update')) {
                $updatedBanners = Arr::get(Arr::get($validated, 'site_banners'), 'update');

                foreach ($updatedBanners as $image) {
                    $img = json_decode($image, true);
                    $site_banners[] = $img;
                }

                $files = Storage::allFiles('banners');
                $bannerUrls = collect(Arr::pluck($site_banners, 'url'))->map(function ($value) {
                    return Str::of(Str::of($value)->explode('uploads')->last())->ltrim('/')->toString();
                });

                Storage::delete(collect($files)->diff($bannerUrls)->toArray());
            }
            if (Arr::exists(Arr::get($validated, 'site_banners'), 'upload')) {
                foreach (Arr::get(Arr::get($validated, 'site_banners'), 'upload') as $image) {
                    $uid = Str::uuid();
                    $file = UploadedFile::createFromBase($image);
                    $path = $file->store('banners');
                    $data = [
                        'url' => Storage::url($path),
                        'uid' => $uid,
                    ];
                    $site_banners[] = $data;
                }
            }
        }

        $settings->site_name = $validated['site_name'];
        $settings->site_description = $validated['site_description'];
        $settings->site_enable_dark_mode = $validated['site_enable_dark_mode'];
        $settings->site_enable_reviews = $validated['site_enable_reviews'];
        $settings->site_banners = $site_banners;
        $settings->save();

        return $this->success($settings->toArray(), 'Site settings has been updated!');
    }
}
