<?php

namespace App\Models\Hotel\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelChainMaster extends Model
{
    use HasFactory;
    protected $table = _HOTEL_CHAIN_MASTER_;
    protected $primarykey = 'id'; 
    protected $fillable = [
        'Name',
        'Location',
        'HotelWebsite',
        'SelfSupplier',
        'ContactType',
        'ContactName',
        'ContactDesignation',
        'ContactCountryCode',
        'ContactMobile',
        'ContactEmail',
        'AddedBy',
        'UpdatedBy',
        'Status',
        'created_at',
        'updated_at',
       
       
    ];
    public $timestamps = false;
}
