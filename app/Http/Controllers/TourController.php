<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Tour;
use App\Models\Attraction;

class TourController extends Controller
{
	public function index(){
		$tours = Tour::all();
		return view('dashboard/tours', ['tours' => $tours]);
	}
    public function create(){
    		$attractions = Attraction::all();
    	return view('create_tour', ['attractions' => $attractions]);
    }

    public function store(){	
    	$attributes = request()->validate([
            'description' => 'required',
            'cost' => 'required|digits_between:0, 1000000000',
            'date' => 'required|date|date_format:Y-m-d', 
            'attraction_id' => ['required', Rule::exists('attractions', 'id')]

        ]);

    	Tour::create($attributes);

    	return redirect('/dashboard/tours');
    }

     public function edit(Tour $tour){
     	$attractions = Attraction::all();
    	return view('edit_tour', ['tour' => $tour, 'attractions' => $attractions]);
    }

    public function update(Tour $tour){

    	$attributes = request()->validate([
            'description' => 'required',
            'cost' => 'required|digits_between:0, 1000000000',
            'date' => 'required|date|date_format:Y-m-d', 
            'attraction_id' => ['required', Rule::exists('attractions', 'id')]
        ]);
        $tour->update($attributes);
    	return back()->with('success', 'Tour Updated!');
    }

    public function destroy(Tour $tour){
  		$tour->delete();
    	echo json_encode(['success' => 'true', 'message' => 'Tour Deleted!']);	 
    }
}
