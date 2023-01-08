<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        Rating::create([
            'cafe_id' => $request->cafe_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->back();
    }

    
}
