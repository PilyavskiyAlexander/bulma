<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function scopeSlime()
    {
        if(count($this->images))
        {
            $path = $this->images->first()->image;
        }
        elseif(count($this->brand->images))
        {
            $path = $this->brand->images->first()->image;
        }
        else
        {
            $path = DEFAULT_IMAGE_SMALL;
        }

        return asset($path);
    }

    public function scopeBig()
    {
        if(count($this->images))
        {
            $path = $this->images->first()->image;
        }
        elseif(count($this->brand->images))
        {
            $path = $this->brand->images->first()->image;
        }
        else
        {
            $path = DEFAULT_IMAGE_BIG;
        }

        return asset($path);
    }

    public function scopeSentence($length)
    {
//        $length = $length > SENTENCE_MAX_LENGTH ? SENTENCE_MAX_LENGTH : $length;

//        $sentences =
        return $this->description;
    }
}
