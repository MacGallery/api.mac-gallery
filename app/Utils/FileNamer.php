<?php

namespace App\Utils;

use Illuminate\Support\Facades\Hash;
use Spatie\MediaLibrary\Support\FileNamer\DefaultFileNamer;
use Illuminate\Support\Str;

class FileNamer extends DefaultFileNamer
{
    public function originalFileName(string $fileName): string
    {
        $fileName = pathinfo($fileName, PATHINFO_FILENAME);
        $newFileName = md5($fileName);
        return $newFileName;
    }
}