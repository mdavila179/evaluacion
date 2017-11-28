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
    'dni', 'nombre', 'email', 'USER_creadopor', 'USER_modificadopor', 'USER_eliminadopor', 'idcargo', 'idusuario'
    ];

    public function cargo()
	{
		$foreingKey = 'idcargo';
		return $this->hasOne(cargo::class, $foreingKey);
	}

	public function usuario()
	{
		$foreingKey = 'idusuario';
		return $this->hasOne(User::class, $foreingKey);
	}

	public function item()
	{
		$foreingKey = 'iditem';
		return $this->hasMany(item::class, $foreingKey);
	}
}
