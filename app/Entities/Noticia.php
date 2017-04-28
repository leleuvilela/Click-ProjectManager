<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Noticia extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'titulo',
        'foto_id',
        'conteudo',
    ];

    public function foto()
    {
        return $this->belongsTo(Foto::class);
    }

}