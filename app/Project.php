<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Este modelo usará la tabla "projects"

    // Para permitir asignación masiva de datos; si no sale error
    protected $fillable = ['title','description'];

    // Para buscar un proyecto por su título
    public function getRouteKeyName(){
        return 'title'; 
    }
}
