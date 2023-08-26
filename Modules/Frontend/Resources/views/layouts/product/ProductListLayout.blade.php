@php
$productCards = [
    [
        'id' => '0',
        'img' => 'img/cake1.jpg',
        'title' => 'Product Promotion Title',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
        'url' => 'products-details',
    ],
    [
        'id' => '1',
        'img' => 'img/cake2.jpg',
        'title' => 'Product Promotion Title',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
        'url' => 'products-details',
    ],
    [
        'id' => '2',
        'img' => 'img/cake3.jpg',
        'title' => 'Product Promotion Title',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
        'url' => 'products-details',
    ],
    [
        'id' => '3',
        'img' => 'img/cake4.jpg',
        'title' => 'Product Promotion Title',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
        'url' => 'products-details',
    ],
    [
        'id' => '4',
        'img' => 'img/cake5.jpg',
        'title' => 'Product Promotion Title',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
        'url' => 'products-details',
    ],
    [
        'id' => '5',
        'img' => 'img/cake6.jpg',
        'title' => 'Product Promotion Title',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
        'url' => 'products-details',
    ],
    [
        'id' => '6',
        'img' => 'img/cake7.jpg',
        'title' => 'Product Promotion Title',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
        'url' => 'products-details',
    ],
    [
        'id' => '7',
        'img' => 'img/cake0.jpg',
        'title' => 'Product Promotion Title',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
        'url' => 'products-details',
    ],
    [
        'id' => '8',
        'img' => 'img/cake8.jpg',
        'title' => 'Product Promotion Title',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
        'url' => 'products-details',
    ],
    [
        'id' => '9',
        'img' => 'img/cake9.jpg',
        'title' => 'Product Promotion Title',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
        'url' => 'products-details',
    ],
    [
        'id' => '10',
        'img' => 'img/cake10.jpg',
        'title' => 'Product Promotion Title',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
        'url' => 'products-details',
    ],
    [
        'id' => '19',
        'img' => 'img/cake11.jpg',
        'title' => 'Product Promotion Title',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
        'url' => 'products-details',
    ],
   
];
@endphp
<div class="flex flex-wrap -mx-4 pt-2 md:pt-4">

    @foreach ($productCards as $index => $card)
    <div class=" w-full xs:w-1/2 lg:w-1/3 2xl:w-1/4 p-2 md:p-4">
        <x-frontend::card.Card03Basic :img="$card['img']" :url="$card['url']" :title="$card['title']" :subtitle="$card['subtitle']">
        </x-frontend>
    </div>
    @endforeach
</div>