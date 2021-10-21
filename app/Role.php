<?php


namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'm_role';
    public $timestamps = false;
    protected $fillable = [
        'mr_id', 'mr_desc', 'mr_status', 'mr_create_user', 'mr_create_date', 'mr_update_user', 'mr_update_date'
    ];
}

// class User extends Authenticatable
// {
//     use HasFactory, Notifiable;

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     protected $fillable = [
//         'username', 'name', 'last_name', 'email', 'password', 'role_id', 'region_id', 'status_data'
//     ];

//     /**
//      * The attributes that should be hidden for arrays.
//      *
//      * @var array
//      */
//     protected $hidden = [
//         'remember_token',
//     ];

//     /**
//      * The attributes that should be cast to native types.
//      *
//      * @var array
//      */
//     protected $casts = [
//         'email_verified_at' => 'datetime',
//     ];

// }

