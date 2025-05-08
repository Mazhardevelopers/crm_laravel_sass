<?php

namespace Horsefly;

use Illuminate\Database\Eloquent\Model;

class IpAddress extends Model
{
    protected $table = 'ip_addresses';
    protected $fillable = [
        'user_id', 
        'ip_address', 
        'mac_address', 
        'device_type'
    ];
}
