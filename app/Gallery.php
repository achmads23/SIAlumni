<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'galleries';
    
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'foto', 'deskripsi'];

}
