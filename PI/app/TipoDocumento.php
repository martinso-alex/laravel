<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $fillable = ['descricao'];

    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }
}
