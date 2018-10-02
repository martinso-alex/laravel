<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
