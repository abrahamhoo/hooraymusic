@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">New Album</div>
                <div class="panel-body">
                    @foreach($newAlbum as $key=>$item)
                        @if($key%4 == 0)
                            @include('partials.grid', ['data' => $newAlbum, 'name' => 'album_name'])
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">New Song</div>
                <div class="panel-body">
                    @foreach($newSong as $key=>$item)
                        @if($key%4 == 0)
                            @include('partials.grid', ['data' => $newSong, 'name' => 'song_name'])
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>


</div>
@endsection