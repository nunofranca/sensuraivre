<?php

namespace App\Services\Images;

use App\Models\Image;
use App\Repositories\Images\ImageRepositoryService;
use Illuminate\Support\Str;

class ImageService implements ImageServiceInterface
{
    private $imageRepository;

    public function __construct(ImageRepositoryService $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function create($post, $image)
    {

       $image = Str::replace('"', '', $image);
       $image = Str::replace('\\', '', $image);
       $post->images()->create([
           'path' => $image
       ]);

    }


    private function validateFileExtension($file): string
    {
        $fileExtensionAllowed = [
            'png',
            'jpeg',
            'jpg',
            'webp'
        ];

        if (in_array($file->extension(), $fileExtensionAllowed))
            return $file->extension();
        return false;
    }
}
