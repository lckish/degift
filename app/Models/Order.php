<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Order extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    const ORDER_BUILD = 1;
    const ORDER_WAY = 2;
    const ORDER_DELIVERED = 3;
    const ORDER_UNKNOWN ="";

    protected $table = 'orders';
    protected $guarded = false;


    static function getOrders(){
        return [
            self::ORDER_BUILD => 'В сборке',
            self::ORDER_WAY => 'В пути',
            self::ORDER_DELIVERED => 'Прибыл в пункт назначения',
            self::ORDER_UNKNOWN => 'Неизвестно',
        ];
    }

    public function getOrderTitleAttribute(){
        return self::getOrders()[$this->payment_status];
    }
}
