<div class="co-card-01-hoz">
   <div class="co-card-01-hoz-img">
        <div class="co-card-01-hoz-img-wrapper">
                <img src="{{ Module::asset('frontend:' . ($img ?? '')) }}" alt={{$title ?? ''}}>

        </div>
   </div>
   <div class="co-card-01-hoz-detail">
    <p class="co-card-01-hoz-date">
        <img src="{{ Module::asset('frontend:img/icon/calendar.svg') }}" alt="GRACIAS CAFE">
        {{ $date ?? '' }}
    </p>
    <h2 class="co-card-01-hoz-title">{{ $title ?? '' }}</h2>
    <p class="co-card-01-hoz-subtitle">{{ $detail ?? ''  }}</p>
    @if(!empty($button))
        <div class="BaseButton">
     
            {{ $button }}
        
        </div>
    @endif
   
</div>

</div>