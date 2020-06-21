<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesFunnelModel extends Model
{
    protected $table='add_orders';
    protected $fillable = ['id','po_number' ,'client_name', 'value','date',];
    public $timestamps = false;
}
