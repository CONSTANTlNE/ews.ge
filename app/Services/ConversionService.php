<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use RuntimeException;

class ConversionService
{
    public function __construct() {}

    public function convertToWebp(UploadedFile $file, int $quality = 80): array
    {
        try {
            $manager = new ImageManager(new Driver);
            $encoded = $manager->read($file->getRealPath() ?: $file->path())->toWebp($quality);

            $baseName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeBaseName = Str::slug($baseName);

            if ($safeBaseName === '') {
                $safeBaseName = 'image';
            }

            return [
                'content' => (string) $encoded,
                'file_name' => $safeBaseName.'.webp',
                'mime_type' => 'image/webp',
            ];
        } catch (\Exception $exception) {
            throw new RuntimeException('Image conversion failed: '.$exception->getMessage(), previous: $exception);
        }
    }

    public function convert(UploadedFile $file): array
    {
        return $this->convertToWebp($file);
    }
}
