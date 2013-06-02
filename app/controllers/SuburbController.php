<?php

class SuburbController extends \BaseController {

	public function getIndex()
	{
		echo "index";
	}
	public function getAutoComplete()
	{
		$input = Input::all();

		$suburbs = Suburb::where('name', 'LIKE', $input['term'].'%')->orWhere('postcode', 'LIKE', $input['term'].'%')->take(12)->get(['postcode', 'name', 'state']);
		$suburbs = $suburbs->toArray();
		return json_encode(['postcodes' => $suburbs]);
	}

}