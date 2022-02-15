<?php

namespace App\Models;

trait Imageable
{
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
