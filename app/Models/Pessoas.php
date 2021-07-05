<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    protected $fillable = ['nome','data','peso','sexo','cpf'];
    protected $table = 'pessoas';
    public $timestamps = false;

    public function setDataAttribute($data)
    {
        $this->attributes['data'] = date('Y-m-d', strtotime($data)); 
    }

    public function getDataAttribute($data)
    {
        return date('d/m/Y', strtotime($data)); 
    }

    public function setCpfAttribute($cpf)
    {
       $cpf = preg_replace('/[^0-9]/', '', $cpf);
       $this->attributes['cpf'] = (int) $cpf;
    }

    public function getCpfAttribute($cpf)
    {   
        return substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9);
    }
}
