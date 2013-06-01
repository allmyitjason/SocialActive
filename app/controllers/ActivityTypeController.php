<?php

class ActivityTypeController extends \BaseController {

	/**
     * ActivityType Repository
     *
     * @var ActivityType
     */
    protected $activityType;

    public $restfull = true;

    public function __construct(ActivityType $activityType)
    {
        $this->activityType = $activityType;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $activities = $this->activityType->all();

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
        $validation = Validator::make($input, ActivityType::$rules);

        if ($validation->passes())
        {
            $this->activityType->create($input);

            return Redirect::route('activities.index');
        }

        return Redirect::route('activities.create')
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
        $activityType = $this->activityType->findOrFail($id);

        return View::make('activities.show', compact('activityType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $activityType = $this->activityType->find($id);

        if (is_null($$activityType))
        {
            return Redirect::route('activities.index');
        }

        return View::make('activities.edit', compact('activityType'));
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
        $validation = Validator::make($input, ActivityType::$rules);

        if ($validation->passes())
        {
            $activityType = $this->activityType->find($id);
            $activityType->update($input);

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
        $this->activityType->find($id)->delete();

        return Redirect::route('activities.index');
    }


    /**
     * Return json data of equipment for this acitiviy
     */
    public function getEquipment($id)
    {
        $type = $this->activityType->find($id);

        //return Form::select('size', array('L' => 'Large', 'M' => 'Medium', 'S' => 'Small'), array('S', 'M'), array('multiple'));
        if ($type) {
            //$data = Former::select('equipment', null, null, null, array('multiple'))->fromQuery($type->equipment()->get(), 'equipName', 'equipment.id');
            return $type->equipment()->get(['equipName', 'equipment.id']);
        }
    }

}