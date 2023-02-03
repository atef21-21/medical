<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admins';
//    protected $fillable = ['name',];
protected $guarded = [];
    protected $hidden = ['password'];

    public function patient()
    {
        return $this->hasMany(User::class);
    }


}
