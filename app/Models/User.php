<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;



class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

      // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function solicitacao()
    {      
        return $this->hasMany(Solicitacao::class, 'user_id', 'id');
    }


    public function redessociais()
    {

        return $this->hasOne(UsuarioRedesSociais::class, 'user_id', 'id');
    }

    public function validateUsuario($user){

       if ($user->name==null ||$user->lastname==null ||$user->endereco==null ||$user->numero==null ||$user->estado==null ||$user->cidade==null ||$user->cpfCnpj==null ||$user->celular==null ||$user->cep==null){
            return true;
       }else{
         return false; 
       }
       
        
    }

}
