<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
    protected $fillable = ['id', 'nama', 'univ', 'email', 'role', 'updated_at'];


}
