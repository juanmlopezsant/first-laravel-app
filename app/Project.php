<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Este modelo usará la tabla "projects"

    // Para buscar un proyecto por su título
    public function getRouteKeyName(){
        return 'title'; 
    }
}
