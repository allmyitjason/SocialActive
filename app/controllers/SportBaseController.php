<?php 

class SportBaseController extends BaseController
{
	protected $repository;
	protected $routename;
	protected $classname;

	public function __construct($repository)
	{
		$this->repository = $repository;

        $fullname_with_namespace = get_class($this->repository);
		$this->classname = \Str::lower(substr(substr($fullname_with_namespace, strrpos($fullname_with_namespace, '\\')),1));
		$this->routename = \Str::lower(\Str::plural($this->classname));
	}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() 
    {
        ${$this->routename} = $this->repository->all();

        return View::make($this->routename.'.index', compact("{$this->routename}"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make($this->routename.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($input = null)
    {
        if (is_null($input)) {
             $input = array_except(Input::all(), 'codeception_added_auto_submit');
        }

        $obj = $this->repository->create($input);
        
        if ($obj->save())
        {
            return Redirect::route($this->routename.'.index');
        }

        return Redirect::route($this->routename.'.create')
            ->withInput()
            ->withErrors($obj->errors())
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
        ${$this->classname} = $this->repository->findOrFail($id);

        return View::make($this->routename.'.show', compact("{$this->classname}"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        ${$this->classname} = $this->repository->find($id);

        if (is_null(${$this->classname}))
        {
            return Redirect::route($this->routename.'.index');
        }

        return View::make($this->routename.'.edit', compact("{$this->classname}"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, $input = null)
    {
        if (is_null($input)) {
            $input = array_except(Input::all(), 'codeception_added_auto_submit');
        }

        ${$this->classname} = $this->repository->find($id);

        if (${$this->classname}->update($input))
        {
            return Redirect::route($this->routename.'.index')
                ->with('message', 'Updated Successfully.');
        }

        return Redirect::route($this->routename.'.edit', $id)
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
        $this->repository->find($id)->delete();

        return Redirect::route($this->routename.'.index');
    }

    /**
     * Show confirmation for deleting resource 
     *
     * @param int $id
     * @return Response
     */

	public function delete($id)
	{
		${$this->classname} = $this->repository->find($id);
		
		return View::make('_generic.delete')->with('routename',"{$this->routename}")->with("obj", ${$this->classname});
	}	
}