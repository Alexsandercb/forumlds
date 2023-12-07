<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    use HasFactory;
    public function forum() 
    {
        return $this->belongTo('App\Models\Forum', 'foreing_key', 'forum_id');
        
    }
}