<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TmpPeripheral extends Model
{
    protected $fillable = [
        'barcode',
        'user_id'
    ];

    public function pic()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
