<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    protected $fillable = ['numero'];
    public $timestamps = false;

    public function episodios()
    {
        return $this->hasMany(Episodio::class);
    }

    public function tarefa()
    {
        return $this->belongsTo(Tarefa::class);
    }
}
