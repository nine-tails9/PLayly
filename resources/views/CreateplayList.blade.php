@extends('layouts.app')
@section('content')

	<div class="container">

    <form action="{{ url('/CreateplayList') }}" method="post">
        @csrf
        <input type="text" name="name">
        <ul>
        @foreach($songs as $song)
        <li><input type="checkbox" name = "songs[]" value="{{ $song->id }}">{{ $song->original_filename }}</li>
        @endforeach 
        </ul>
        <input type="submit" value="Create">
    </form>
	</div>


@endsection