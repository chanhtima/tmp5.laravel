@php
    $productCards = [
        [
            'id' => '0',
            'img' => 'img/news8.jpg',
            'title' => 'Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated.',
            'url' => 'new-details',
            'icon' => 'img/out.svg',
            'date' => '20-jun-2023'
        ],
        [
            'id' => '1',
            'img' => 'img/news1.jpg',
            'title' => 'Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated.',
            'url' => 'new-details',
            'icon' => 'img/out.svg',
            'date' => '20-jun-2023'
        ],
        [
            'id' => '2',
            'img' => 'img/news2.jpg',
            'title' => 'Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated.',
            'url' => 'new-details',
            'icon' => 'img/out.svg',
            'date' => '20-jun-2023'
        ],
        [
            'id' => '3',
            'img' => 'img/news3.jpg',
            'title' => 'Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated.',
            'url' => 'new-details',
            'icon' => 'img/out.svg',
            'date' => '20-jun-2023'
        ],
        [
            'id' => '4',
            'img' => 'img/news4.jpg',
            'title' => 'Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated.',
            'url' => 'new-details',
            'icon' => 'img/out.svg',
            'date' => '20-jun-2023'
        ],
        [
            'id' => '5',
            'img' => 'img/news5.jpg',
            'title' => 'Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated.',
            'url' => 'new-details',
            'icon' => 'img/out.svg',
            'date' => '20-jun-2023'
        ],
        [
            'id' => '6',
            'img' => 'img/news6.jpg',
            'title' => 'Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated.',
            'url' => 'new-details',
            'icon' => 'img/out.svg',
            'date' => '20-jun-2023'
        ],
        [
            'id' => '7',
            'img' => 'img/news7.jpg',
            'title' => 'Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated.',
            'url' => 'new-details',
            'icon' => 'img/out.svg',
            'date' => '20-jun-2023'
        ],
    
    ]
@endphp


    <div class="-mx-2">
        <x-frontend::carousel.CarouselMultiple slideName='splide-news'>
            @slot('slideItemList')
            @foreach ($productCards as $index => $card)
                    <x-frontend::carousel.CarouselMultipleItem>
                        @slot('slideItem')
                            <div class="p-2">
                                <x-frontend::card.Card01Date 
                                :img="$card['img']"  
                                :url="$card['url']" 
                                :title="$card['title']"  
                                :icon="$card['icon']" 
                                :date="$card['date']" 
                                >
                                </x-frontend>
                            
                            </div>
                            @endslot
                        </x-frontend>
                        @endforeach
                        @endslot
        </x-frontend>
    </div>
                
