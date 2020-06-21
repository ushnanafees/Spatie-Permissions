<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddSalesFunnelModel extends Model
{
    protected $table='add_funnel';
    protected $primarykey='id';

    protected $fillable = ['id','ae' ,'customer', 'lineofbusiness','quantity',
        'rev','base_stretch','probability','city','opening_quarter','opening_week','closing_quarter',
        'closing_week','remarks',];
    public $timestamps = false;
}
