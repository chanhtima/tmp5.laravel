<div class="co-card-01">
    <div class="co-card-01-tag">{{$tag ?? ''}}</div>
    <div class="co-card-01-img">
        <a href={{ $url ?? '' }}>
            <img src="{{ Module::asset('frontend:' . ($img ?? '')) }}" alt={{$title ?? ''}}>
        </a>
    </div>
    <div class="co-card-01-detail">
        <a href={{ $url ?? ''}}>
            <h2 class="co-card-01-title">{{ $title ?? '' }}</h2>
            <img src="{{ Module::asset('frontend:' . ($icon ?? '')) }}"alt={{$title ?? ''}}>
        </a>
    </div>
</div>