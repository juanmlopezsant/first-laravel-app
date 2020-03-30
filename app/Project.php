<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Este modelo usará la tabla "projects"

    // Para permitir asignación masiva de datos, no importa cuantos elementos enviemos a actualizar, sólo lo harán estos; si no sale error
    protected $fillable = ['title','description'];

    // Es para hacer lo contrario a fillable:
    // $guarded

    // Para buscar un proyecto por su título
    public function getRouteKeyName(){
        return 'title'; 
    }
}
