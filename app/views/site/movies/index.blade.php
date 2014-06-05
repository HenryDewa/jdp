@extends('site.layouts.main')

@section('content')

    <h1>All Movies</h1>
    <p><a href="{{ URL::route('movies.create') }}">Add New Movie</a></p>
    <div class="table-responsive">
    	<table class="table table-hover">
            <thead>
                <tr>
                    <th>Movie Title</th>
                    <th>List</th>
                    <th>Discount</th>
                    <th>Length</th>
                     <th>Rated</th>
                    <th>Status</th>
                    <th colspan="3"></th>
                </tr>
            </thead>
            <tbody>
            	@foreach ($movies as $movie)
                    <?php // if( $movie->published) { ?>
        	            <tr>
        	                <td>{{ $movie->movie_title }}</td>                        
                            <td>${{ $movie->list_price }}</td>
                            <td >${{ $movie->discount_price }}</td>	                
        	                <td>{{ $movie->duration }}  min.</td>
                            {{-- <td>{{ $movie->ratings->rating }}</td> --}}
                            <td>{{ $movie->published ? '<span class="online">Online</span>' : '<span class="offline">Offline</span>' }}</td>
                            <td>{{ link_to_route('movies.show', '', array($movie->id), array('class' => 'glyphicon glyphicon-search')) }}</td>
                                <td>{{ link_to_route('movies.edit', '', array($movie->id), array('class' => 'glyphicon glyphicon-edit')) }}</td>
                            <td>
                                {{ Form::open(array('url' => 'movies/' . $movie->id, 'class' => '')) }}
                                {{ Form::hidden('_method', 'DELETE') }}                 
                                {{ Form::button('<i class="glyphicon glyphicon-remove"></i>', array('type' => 'submit', 'class' => 'submit')) }}
                                {{ Form::close() }}
                            </td>
        	            </tr>
                    <?php //} ?>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        {{ $movies->links() }}

    </div> <!-- table responsive -->
@stop 