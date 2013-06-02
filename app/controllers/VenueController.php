<?php

class VenueController extends \BaseController {

	public function getIndex()
	{

		$venues = Venue::all();

		return View::make('venues.index')
			->with('venues', $venues);
	}

	public function postIndex()
	{
		$input = Input::all();

		
		$location = explode(',', $input['postcode']);

		/*$venues = Venue::with(['type' => function($query) use ($input) {

			if (array_key_exists('type', $input)) {
				//$query->where('id', '=', $input['type']);
			}
			
		}]);

		if (count($location) == 3) {
			$venues->where('address', 'LIKE', '%'.$location[1].'%');
		}

		$venues->get();*/

		$venues = Venue::where('address', 'LIKE', '%'.$location[1].'%')->get();

		return View::make('venues.index')
			->with('venues', $venues);
	}

	public function getSetVenue($venueId)
	{
		Session::put('venueId', $venueId);

		return Redirect::to('/activity/create');
	}

}