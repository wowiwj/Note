<?php

namespace App\Helpers\Handler;
use Image;
use Auth;

class ImageUploadHandler
{

    protected $file;
    protected $allowed_extensions = ["png", "jpg", "gif", 'jpeg'];

    /**
     * @param UploadedFile $file
     * @param User $user
     * @return array
     */
    public function uploadAvatar($file, User $user)
    {
        $this->file = $file;
        $this->checkAllowedExtensionsOrFail();
        $avatar_name = $user->id . '_' . time() . '.' . $file->getClientOriginalExtension() ?: 'png';
        $this->saveImageToLocal('avatar', 380, $avatar_name);
        return ['filename' => $avatar_name];
    }
    public function uploadImage($file)
    {
        $this->file = $file;
        $this->checkAllowedExtensionsOrFail();
        $local_image = $this->saveImageToLocal('topic', 1440);
        return ['filename' => $local_image];
    }

    protected function checkAllowedExtensionsOrFail()
    {
        $extension = strtolower($this->file->getClientOriginalExtension());
        if ($extension && !in_array($extension, $this->allowed_extensions)) {
            throw new \Exception('You can only upload image with extensions: ' . implode($this->allowed_extensions, ','));
        }
    }

    protected function saveImageToLocal($type, $resize, $filename = '')
    {
        $folderName = ($type == 'avatar')
            ? 'uploads/avatars'
            : 'uploads/images/' . date("Ym", time()) .'/'.date("d", time()) .'/'. Auth::user()->id;
        $destinationPath = public_path() . '/' . $folderName;
        $extension = $this->file->getClientOriginalExtension() ?: 'png';
        $safeName  = $filename ? :str_random(10) . '.' . $extension;
        $this->file->move($destinationPath, $safeName);
        if ($this->file->getClientOriginalExtension() != 'gif') {
            $img = $this->makeSize($destinationPath . '/' . $safeName,$resize);
            $img->save();
        }
        return $folderName .'/'. $safeName;
    }

    public function makeArticleImage($path,$savePath){

        $dirName = dirname($path);
        $baseName = basename($path);
        $savePath = substr($dirName.'/'.'tn-'.$baseName,1);
        try {
            $this->makeSize(public_path($path), 600,400)
                ->save($savePath);
        }catch (\Exception $e){
            return $path;
        }
        return '/'.$savePath;
    }


    private function makeSize($path,$width,$height = null){

        $img = Image::make($path);
        if ($height != null){
            $img->fit($width,$height);
            return $img;
        }
        $img->resize($width, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        return $img;
    }
}