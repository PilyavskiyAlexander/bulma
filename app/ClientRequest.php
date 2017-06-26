<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientRequest extends Model
{
    public function unit_type()
    {
        return $this->belongsTo(UnitType::class);
    }
}
