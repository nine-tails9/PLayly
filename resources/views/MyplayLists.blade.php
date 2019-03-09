@extends('layouts.app')
@section('content')

	<div class="container">
        <ul>
        @foreach($list as $lis)
        <li> <a href = "playPlaylist/{{ $lis->id }} ">{{ $lis->name }} </a></li>
        @endforeach 
        </ul>
	</div>


@endsection