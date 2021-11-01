<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $appends = ['display_name'];
    protected $fillable = [
        'name',
        'email',
        'password',
        'nombres',
        'apellidos',
        'direccion',
        'cedula',
        'celular',
        'categoria_id',
        'pais_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function getUserAdmin()
    {
        $user = User::where('profile','Administrador')->first();
        return $user;
    }

    public function getDisplayNameAttribute()
    {
        return $this->nombres.' '.$this->apellidos;
    }

    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
