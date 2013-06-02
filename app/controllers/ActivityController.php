<?php

class ActivityController extends \BaseController {

	/**
     * Activity Repository
     *
     * @var Activity
     */
    protected $activity;

     public $restfull = true;

    public function __construct(Activity $activity)
    {
        $this->activity = $activity;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $activities = $this->activity->all();

        return View::make('activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
         $equipments = [];
        $input = Input::all();

        $input['user_id'] = Auth::user()->id;
        if (array_key_exists('equipment', $input)) {
             $equipments = $input['equipment'];
            unset($input['equipment']);
        }
       

        $validation = Validator::make($input, Activity::$rules);

        if ($validation->passes())
        {
            $activity = $this->activity->create($input);

            if ($activity) {
                if (count($equipments) > 0) {
                    foreach ($equipments as $equipment) {
                        $activity->equipment()->attach($equipment);
                    }
                }
            }

            return Redirect::route('activity.index');
        }

        return Redirect::route('activity.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $activity = $this->activity->findOrFail($id);

        return View::make('activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $activity = $this->activity->find($id);

        if (is_null($activity))
        {
            return Redirect::route('activities.index');
        }

        return View::make('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Activity::$rules);

        if ($validation->passes())
        {
            $activity = $this->activity->find($id);
            $activity->update($input);

            return Redirect::route('activities.show', $id);
        }

        return Redirect::route('activities.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->activity->find($id)->delete();

        return Redirect::route('activities.index');
    }

    /**
     * Display a search and listing
     */
    public function getFind()
    {
        $activities = $this->activity->all();

        return View::make('activities.find', compact('activities'));
    }

    /**
     * Allow a user to join an activity
     */
    public function getJoin($activityId)
    {
        $userId = Auth::user()->id;
        $activity = $this->activity->find($activityId);

        //$currentUsers =  $activity->labels()->pivot()->lists('label_id');
        if (!$activity->participants->contains($userId)) {
             $activity->participants()->attach($userId);
        }
       

        return Redirect::to('/activity/'.$activityId);
    }

    public function getMarkers($postcode)
    {
        $suburbs = Suburb::where('postcode', '=', $postcode)->get(['id']);
        $suburbs =  array_values($suburbs->toArray());
        $filter = [];
        $activities = [];

        foreach ($suburbs as $sub) {
            $filter[] = $sub['id'];
        }

        if (count($filter) > 0){

            $venues = Venue::whereIn('suburb_id', $filter)->get(['id']);
            $filter = [];

            foreach ($venues as $venue) {
                $filter[] = $venue['id'];
            }

            if (count($filter)) {
                $activities = Activity::with(['venue'])->whereIn('venue_id', $filter)->get();
            }
        }

       return ($activities);

    }

    public function postFind()
    {
        $input = Input::all();

        $activities = Activity::with(['gender' => function($query) {
            $query->where('id', '=', 0);
        }])->get();

        return View::make('activities.find')
            ->with('activities', $activities);
    }


    /**
     * Return json data of equipment for this acitiviy
     */
    public function getJson($id)
    {
        $activity = Activity::with(['venue', 'host', 'type'])->find($id);

        if ($activity) {
            return $activity;
        }   
    }

}