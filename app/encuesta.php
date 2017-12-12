<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class encuesta extends Model
{
    const CREATED_AT = 'ENCU_fechacreado';
	const UPDATED_AT = 'ENCU_fechamodificado';
	const DELETED_AT = 'ENCU_fechaeliminado';
	protected $dates = ['ENCU_fechacreado', 'ENCU_fechamodificado', 'ENCU_fechaeliminado'];


    protected $fillable = [
    'titulo', 'descripcion', 'fechapublicacion', 'fechavigencia', 'estado', 'NCU_creadopor', 'ENCU_modificadopor', 'ENCU_eliminadopor'
    ];

    public function empresa()
	{
		$foreingKey = 'idempresa';
		return $this->belongsTo(empresa::class, $foreingKey);
	}

}
