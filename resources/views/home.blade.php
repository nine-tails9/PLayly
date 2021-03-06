@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="links">
                        <a href="{{ url('/uploadSong') }} ">Upload Song</a>
                        <a href="{{ url('/allSongs') }} ">All Songs</a>
                        <a href="{{ url('/playLists') }} ">My Playlists</a>
                        <a href="{{ url('/CreateplayList') }} ">Create Playlist</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(Session::has('message'))
        <p class="alert alert-success w-25">{{ Session::get('message') }}</p>
    @endif
</div>
@endsection
