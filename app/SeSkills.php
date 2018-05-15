<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeSkills extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'se_skills';
    protected $fillable = ['id_users', 'nama_skill'];

    /* 
     * Relation One to Many (inverse) with users
     */
    public function users()
    {
        return $this->belongsTo('App\Users', 'id', 'id_users');
    }
}
