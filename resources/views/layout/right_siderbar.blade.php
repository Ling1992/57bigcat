
@if(count($rightSiderbarDatas ?? '') >= 2 )
    <div class="sidebar-module sidebar-module-inset">
        <h4>{{ $rightSiderbarTitl ?? '' }}e</h4>
        <div class="slick">
            @foreach ($rightSiderbarDatas as $value)
                <div class="col-sm-4" style="padding: 0">
                    <div class="image">
                        <a href="{{ $value->id }}">
                            <img src="{{ movie_img_filter($value->img) }}" style="width: 100%; height: 160px"/>
                        </a>
                    </div>
                    <div style="position: absolute;bottom: 0; background-color: rgba(0,0,0,0.53);">
                        <p style="font-size: 12px; margin: 0;color: rgba(255,255,255,0.76);display: block;overflow: hidden;">
                            {{ $value->title }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif

@if(count($rightSiderbarDatasA ?? '') >= 2 )
    <div class="sidebar-module sidebar-module-inset">
        <h4>{{ $rightSiderbarTitlA ?? '' }}e</h4>
        <div class="slick">
            @foreach ($rightSiderbarDatasA as $value)
                <div class="col-sm-4" style="padding: 0">
                    <div class="image">
                        <a href="{{ $value->id }}">
                            <img src="{{ movie_img_filter($value->img) }}" style="width: 100%; height: 160px"/>
                        </a>
                    </div>
                    <div style="position: absolute;bottom: 0; background-color: rgba(0,0,0,0.53);">
                        <p style="font-size: 12px; margin: 0;color: rgba(255,255,255,0.76);display: block;overflow: hidden;">
                            {{ $value->title }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
