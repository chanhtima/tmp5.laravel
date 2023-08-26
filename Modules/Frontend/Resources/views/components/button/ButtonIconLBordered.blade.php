<button class="co-button-icon-l-borderd {{$class ?? ''}}">
    <a {{!empty($url) ? 'href='.$url : ''}}>
        <span>
            {{$text}}
        </span>
        @if(!empty($icon))
            <div class="co-button-icon-r-img">
                {{ $icon }}
            </div>
        @endif

       
    </a>
</button>