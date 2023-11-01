<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;

class UploadController extends Controller
{
    public function upload(UploadRequest $request)
    {
        $validated = $request->validated();
        $collectionName = Arr::get($validated, 'collection_name');
        $model = Arr::get($validated, 'model');

        $classBase = "";

        if (Str::startsWith($model, "App\Models")) {
            $classBase = $model;
        } else {
            $classBase = Str::of($model)->prepend('App\Models\\')->toString();
        }

        $model = null;

        if (!class_exists($classBase)) {
            return $this->error(404, 'failed', 'Model not found');
        }


        $model = (new $classBase);

        if (!$model instanceof HasMedia) {
            return $this->error(422, 'unprocessable', 'Model does not implement HasMedia class');
        }

        $record = $model->find(Arr::get($validated, 'model_id'));

        if (!$record) {
            return $this->error(404, 'failed', 'Record not found');
        }

        if (Arr::exists($validated, 'image')) {
            $image = Arr::get($validated, 'image');
            $record->addMedia($image)->toMediaCollection($collectionName);
        } else if (Arr::exists($validated, 'images')) {
            $images = Arr::get($validated, 'images');
            foreach ($images as $image) {
                $record->addMedia($image)->toMediaCollection($collectionName);
            }
        }
        return $this->success($record, 'Upload success');
        // $model = (new ("App\Models\\$classBase"));
    }
}
