<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wine extends Model
{
    use SoftDeletes;

    protected $table = 'pc';
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'color', 'type' , 'name', 'grape', 'winery', 'alcohol', 'date_of_production', 'date_of_bottling', 'Status'
    ];
}
