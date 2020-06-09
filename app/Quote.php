<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'service', 'cityOfDeparture', 'deliveryCity', 'incoterms', 'weight', 'height', 'width', 'length', 'condition', 'procurementType', 'item', 'quantity', 'manufacturer', 'origin', 'document', 'featured'];
}
