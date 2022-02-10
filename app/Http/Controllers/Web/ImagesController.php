<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Image\ImageRequestStore;
use App\Services\Images\ImageServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as ImageMake;

class ImagesController extends Controller
{

    private $imageService;

    public function __construct(ImageServiceInterface $imageService)
    {
        $this->imageService = $imageService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->image;

        $fileName = $file->getClientOriginalName();
        $folder = uniqid() . '-' . now()->timestamp;

        $path = $file->storeAs('image/' . $folder, Str::slug($fileName) . '.' . $this->validateFileExtension($file));

        $image = ImageMake::make($file)->fit(600, 450)->encode('jpg', 100);
        $image->save(storage_path('app/public/' . $path));
        return response()->json($path);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
