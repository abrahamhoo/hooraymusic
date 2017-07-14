@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">

                <div id="myCarousel" class="carousel slide">
                    <!-- 轮播（Carousel）指标 -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- 轮播（Carousel）项目 -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{asset('assets/img/forge-flames.jpg')}}" alt="First slide">
                        </div>
                        <div class="item">
                            <img src="{{asset('assets/img/forge-flames.jpg')}}" alt="Second slide">
                        </div>
                        <div class="item">
                            <img src="{{asset('assets/img/forge-flames.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
