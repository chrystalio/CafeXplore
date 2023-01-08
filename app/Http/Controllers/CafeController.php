<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Models\CafeSchedule;
use Illuminate\Http\Request;
use App\Services\RatingService;
use App\Http\Requests\StoreCafeRequest;

class CafeController extends Controller
{
    protected $ratingService;

    public function __construct(RatingService $ratingService)
    {
        $this->ratingService = $ratingService;
    }

    public function store(StoreCafeRequest $request)
    {
        $times = explode('-', $request->times);
        $open = $times[0];
        $close = $times[1];

        Cafe::create([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'phone' => $request->phone,
            'social_media' => $request->social_media,
            'website' => $request->website ?? null,
            'from'  => $request->from,
            'till' => $request->till,
            'open' => $open,
            'close' => $close
        ]); 

        return redirect()->back();
    }


    public function index(Request $request)
    {
        $cafes = Cafe::with(['rating']);
        
        if($request->has('search')){
            $cafes->where('name', $request->name);
        }   
        
        $cafes = $cafes->get();
        $this->mappingCafe($cafes);
        return view('cafe.index', compact('cafes'));

    }

    public function CafeDetail(Cafe $cafe)
    {
        $cafe->load(['rating']);
        $this->mappingCafe($cafe);

        return view('cafe.detail', compact('cafe'));
    }

    private function mappingCafe($cafe)
    {
        $cafe->map(function($cafe){
            $cafe->averageRating = $this->ratingService->getAverageRating($cafe);
            return $cafe;
        });
    }
}
