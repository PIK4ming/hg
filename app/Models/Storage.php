<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    public function product(){
        return $this->belongsTo('App\Models\Product');
    }

    public function action(){
        return $this->belongsTo('App\Models\StorageAction');
    }
}
