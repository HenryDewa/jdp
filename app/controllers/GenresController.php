<?php

class GenresController extends \BaseController {

	/**
	 * Display a listing of genres
	 *
	 * @return Response
	 */
	public function index()
	{
		$genres = Genre::all();

		return View::make('genres.index', compact('genres'));
	}

	/**
	 * Show the form for creating a new genre
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('genres.create');
	}

	/**
	 * Store a newly created genre in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Genre::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Genre::create($data);

		return Redirect::route('genres.index');
	}

	/**
	 * Display the specified genre.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$genre = Genre::findOrFail($id);

		return View::make('genres.show', compact('genre'));
	}

	/**
	 * Show the form for editing the specified genre.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$genre = Genre::find($id);

		return View::make('genres.edit', compact('genre'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$genre = Genre::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Genre::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$genre->update($data);

		return Redirect::route('genres.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Genre::destroy($id);

		return Redirect::route('genres.index');
	}

}