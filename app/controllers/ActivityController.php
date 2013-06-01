<?php

class ActivityController extends \BaseController {

	/**
     * Activity Repository
     *
     * @var Activity
     */
    protected $activity;

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
        $input = Input::all();

        $input['user_id'] = Auth::user()->id;
        $equipments = $input['equipment'];
        unset($input['equipment']);

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

        return View::make('activity.show', compact('activity'));
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
     * Return json data of equipment for this acitiviy
     */
    public function getAjaxEquipment($activityType)
    {
        $type = ActivityType::with('equipment')->where('id', '=', $activityType);

        return $type;
    }

}