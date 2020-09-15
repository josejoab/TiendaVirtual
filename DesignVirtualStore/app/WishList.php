<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    //atributtes id, user_id
    protected $fillable = [];

    public function getId()
    {
        return $this->attributes['id'];
    }


    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }


    public function getUserId()
    {
        return $this->attributes['user_id'];
    }


    public function setUserId($uId)
    {
        $this->attributes['user_id'] = $uId;
    }


    public static function validate($request){
        $request->validate([

        ]);
    }


    public function wishDesign(){
        return $this->hasMany(WishDesign::class);
    }


}
