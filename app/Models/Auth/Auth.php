<?php

namespace App\Models\Auth;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    protected $table = "auth";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

}
