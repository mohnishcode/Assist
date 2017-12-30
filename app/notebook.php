<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notebook extends Model
{
   protected $fillable=['name'];
    
    
    
    public function notes()
    {
            return $this->hasMany(note::class);
        
    }
    
}
