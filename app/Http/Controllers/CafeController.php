<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Models\CafeSchedule;
use App\Services\RatingService;
use Illuminate\Http\Request;

class CafeController extends Controller
{
    protected $ratingService;

    public function __construct(RatingService $ratingService)
    {
        $this->ratingService = $ratingService;
    }

    public function store(Request $request)
    {
        $cafe = Cafe::create([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'phone' => $request->phone,
            'image' => $request->image ?? null,
            'webiste' => $request->website ?? null,
        ]);

        $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
        foreach($request->times as $key => $time){
            $time = explode('-', $time);
            $open = $time[0];
            $close = $time[1];
            CafeSchedule::create([
                'cafe_id' => $cafe->id,
                'day' => $days[$key],
                'open' => $open,
                'close' => $close,
            ]);
        }

        return redirect()->back();
    }


    public function index()
    {
        $cafes = Cafe::with(['rating','schedule'])->get();
        $cafes->map(function($cafe){
            $cafe->averageRating = $this->ratingService->getAverageRating($cafe);
            return $cafe;
        });
        return view('rating', compact('cafes'));
    }
}
