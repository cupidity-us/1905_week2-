<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public $primaryKey="u_id";
    protected $table = 'user';
    protected $guarded = [];
    public $timestamps = false;   
} 
