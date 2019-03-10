@extends('layouts.app')
@section('content')

	<div class="container">

    <form action="{{ url('/CreateplayList') }}" method="post">
        @csrf
        <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Playlist name</label>
                <div class="col-sm-10">
                  <input type="text" name="name">
                </div>
              </div>
      
        @foreach($songs as $song)
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name = "songs[]" value="{{ $song->id }}">{{ $song->original_filename }}

        </div>
        @endforeach 
       
        <input type="submit" value="Create" class="btn btn-success mb-2">
    </form>
    @if(Session::has('message'))
        <p class="alert alert-success w-25">{{ Session::get('message') }}</p>
    @endif
    @if(Session::has('errors'))
    <p class="alert alert-danger w-25">Fields Missing</p>
    @endif
	</div>


@endsection