<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedProject extends Model
{
    protected $fillable = ['name', 'owner', 'client', 'sector', 'details', 'scope', 'detailedScope', 'image'];
}
