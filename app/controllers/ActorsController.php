<?php

class ActorsController extends \BaseController {

	/**
	 * Display a listing of actors
	 *
	 * @return Response
	 */
	public function index()
	{
		$actors = Actor::all();

		return View::make('actors.index', compact('actors'));
	}

	/**
	 * Show the form for creating a new actor
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('actors.create');
	}

	/**
	 * Store a newly created actor in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Actor::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Actor::create($data);

		return Redirect::route('actors.index');
	}

	/**
	 * Display the specified actor.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$actor = Actor::findOrFail($id);

		return View::make('actors.show', compact('actor'));
	}

	/**
	 * Show the form for editing the specified actor.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$actor = Actor::find($id);

		return View::make('actors.edit', compact('actor'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$actor = Actor::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Actor::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$actor->update($data);

		return Redirect::route('actors.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Actor::destroy($id);

		return Redirect::route('actors.index');
	}

}