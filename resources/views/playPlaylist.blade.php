@extends('layouts.app')
@section('content')

	<div class="container">
        <ul class="list-group">
        @foreach($songs as $song)
        <li class="list-group-item w-50">{{ $song->songs->original_filename }} </li>
        @endforeach 
        </ul>
	</div>


@endsections