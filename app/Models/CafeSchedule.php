<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CafeSchedule extends Model
{
    use HasFactory;

    protected $table = 'cafe_schedules';

    protected $fillable = [
        'cafe_id',
        'day',
        'open',
        'close',
    ];

    public function cafe()
    {
        return $this->belongsTo(Cafe::class);
    }
}
