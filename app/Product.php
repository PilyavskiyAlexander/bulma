<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Integer;

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

    public function scopeSentence($buld, $length = 0)
    {
        $ARR_FIND_DESC = ['[brand]', '[product]', '[email]', '[number]', '[llccompany]' ];

        $length = $length > SENTENCE_MAX_LENGTH ? SENTENCE_MAX_LENGTH : $length;

        $sentences = explode('#', $this->sequence);

        $sentences = array_slice($sentences, 0, $length);

        $description = '';
        foreach ($sentences as $sentence)
        {
            $description .= ' ' . trans('product_sentences.'.$sentence);
        }

        $description = str_replace($ARR_FIND_DESC, [$this->brand->name, $this->name, EMAIL, PHONE, OUR_COMPANY], $description);

        $description = $length == SENTENCE_MAX_LENGTH ? $description.' '.$this->description : $description;

        return $description;
    }
}
