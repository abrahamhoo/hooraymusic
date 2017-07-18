<div class="row grid">
    <div class="col-md-3 col-sm-3 text-center content item">
        @if(isset($data[$key]))
            <img class="img-thumbnail cover" style="width: 180px; height: 180px" src="{{asset($data[$key]['cover'])}}" >
            <span class="name">{{$data[$key][$name]}}</span>
            <hr class="line"/>
            <span class="artist">{{$data[$key]['artist']}}</span>
        @endif
    </div>
    <div class="col-md-3 col-sm-3 text-center content item">
        @if(isset($data[$key+1]))
            <img class="img-thumbnail cover" style="width: 180px; height: 180px" src="{{asset($data[$key+1]['cover'])}}" >
            <span class="name">{{$data[$key+1][$name]}}</span>
            <hr class="line"/>
            <span class="artist">{{$data[$key+1]['artist']}}</span>
        @endif
    </div>
    <div class="col-md-3 col-sm-3 text-center content item">
        @if(isset($data[$key+2]))
            <img class="img-thumbnail cover" style="width: 180px; height: 180px" src="{{asset($data[$key+2]['cover'])}}" >
            <span class="name">{{$data[$key+2][$name]}}</span>
            <hr class="line"/>
            <span class="artist">{{$data[$key+2]['artist']}}</span>
        @endif
    </div>
    <div class="col-md-3 col-sm-3 text-center content item">
        @if(isset($data[$key+3]))
            <img class="img-thumbnail cover" style="width: 180px; height: 180px" src="{{asset($data[$key+3]['cover'])}}" >
            <span class="name">{{$data[$key+3][$name]}}</span>
            <hr class="line"/>
            <span class="artist">{{$data[$key+3]['artist']}}</span>
        @endif
    </div>
</div>