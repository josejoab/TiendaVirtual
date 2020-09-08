<?php

use Illuminate\Database\Eloquent\Model;

class Admin extends Model{
    
    //attributes id, nombre, apellido, nombredeusuario, correo, celular, contraseña
    protected $fillable = ['name','lastname','celphone','adminname','email','password'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
