@extends('layouts.app')
@section('content')

	<div class="container">
                <h2>My Library</h2>
        <div class="row">
        @foreach($songs as $lis)
                <div class="col">
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                        <h5 class="card-title">{{ $lis->name }} </h5>
                        <a href = "playPlaylist/{{ $lis->id }} " class="btn btn-primary">Play Now</a>
                </div>
                </div>
                </div>
        @endforeach 
        </div>
        
	</div>


@endsection