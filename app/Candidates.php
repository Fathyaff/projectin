<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'candidates';
    protected $fillable = ['id_project', 'id_user', 'status', 'updated_at'];


}
