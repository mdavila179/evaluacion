<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
  const CREATED_AT = 'USER_fechacreado';
	const UPDATED_AT = 'USER_fechamodificado';
	const DELETED_AT = 'USER_fechaeliminado';
	protected $dates = ['USER_fechacreado', 'USER_fechamodificado', 'USER_fechaeliminado'];


    protected $fillable = [
    'nombre', 'descripcion', 'tipo', 'USER_creadopor', 'USER_modificadopor', 'USER_eliminadopor', 'idencuesta'
    ];

	public function encuesta()
	{
		$foreingKey = 'idencuesta';
		return $this->belongsTo(encuesta::class, $foreingKey);
	}
}
