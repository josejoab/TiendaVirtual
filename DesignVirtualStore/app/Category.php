<?php
/**
    *Autor: Kevin Herrera
*/

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Desing;

class Category extends Model
{
    //Atributtes id, name, description
    protected $fillable = ['name','description'];

    public function getId()
    {
        return $this->attributes['id'];
    }


    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }


    public function getName()
    {
        return $this->attributes['name'];
    }


    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }


    public function getDescription()
    {
        return $this->attributes['description'];
    }

    
    public function setDescription($desc)
    {
        $this->attributes['description'] = $desc;
    }


    public static function validate($request){
        $request->validate([
            "name" => "required",
            "description" => "required"
        ]);
    }


    public function designs(){
        return $this->hasMany(Design::class);
    }


}
