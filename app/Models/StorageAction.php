<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StorageAction extends Model
{
    public function actionLog(){
        return $this->hasMany('App\Models\Storage', 'action_type', 'id');
    }
}
