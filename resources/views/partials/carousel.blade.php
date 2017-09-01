<div id="carousel" class="carousel slide">
    <ol class="carousel-indicators">
        @foreach($data as $key=>$value)
            @if($key == 0)
            <li data-target="#carousel" data-slide-to="{{$key}}" class="active"></li>
            @else
            <li data-target="#carousel" data-slide-to="{{$key}}"></li>
            @endif
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach($data as $key=>$value)
            @if($key == 0)
            <div class="item active">
            @else
            <div class="item">
            @endif
                <a href="{{$value['url']}}">
                    <img src="{{asset($value['cover'])}}" alt="{{$value['comment']}}">
                </a>
            </div>
        @endforeach
    </div>
</div>
