@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                @include('partials.carousel', ['data' => $welcomeBanner])

                <div class="panel panel-default">
                    <div class="panel-heading">New Music</div>
                    <div class="panel-body">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
