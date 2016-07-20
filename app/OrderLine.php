<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_line';
    protected $fillable = array('ORDER_ID', 'TITLE', 'PRICE', 'QUANTITY', 'SKU', 'CREATED_AT', 'UPDATED_AT');

}
