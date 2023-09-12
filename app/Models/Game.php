<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'platform_id', 'asking_price', 'owner_id'];


    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

}
