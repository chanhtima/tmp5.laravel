<d     iv class="co-card-01 co-card-01-dark">
    <div class="co-card-01-img">
        <a href={{ $url ?? '' }}>
            <img src="{{ Module::asset('frontend:' . ($img ?? '')) }}" alt={{$title ?? ''}}>
        </a>
    </div>
    <div class="co-card-01-detail">
        <a href={{ $url ?? ''}}>
            <div class="co-card-01-date">
                <img class="co-card-01-date-icon" src="{{ Module::asset('frontend:img/icon/calendar.svg') }}" alt="GRACIAS CAFE">
             
                {{ $date ?? '' }}
            </div>
            <h2 class="co-card-01-title">{{ $title ?? '' }}</h2>
            <img src="{{ Module::asset('frontend:' . ($icon ?? '')) }}"alt={{$title ?? ''}}>
        </a>
    </div>
</d>