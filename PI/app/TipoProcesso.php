<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProcesso extends Model
{
    protected $fillable = ['descricao'];

    public function processos()
    {
        return $this->hasMany(Processo::class);
    }
}
