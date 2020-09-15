<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\Design;
//autor: José Joab Romero Humba
class DesignOrder extends Model
{
    //Atributtes id, quantity, subTotalPrice, orderId, designId
    protected $fillable = ['quantity','subTotalPrice'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getQuantity()
    {
        return $this->attributes['quantity'];
    }

    public function setQuantity($quantity)
    {
        $this->attributes['quantity'] = $quantity;
    }

    public function getSubTotalPrice()
    {
        return $this->attributes['subTotalPrice'];
    }

    public function setSubTotalPrice($subTotalPrice)
    {
        $this->attributes['subTotalPrice'] = $subTotalPrice;
    }

    public function getTotalPrice()
    {
        return $this->attributes['totalPrice'];
    }

    public function setTotalPrice($totalPrice)
    {
        $this->attributes['totalPrice'] = $totalPrice;
    }

    public function getOrderId()
    {
        return $this->attributes['orderId'];
    }

    public function setOrderId($orderId)
    {
        $this->attributes['orderId'] = $orderId;
    }

    public function getDesignId()
    {
        return $this->attributes['designId'];
    }

    public function setDesignId($designId)
    {
        $this->attributes['designId'] = $designId;
    }

    public static function validate($request){
        $request->validate([
            "quantity" => "required|numeric|gt:0",
            "subtotalPrice" => "required|numeric|gt:0"
        ]);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function design(){
        return $this->belongsTo(Design::class);
    }
}
