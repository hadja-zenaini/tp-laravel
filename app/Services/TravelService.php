<?php
namespace App\Services;

use App\Models\Travel;
use Illuminate\Database\Eloquent\Collection;

class TravelService
{
    /**
     * To search travels
     *
     * @param $departure
     * @param $destination
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function search($departure, $destination): Collection  {
        return Travel::where('departure', $departure)
            ->where('destination', $destination)
            ->get();
    }
}
