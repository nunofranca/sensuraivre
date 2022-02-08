<?php

namespace App\Services\Images;

class ImageService implements ImageServiceInterface
{
    private $imageService;
    public function __construct(ImageServiceInterface $imageService)
    {
        $this->imageService = $imageService;
    }

    public function create(array $attributes)
    {
        $this->imageService->create($attributes);
    }
}
