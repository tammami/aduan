<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'users';
    protected $guarded = [];
    public $timestamps = false;
}
