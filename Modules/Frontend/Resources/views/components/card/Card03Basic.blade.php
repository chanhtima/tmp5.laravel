<div class="co-card-03">
    <div class="co-card-03-img">
        <a href={{ $url ?? '' }}>
            <img src="{{ Module::asset('frontend:' . ($img ?? '')) }}" alt={{$title ?? ''}}>
        </a>
    </div>
    <div class="co-card-03-detail">
        <a href={{ $url ?? ''}}>
            <h2 class="co-card-03-title">{{ $title ?? '' }}</h2>
        </a>
    </div>
</div>