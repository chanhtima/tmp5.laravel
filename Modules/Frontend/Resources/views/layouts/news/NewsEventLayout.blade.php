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
        [
            'id' => '8',
            'img' => 'img/news4.jpg',
            'title' => 'Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated.',
            'url' => 'new-details',
            'icon' => 'img/out.svg',
            'date' => '20-jun-2023'
        ],
        [
            'id' => '9',
            'img' => 'img/news5.jpg',
            'title' => 'Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated.',
            'url' => 'new-details',
            'icon' => 'img/out.svg',
            'date' => '20-jun-2023'
        ],
        [
            'id' => '10',
            'img' => 'img/news6.jpg',
            'title' => 'Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated.',
            'url' => 'new-details',
            'icon' => 'img/out.svg',
            'date' => '20-jun-2023'
        ],
        [
            'id' => '11',
            'img' => 'img/news7.jpg',
            'title' => 'Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated.',
            'url' => 'new-details',
            'icon' => 'img/out.svg',
            'date' => '20-jun-2023'
        ],
    
    ]
@endphp


    <div class="flex flex-wrap -mx-4 pt-2 md:pt-4">
 
                @foreach ($productCards as $index => $card)
                            <div class="w-full xs:w-1/2 lg:w-1/3 2xl:w-1/4 p-2 md:p-4">
                                <x-frontend::card.Card01Date 
                                :img="$card['img']"  
                                :url="$card['url']" 
                                :title="$card['title']"  
                                :icon="$card['icon']" 
                                :date="$card['date']" 
                                >
                                </x-frontend>
                            
                            </div>
                @endforeach

    </div>
                
