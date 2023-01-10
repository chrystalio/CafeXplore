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

    public function index(Request $request)
    {
        $cafes = Cafe::with(['rating']);

        if($request->has('search')){
            $cafes->where('name', $request->search);
        }

        $cafes = $cafes->get();
        $this->mappingCafe($cafes);
        return view('welcome', compact('cafes'));

    }

    public function store(StoreCafeRequest $request)
    {
        $times = explode('-', $request->times);
        $open = $times[0];
        $close = $times[1];
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        Cafe::create([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'phone' => $request->phone,
            'social_media' => $request->url,
            'website' => $request->website ?? null,
            'from'  => $days[$request->from],
            'till' => $days[$request->till],
            'open' => $open,
            'close' => $close
        ]);

        return redirect()->back();
    }

    public function CafeDetail(Cafe $cafe)
    {
        $cafe->load(['rating']);
        $cafe->averageRating = $this->ratingService->getAverageRating($cafe);

        return view('details', compact('cafe'));
    }

    private function mappingCafe($cafe)
    {
        $cafe->map(function($cafe){
            $cafe->averageRating = $this->ratingService->getAverageRating($cafe);
            return $cafe;
        });
    }
}
