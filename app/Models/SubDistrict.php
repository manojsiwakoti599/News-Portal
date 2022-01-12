<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDistrict extends Model
{
    use HasFactory;

    protected $table = 'subdistricts';

    public function district(){
        return $this->belongsTo(district::class, 'district_id');
    }
}
