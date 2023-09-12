<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    use HasFactory;

    protected $fillable = ['game_id', 'sale_id', 'sold_price'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
