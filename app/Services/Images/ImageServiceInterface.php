<?php

namespace App\Services\Images;

interface ImageServiceInterface
{
    public function create($request);

    public function moveImage($image);
}
