@php
    $slides = array(
        [
            'id'=>'0',
            'type'=>'image',
            'src'=>'img/banner (3).jpg',
            'alt'=>'Banner Slide',
            'url'=>'',
        ],

        [
            'id'=>'2',
            'type'=>'image',
            'src'=>'img/banner (2).jpg',
            'alt'=>'',
            'url'=>'',
        ],
        [
            'id'=>'3',
            'type'=>'image',
            'src'=>'img/banner (3).jpg',
            'alt'=>'',
            'url'=>'',
        ],
        // [
        //     'id'=>'4',
        //     'type'=>'youtube',
        //     'src'=>'https://www.youtube.com/watch?v=l40nk18GUzk&ab_channel=4KOceanWorld',
        //     'alt'=>'',
        //     'url'=>'',
        // ],
    )
@endphp

<x-frontend::carousel.CarouselBanner
    slideName='splide-banner-slide'
    :slideData=$slides
></x-frontend>