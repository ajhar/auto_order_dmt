<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order';
    protected $fillable = array('ORDER_ID','ORDER_CHANNEL','SHIPPING_ID','TRACKING_NUMBER','CREATED_AT','UPDATED_AT');

}
