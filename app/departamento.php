<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    const CREATED_AT = 'USER_fechacreado';
	const UPDATED_AT = 'USER_fechamodificado';
	const DELETED_AT = 'USER_fechaeliminado';
	protected $dates = ['USER_fechacreado', 'USER_fechamodificado', 'USER_fechaeliminado'];


    protected $fillable = [
    'nombre', 'USER_creadopor', 'USER_modificadopor', 'USER_eliminadopor', 'idempresa', 'idempresa'
    ];

    public function empresa()
	{
		$foreingKey = 'idempresa';
		return $this->belongsTo(empresa::class, $foreingKey);
	}

}
