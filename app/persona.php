<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    const CREATED_AT = 'USER_fechacreado';
	const UPDATED_AT = 'USER_fechamodificado';
	const DELETED_AT = 'USER_fechaeliminado';
	protected $dates = ['USER_fechacreado', 'USER_fechamodificado', 'USER_fechaeliminado'];


    protected $fillable = [
    'dni', 'nombre', 'email', 'USER_creadopor', 'USER_modificadopor', 'USER_eliminadopor', 'idcargo', 'idusuario', 'idempresa'
    ];

    public function cargo()
	{
		$foreingKey = 'idcargo';
		return $this->belongsTo(cargo::class, $foreingKey);
	}

	public function usuario()
	{
		$foreingKey = 'idusuario';
		return $this->belongsTo(User::class, $foreingKey);
	}

	public function empresa()
	{
		$foreingKey = 'idempresa';
		return $this->belongsTo(empresa::class, $foreingKey);
	}

	public function scopePersonas($query,$scope='')
	{		
		return $query->where('idempresa',$scope);
		
	}
}
