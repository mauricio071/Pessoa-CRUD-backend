<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cnh extends Model
{
    protected $fillable = ['numero','tipo','data','pessoa_id'];
    protected $table = 'cnh';
    public $timestamps = false;

    public function setDataAttribute($data) {
        
        $this->attributes['data'] = date('Y-m-d', strtotime($data)); 
    }
    
    public function getDataAttribute($data) {

        return date('d/m/Y', strtotime($data)); 
    }
}
