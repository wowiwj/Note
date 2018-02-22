<?php

namespace App\Models;

use App\Base\Traits\RecordsActivity;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use RecordsActivity;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
