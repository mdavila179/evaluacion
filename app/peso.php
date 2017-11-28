<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peso extends Model
{

    protected $fillable = [
    'valor', 'tipo', 'iditem'
    ];

     public function item()
	{
		$foreingKey = 'iditem';
		return $this->hasOne(item::class, $foreingKey);
	}

}
