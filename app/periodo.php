<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class periodo extends Model
{
    
    protected $fillable = [
    'periodo', 'estado', 'idempresa'
    ];

    public function empresa()
	{
		$foreingKey = 'idempresa';
		return $this->hasMany(empresa::class, $foreingKey);
	}
}
