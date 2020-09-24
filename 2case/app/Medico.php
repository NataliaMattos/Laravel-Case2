<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = ['nome','crm','telefone','especialidade'];
    public function bebe(){
        return $this->hasMany(Bebe::class);
    }
}
