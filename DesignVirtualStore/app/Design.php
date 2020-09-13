<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    //Atributtes id, name, price, description, image, width, length, category_id
    protected $fillable = ['name','price','description','image','width','length','category_id'];

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


    public function getImage()
    {
        return $this->attributes['image'];
    }


    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }


    public function getWidth()
    {
        return $this->attributes['width'];
    }


    public function setWidth($width)
    {
        $this->attributes['width'] = $width;
    }


    public function getLength()
    {
        return $this->attributes['length'];
    }


    public function setLength($length)
    {
        $this->attributes['length'] = $length;
    }


    public function getCategoryId()
    {
        return $this->attributes['categoryId'];
    }


    public function setCategotyId($cId)
    {
        $this->attributes['categoryId'] = $cId;
    }


    public static function validate($request){
        $request->validate([
            "name" => "required",
            "price" => "required|numeric|gt:0",
            "description" => "required",
            "image" => "required|image|mimes:jpg,jpeg,png,gif,svg|max:2048",
            "width" => "required|gt:0",
            "length" => "required|gt:0"
        ]);
    }


}
