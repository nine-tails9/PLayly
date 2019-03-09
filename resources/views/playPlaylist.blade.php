@extends('layouts.app')
@section('content')

	<div class="container">

        <root-frame :songs=" {{ json_encode($songs) }}" ></root-frame>

	</div>


@endsection