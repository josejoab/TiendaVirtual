<?php
/**
    *Autor: Kevin Herrera
*/

namespace App;
use App\WishList;
use App\Design;

use Illuminate\Database\Eloquent\Model;

class WishDesign extends Model
{
    //atributtes id, wishList_id, design_id
    protected $fillable = [];

    public function getId()
    {
        return $this->attributes['id'];
    }


    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }


    public function getWishListId()
    {
        return $this->attributes['wishList_id'];
    }


    public function setWishListId($wLiId)
    {
        $this->attributes['wishList_id'] = $wLiId;
    }


    public function getDesignId()
    {
        return $this->attributes['design_id'];
    }


    public function setDesignId($dId)
    {
        $this->attributes['design_id'] = $dId;
    }


    public function wishList(){
        return $this->belongsTo(WishList::class);
    }


    public function design(){
        return $this->hasMany(Design::class);
    }


}
