<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Services\TravelService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TravelController extends Controller
{
    protected $travelService;

    public function __construct(TravelService $travelService)
    {
        $this->travelService = $travelService;
    }


    public function all() {
        $travels = Travel::all();
        return view('account.travels' , ['travels' => $travels]);
    }

    public function add() {
        return view('account.travel');
    }

    public function change($id) {
        $travel = Travel::where("id", $id)->first();
        if($travel == null) {
            return redirect()->back();
        }

        return view('account.travel', ['travel' => $travel]);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'departure' => ['required', 'string', 'min:5', 'max:50'],
            'destination' => ['required', 'string', 'min:5', 'max:50'],
            'dateOfDeparture' => ['required'],
            'numberOfPassengers' => ['required'],
            'price' => ['required'],
        ]);
        if ($validator->fails()) {
            return redirect('/travels');
        }

        $travel = new Travel([
            'departure' => $request->input('departure'),
            'destination' => $request->input('destination'),
            'dateOfDeparture' => $request->input('dateOfDeparture'),
            'numberOfPassengers' => $request->input('numberOfPassengers'),
            'price' => $request->input('price'),
            'user_id' => 1,
        ]);

        $travel->save();

        return redirect('/travels');
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'departure' => ['required', 'string', 'min:5', 'max:50'],
            'destination' => ['required', 'string', 'min:5', 'max:50'],
            'dateOfDeparture' => ['required'],
            'numberOfPassengers' => ['required'],
            'price' => ['required'],
        ]);
        if ($validator->fails()) {
            return redirect()->back();
        }

        $travel = Travel::where("id", $id)->first();
        if($travel == null) {
            return redirect()->back();
        }

        $travel->departure = $request->input('departure');
        $travel->destination =$request->input('destination');
        $travel->dateOfDeparture = $request->input('dateOfDeparture');
        $travel->numberOfPassengers = $request->input('numberOfPassengers');
        $travel->price = $request->input('price');

        $travel->save();

        return redirect('/travels');
    }

    public function search(Request $request) {
        $travels = $this->travelService->search(
            $request->input('departure'),
            $request->input('destination')
        );

        return view('showcase.search', ['travels' => $travels]);
    }

    public function deletedata(Request $request,$id)
    {
        $ob=Travel::find($id);
        $ob->delete();
        return redirect('/travels');
    }
    

}
