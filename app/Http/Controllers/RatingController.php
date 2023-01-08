<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Cafe $cafe,Request $request)
    {
        Rating::create([
            'cafe_id' => $cafe->id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->back();
    }

    
}
