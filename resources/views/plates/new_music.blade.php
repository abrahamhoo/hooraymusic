@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">New Music</div>
                <div class="panel-body">
                    @include('partials.grid')
                    @include('partials.grid')
                    @include('partials.grid')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection