<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bebe extends Model
{
    protected $fillable = ['nome','datanasc','peso','altura','mae_id','medico_id'];
    public function mae(){
        return $this->belongsTo(Mae::class);
    }

    public function medico(){
        return $this->belongsTo(Medico::class);
    }
}


