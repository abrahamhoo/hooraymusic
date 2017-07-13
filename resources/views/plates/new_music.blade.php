@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">New Music</div>
                <div class="panel-body">
                    @foreach($newMusic as $key=>$item)
                        @if($key%4 == 0)
                            {{--@include('partials.grid')--}}
                            <div class="row grid">
                                <div class="col-md-3 text-center content">
                                    @if($newMusic[$key])
                                    <img class="img-thumbnail" style="width: 180px; height: 180px" src="{{asset($newMusic[$key]->cover)}}" >
                                    @endif
                                </div>
                                <div class="col-md-3 text-center content">
                                    @if($newMusic[$key+1])
                                    <img class="img-thumbnail" style="width: 180px; height: 180px" src="{{asset($newMusic[$key+1]->cover)}}" >
                                    @endif
                                </div>
                                <div class="col-md-3 text-center content">
                                    @if($newMusic[$key+2])
                                    <img class="img-thumbnail" style="width: 180px; height: 180px" src="{{asset($newMusic[$key+2]->cover)}}" >
                                    @endif
                                </div>
                                <div class="col-md-3 text-center content">
                                    @if($newMusic[$key+3])
                                    <img class="img-thumbnail" style="width: 180px; height: 180px" src="{{asset($newMusic[$key+3]->cover)}}" >
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection