<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

trait ImageTrait
{
    /**
     * @param $value
     * @param $id
     * @return string
     */
    static public function storeImage($value, $id)
    {
        $img = Image::make($value);
        $path = 'products/'.$id.'/image.jpg';
        Storage::disk('public')->put($path, (string) $img->encode());
        return  Storage::disk('public')->url($path);
    }
}
