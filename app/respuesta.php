<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class respuesta extends Model
{
    const CREATED_AT = 'USER_fechacreado';
	const UPDATED_AT = 'USER_fechamodificado';
	const DELETED_AT = 'USER_fechaeliminado';
	protected $dates = ['USER_fechacreado', 'USER_fechamodificado', 'USER_fechaeliminado'];


    protected $fillable = [
    'valor', 'fechacreado', 'iditem', 'idpersona'
    ];

    public function item()
	{
		$foreingKey = 'iditem';
		return $this->hasOne(item::class, $foreingKey);
	}

	public function persona()
	{
		$foreingKey = 'idpersona';
		return $this->hasOne(persona::class, $foreingKey);
	}
}
