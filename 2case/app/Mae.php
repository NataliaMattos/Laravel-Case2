<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mae extends Model
{
    protected $fillable = ['nome','endereço','telefone','datanasc'];
    public function bebe(){
        return $this->hasMany(Bebe::class);
    }

}


