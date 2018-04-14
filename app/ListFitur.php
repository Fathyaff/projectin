<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListFitur extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'list_fitur';
    protected $fillable = ['id_project', 'nama_fitur'];

    /* 
     * Relation One to Many (inverse) with projects
     */
    public function projects()
    {
        return $this->belongsTo('App\Projects', 'id', 'id_project');
    }
}
