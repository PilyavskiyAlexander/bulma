<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function images()
    {
        return $this->hasMany(BrandImage::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeSlime()
    {
        if(count($this->images))
        {
            $path = $this->images->first()->image;
        }
        else
        {
            $path = DEFAULT_IMAGE_SMALL;
        }

        return asset($path);
    }

    public function scopeSentence($length)
    {
//        $length = $length > SENTENCE_MAX_LENGTH ? SENTENCE_MAX_LENGTH : $length;

//        $sentences =
//        return !empty($this->description) ? $this->description : "" ;
        return 12;
    }

    public function scopeBig()
    {
        if(count($this->images))
        {
            $path = $this->images->first()->image;
        }
        else
        {
            $path = DEFAULT_IMAGE_BIG;
        }

        return asset($path);
    }
}
