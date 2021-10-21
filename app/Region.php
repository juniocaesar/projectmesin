<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'm_region';
    public $timestamps = false;
    protected $fillable = [
        'mre_id', 'mre_desc', 'mre_status', 'mre_create_user', 'mre_create_date', 'mre_update_user', 'mre_update_date'
    ];
}
