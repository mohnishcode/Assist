<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
   protected $fillable=['title','body','notebook_id'];
    
    
    public function notebook()
    {
        
        return $this->belongsTO(notebook::class);
    }
    
    
    
}
