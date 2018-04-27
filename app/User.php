<?php

namespace App;


class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'dateNaissance', 'photo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*/
    protected $hidden = [
        'password', 'remember_token',
    ];
    /*/
}
