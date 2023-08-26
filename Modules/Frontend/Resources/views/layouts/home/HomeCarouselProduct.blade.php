@php
    $productCards = [
        [
            'id' => '0',
            'img' => 'img/cake8.jpg',
            'title' => 'Product Promotion Title',
            'tag' =>'Best Seller',
            'url' => 'products-details',
            'icon' => 'img/out.svg'
        ],
        [
            'id' => '1',
            'img' => 'img/cake1.jpg',
            'title' => 'Product Promotion Title',
            'tag' =>'Best Seller',
            'url' => 'products-details',
            'icon' => 'img/out.svg'
        ],
        [
            'id' => '2',
            'img' => 'img/cake2.jpg',
            'title' => 'Product Promotion Title',
            'tag' =>'Best Seller',
            'url' => 'products-details',
            'icon' => 'img/out.svg'
        ],
        [
            'id' => '3',
            'img' => 'img/cake3.jpg',
            'title' => 'Product Promotion Title',
           'tag' =>'Best Seller',
            'url' => 'products-details',
            'icon' => 'img/out.svg'
        ],
        [
            'id' => '4',
            'img' => 'img/cake4.jpg',
            'title' => 'Product Promotion Title',
           'tag' =>'Best Seller',
            'url' => 'products-details',
            'icon' => 'img/out.svg'
        ],
        [
            'id' => '5',
            'img' => 'img/cake5.jpg',
            'title' => 'Product Promotion Title',
           'tag' =>'Best Seller',
            'url' => 'products-details',
            'icon' => 'img/out.svg'
        ],
        [
            'id' => '6',
            'img' => 'img/cake6.jpg',
            'title' => 'Product Promotion Title',
           'tag' =>'Best Seller',
            'url' => 'products-details',
            'icon' => 'img/out.svg'
        ],
        [
            'id' => '7',
            'img' => 'img/cake7.jpg',
            'title' => 'Product Promotion Title',
           'tag' =>'Best Seller',
            'url' => 'products-details',
            'icon' => 'img/out.svg'
        ],
        [
            'id' => '8',
            'img' => 'img/cake8.jpg',
            'title' => 'Product Promotion Title',
           'tag' =>'Best Seller',
            'url' => 'products-details',
            'icon' => 'img/out.svg'
        ],
        [
            'id' => '9',
            'img' => 'img/cake9.jpg',
            'title' => 'Product Promotion Title',
           'tag' =>'Best Seller',
            'url' => 'products-details',
            'icon' => 'img/out.svg'
        ],
        [
            'id' => '10',
            'img' => 'img/cake10.jpg',
            'title' => 'Product Promotion Title',
           'tag' =>'Best Seller',
            'url' => 'products-details',
            'icon' => 'img/out.svg'
        ],
        [
            'id' => '11',
            'img' => 'img/cake11.jpg',
            'title' => 'Product Promotion Title',
           'tag' =>'Best Seller',
            'url' => 'products-details',
            'icon' => 'img/out.svg'
        ],
       
    ];
@endphp
<div class="flex flex-wrap -mx-4 -mt-4">
        @foreach ($productCards as $index => $card)
            <div class="w-full xs:w-1/2 md:w-1/3 xl:w-1/4 p-4">
                <x-frontend::card.Card01Tag :img="$card['img']"  :url="$card['url']" :title="$card['title']"  :icon="$card['icon']"  :tag="$card['tag']" >
                </x-frontend>
            </div>
            
        @endforeach

</div>
