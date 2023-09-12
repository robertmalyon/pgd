<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'time', 'total_price', 'notes', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
