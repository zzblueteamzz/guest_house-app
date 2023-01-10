<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $fillable = ['house_types_id','location_id','name','beds_count','rooms_count'];

    public function house_type()
    {
        return $this->belongsTo(HouseType::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
