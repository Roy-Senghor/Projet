<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoyaltyPoint extends Model
{
    protected $fillable = ['user_id', 'description', 'points', 'type'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}