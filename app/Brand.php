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

    public function scopeSentence($buld, $length = 0)
    {
        $length = $length > SENTENCE_MAX_LENGTH ? SENTENCE_MAX_LENGTH : $length;

        $sentences = explode('#', $this->sequence);

        $sentences = array_slice($sentences, 0, $length);

        $description = '';
        foreach ($sentences as $sentence)
        {
            $description .= ' ' . trans('brand_sentences.'.$sentence);
        }

        $description = str_replace(ARR_FIND_DESC, [$this->brand, ' ', EMAIL, PHONE, OUR_COMPANY], $description);

        $description = $length == SENTENCE_MAX_LENGTH ? $description.'<b>'.$this->description.'</b>' : $description;

//        return 12;
        return $description;
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
