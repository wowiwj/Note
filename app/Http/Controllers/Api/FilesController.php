<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Handler\ImageUploadHandler;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilesController extends ApiController
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:api');
    }

    public function ImageUpload(Request $request)
    {

        if (!$request->hasFile('file')){
            return $this->respondWithError('上传文件不能为空');
        }


        $file = $request->file('file');

        $imageHander = new ImageUploadHandler();
        $result = $imageHander->uploadImage($file);

        return $this->respondWithSuccess([
            'image' => '/'.$result['filename']
        ]);
    }
}
