<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';
    protected $fillable = ['id_po', 'nama', 'min_harga', 'max_harga', 'duration', 'desain', 'deskripsi'];

    /* 
     * Relation One to Many with list-fitur
     */
    public function listFitur()
    {
        return $this->hasMany('App\ListFitur', 'id_project', 'id');
    }
}
