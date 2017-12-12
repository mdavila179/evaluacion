<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
	const CREATED_AT = 'USER_fechacreado';
	const UPDATED_AT = 'USER_fechamodificado';
	const DELETED_AT = 'USER_fechaeliminado';
	protected $dates = ['USER_fechacreado', 'USER_fechamodificado', 'USER_fechaeliminado'];


    protected $fillable = [
    'ruc', 'razon_social', 'USER_creadopor', 'USER_modificadopor', 'USER_eliminadopor', 'idempresa'
    ];

    public function getpersona()
	{
		$foreingKey = 'idempresa';
		return $this->belongsTo(persona::class, $foreingKey);
	}
}
