<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DesingOrder;
//autor: José Joab Romero Humba
class Order extends Model
{
    //Atributtes id, orderDate(created_at), paymentType, totalPrice, userId
    protected $fillable = ['paymentType','totalPrice'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getOrderDate()
    {
        return $this->attributes['created_at'];
    }

    public function setOrderDate($orderDate)
    {
        $this->attributes['created_at'] = $orderDate;
    }

    public function getPaymentType()
    {
        return $this->attributes['paymentType'];
    }

    public function setPaymentType($paymentType)
    {
        $this->attributes['paymentType'] = $paymentType;
    }

    public function getTotalPrice()
    {
        return $this->attributes['totalPrice'];
    }

    public function setTotalPrice($totalPrice)
    {
        $this->attributes['totalPrice'] = $totalPrice;
    }

    public function getUserId()
    {
        return $this->attributes['userId'];
    }

    public function setUserId($userId)
    {
        $this->attributes['userId'] = $userId;
    }

    public static function validate($request){
        $request->validate([
            "paymentType" => "required",
            "totalPrice" => "required|numeric|gt:0"
        ]);
    }

    public function desingOrder(){
        return $this->hasMany(DesingOrder::class);
    }

}
