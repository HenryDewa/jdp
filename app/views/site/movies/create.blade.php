@extends('layouts.main')

@section('content')
	<h1>Add New Movie</h1>

	@if($errors->has())
		<ul><li class="alert alert-warning">{{ $errors->count() }} Error(s) Found! Please see below</li></ul>
	@endif

	{{ Form::open(array('route' => 'movies.store', 'class'=>'form-horizontal', 'files' => 'true')) }}
		<div class="form-group">
			{{ Form::text('movie_title', null, array('class'=> 'form-control', 'placeholder' => 'Enter movie title here')) }}
			{{ $errors->first('movie_title', '<li class="alert alert-danger">:message</li>') }}
		</div>
		<div class="form-group">
			{{ Form::label('director', 'Director') }}
			{{ Form::text('director', 'Tutu Demosthene', array('class'=> 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::textarea('plot', null, array('class'=> 'form-control', 'rows' => '5', 'placeholder' => 'Enter movie description')) }}
		</div>
		<div class="form-group ">
			{{ Form::label('release_year', 'Release Year') }}
			{{ Form::text('release_year', null, array('class'=> 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('duration', 'Duration') }}
			{{ Form::text('duration', null, array('class'=> 'form-control')) }}
			{{ $errors->first('duration', '<li class="alert alert-danger">:message</li>') }}
		</div>
		<div class="form-group">
			{{ Form::label('rating_id', 'Rating') }}
			{{ Form::select('rating_id', $ratings, '6', array('class'=> 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('list_price', 'List Price') }}
			<div class="input-group">
				<span class="input-group-addon">$</span>
				{{ Form::text('list_price', null, array('class'=> 'form-control')) }}
			</div>
			{{ $errors->first('list_price', '<li class="alert alert-danger">:message</li>') }}
		</div>
		<div class="form-group">
			{{ Form::label('discount_price', 'Discount Price') }}
			<div class="input-group">
				<span class="input-group-addon">$</span>
				{{ Form::text('discount_price', null, array('class'=> 'form-control')) }}
			</div>
			{{ $errors->first('discount_price', '<li class="alert alert-danger">:message</li>') }}
		</div>
		<div class="form-group">
			{{ Form::textarea('trailer', null, array('class'=> 'form-control', 'rows' => '3', 'placeholder' => 'Paste trailer code here')) }}
		</div>
		<div class="form-group">
			{{ Form::textarea('buy_button', null, array('class'=> 'form-control', 'rows' => '6', 'placeholder' => 'Enter Paypal code here')) }}
			<!-- span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span-->
		</div>
		<div class="form-group">
			{{ Form::file('poster'); }}
			{{ $errors->first('poster', '<li class="alert alert-danger">:message</li>') }}
		</div>
		<div class="form-group">
			{{ Form::label('published', 'Published?') }}
			{{ Form::checkbox('published') }}
		</div>
		<div class="form-group">
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
			<a href="{{ URL::route('movies.index') }}" class="btn btn-large">Cancel</a>
		</div>

	{{ Form::close() }}

@stop