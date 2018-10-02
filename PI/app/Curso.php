<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function processos()
    {
        return $this->hasMany(Processo::class);
    }
}
