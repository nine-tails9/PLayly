@extends('layouts.app')
@section('content')

	<div class="container">
        <a href="ss" class="btn btn-primary">sjH</a>
        
        <form method="POST" action="{{ url('/uploadSong') }}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="song">
            <input type="submit" value="Upload">
        </form>
	</div>


@endsection