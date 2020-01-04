<?php

namespace App\Models\Seguridad;

use App\Models\Admin\Rol;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Session;

class Usuario extends Authenticatable
{
    use Notifiable;
    protected $remember_token = false;

    protected $table = 'usuario';

    protected $fillable = [
        'usuario', 'nombre', 'email', 'password'
    ];

    public function roles(){
        return $this->belongsToMany(Rol::class,'usuario_rol');
    }

    public function setSession($roles){
        if (count($roles) == 1) {
            Session::put([
                'rol_id' => $roles[0]['id'],
                'rol_nombre' => $roles[0]['nombre'],
                'usuario' => $this->usuario,
                'usuario_id' => $this->id,
                'nombre_usuario' => $this->nombre
            ]);
        }
    }

    public function setPasswordAttribute($pass){
        $this->attributes['password'] = Hash::make($pass);
    }
}
