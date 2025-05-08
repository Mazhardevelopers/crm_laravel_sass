<?php

namespace Horsefly;

use Illuminate\Database\Eloquent\Model;

class LoginDetail extends Model
{
    protected $table = 'login_details';
    protected $fillable = [
        'user_id',
        'ip_address',
        'login_at',
        'logout_at'
    ];
}
