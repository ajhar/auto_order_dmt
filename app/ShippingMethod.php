<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shipping_method';
    protected $fillable = array('CREATED_AT', 'UPDATED_AT');

}
