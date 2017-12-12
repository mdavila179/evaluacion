<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cargo extends Model
{
    const CREATED_AT = 'USER_fechacreado';
	const UPDATED_AT = 'USER_fechamodificado';
	const DELETED_AT = 'USER_fechaeliminado';
	protected $dates = ['USER_fechacreado', 'USER_fechamodificado', 'USER_fechaeliminado'];


    protected $fillable = [
    'nombre', 'iddepartamento'
    ];

    public function departamento()
	{
		$foreingKey = 'iddepartamento';
		return $this->belongsTo(departamento::class, $foreingKey);
	}
}
