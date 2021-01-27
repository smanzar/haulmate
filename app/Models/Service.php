<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'services';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',  
        'default_icon_url',
        'active_icon_url',
        'order',
        'is_active'
    ];
}
