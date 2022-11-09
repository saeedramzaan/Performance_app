<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Code extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'unique_code',
    ];

    /**
     * The attributes are excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}