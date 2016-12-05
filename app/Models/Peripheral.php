<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peripheral extends Model
{
    protected $fillable = [
        'barcode',
        'name',
        'type_id',
        'location_id',
        'user_id',
        'status'
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function pic()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
