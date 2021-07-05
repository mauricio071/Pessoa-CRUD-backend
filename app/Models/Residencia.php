<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Residencia extends Model
{
    protected $fillable = ['cep','logradouro','complemento','bairro','numero','cidade','estado','pessoa_id'];
    protected $table = 'residencia';
    public $timestamps = false;

    public function setCepAttribute($cep)
    {
       $cep = preg_replace('/[^0-9]/', '', $cep);
       $this->attributes['cep'] = (int) $cep;
    }

    public function getCepAttribute($cep)
    {   
        return substr($cep, 0, 5) . '-' . substr($cep, 5, 3);
    }
}
