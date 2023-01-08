<?php 

namespace App\Services;

use App\Models\Cafe;
use App\Models\Rating;


class RatingService
{
    public function getAverageRating(Cafe $cafe)
    {
        $ratings = $cafe->rating;
        $averageRating = 0;
        $count = 0;

        foreach ($ratings as $rating) {
            $averageRating += $rating->rating;
            $count++;
        }

        if ($count > 0) {
            $averageRating = $averageRating / $count;
        }

        return $averageRating;
           
    }
}




?>