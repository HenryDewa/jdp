<?php 

class MoviesController extends BaseController {

	/**
	 * Display a listing of movies
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        $movies = Movie::with('ratings')
            ->orderBy('updated_at', 'DESC')
            ->paginate(10);

		return View::make('site/movies/index')
			->with('movies', $movies);
	}

	/**
	 * Show the form for creating a new movie
	 *
	 * @return Response
	 */
	public function create()
	{
		// build rating list
		$ratings = Rating::lists('rating', 'id');
		return View::make('movies.create')
			->with('title', 'Add Mew Movie')
			->with('ratings', $ratings);
	}

	/**
	 * Store a newly created movie in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Movie::validate(Input::all());

		if ($validator->fails())
		{
			return Redirect::to('movies/create')
				->withErrors($validator)
				->withInput();
		} else {

            // create new movie instance
			$movie = new Movie;

            // store inputs
			$movie->movie_title = Input::get('movie_title');
			$movie->director = Input::get('director');
			$movie->plot = Input::get('plot');
			$movie->release_year = Input::get('release_year');
			$movie->duration = Input::get('duration');
			$movie->rating_id = Input::get('rating_id');
			$movie->list_price = Input::get('list_price');
			$movie->discount_price = Input::get('discount_price');
			$movie->buy_button = Input::get('buy_button');
			$movie->published = Input::has('published');

            // save first so slug can be created for the filename
            $movie->save();

            // process uploaded image

            // get a reference to the image field
            $poster = Input::file('poster');

            // prepend timestamp to file name so it can be unique
            $filename = $movie->slug."-".time().".".$poster->getClientOriginalExtension();

            // resize image then save it
            $path = public_path('uploads/movies/'.$filename);
            Image::make($poster->getRealPath())->resize(468, 249)->save($path);
            $movie->poster = 'uploads/movies/'.$filename;
			$movie->save();
		}

		// redirect
		Session::flash('message', 'New movie added successfully!');
		return Redirect::to('movies');
	}

	/**
	 * Display the specified movie.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$movie = Movie::findOrFail($id);

		return View::make('movies.show', compact('movie'))
			->with('title', $movie->movie_title);
	}

	/**
	 * Show the form for editing the specified movie.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$movie = Movie::find($id);

		return View::make('movies.edit', compact('movie'))
			->with('title', $movie->movie_title);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$movie = Movie::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Movie::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$movie->update($data);

		return Redirect::route('movies.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Movie::destroy($id);

		return Redirect::route('movies.index');
	}

}