@extends('layouts.app')
@section('content')

	<div class="container">
            <root-frame :songs=" {{ $songs }}" ></root-frame>
	</div>


@endsection