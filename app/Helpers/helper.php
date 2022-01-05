<?php
use Intervention\Image\Facades\Image;

if(!function_exists('uploadImage'))
{
    function uploadImage($img, $path, $user_file_name = null, $width = null, $height = null)
    {

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (isset($user_file_name) && $user_file_name != "" && file_exists($path . $user_file_name)) {
            unlink($path . $user_file_name);
        }
        // saving image in target path
        $imgName = uniqid() . time() . '.' . $img->getClientOriginalExtension();
        $imgPath = public_path($path . $imgName);
        // making image
        $makeImg = Image::make($img)->orientate();
        if ($width != null && $height != null && is_int($width) && is_int($height)) {
            $makeImg->fit($width, $height);
        }
        if ($makeImg->save($imgPath)) {
            return $imgName;
        }
        return false;
    }
}

if(!function_exists('checkBoxValue'))
{
    function checkBoxValue($value = null) {
        return $value != null ? 1 : 0;
    }
}

if(!function_exists('cdnAsset'))
{
    function cdnAsset($path, $image) {
        if(app()->environment('production')) {
            return CDN_URL.$image;
        }else {
            return asset($path.$image);
        }
    }
}
