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
                            @include('partials.grid', ['data' => $newMusic])
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection