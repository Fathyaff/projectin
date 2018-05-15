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
    protected $fillable = ['nama', 'univ', 'email', 'role', 'updated_at'];

    /* 
     * Relation One to Many with se skills
     */
    public function seSkills()
    {
        return $this->hasMany('App\SeSkills', 'id_users', 'id');
    }
}
