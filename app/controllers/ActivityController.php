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
        $validation = Validator::make($input, Activity::$rules);

        if ($validation->passes())
        {
            $this->activity->create($input);

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

}