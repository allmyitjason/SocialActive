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
        $activitys = $this->activity->all();

        return View::make('activitys.index', compact('activitys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('activitys.create');
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

            return Redirect::route('activitys.index');
        }

        return Redirect::route('activitys.create')
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

        return View::make('activitys.show', compact('activity'));
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
            return Redirect::route('activitys.index');
        }

        return View::make('activitys.edit', compact('activity'));
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

            return Redirect::route('activitys.show', $id);
        }

        return Redirect::route('activitys.edit', $id)
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

        return Redirect::route('activitys.index');
    }

}