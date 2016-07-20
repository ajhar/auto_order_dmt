<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingCarrier extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shipping_carrier';
    protected $fillable = array('CARRIER_NAME', 'SERVICE_NAME', 'PACKAGE_NAME','CREATED_AT', 'UPDATED_AT');

}
