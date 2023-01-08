<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    use HasFactory;

    protected $table = 'cafes';

    protected $fillable = [
        'name',
        'city',
        'address',
        'phone',
        'website',
        'image',
        'about'
    ];

    public function schedule()
    {
        return $this->hasMany(CafeSchedule::class);
    }

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
}
