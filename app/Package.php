<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'title',
        'price',
        'promo',
        'registered',
        'power',
        'disk_space',
        'bandwidth',
        'databases',
        'addon_domain',
        'free_domain',
        'backup',
        'free_ssl',
        'pop3_email',
        'name_server',
        'mail_protection',
        'support_priority'
    ];
}
