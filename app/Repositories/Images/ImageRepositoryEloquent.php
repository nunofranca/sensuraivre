<?php

namespace App\Repositories\Images;
use App\Models\Image;
use App\Repositories\BaseRepository;
class ImageRepositoryEloquent extends BaseRepository implements ImageRepositoryService
{

    public function __construct(Image $image)
    {
        parent::__construct($image);
    }
}
