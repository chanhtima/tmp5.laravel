@extends('frontend::config.master')
@section('title')

@section('style')

@endsection
@php
    $pageNav = [
        [
            'id'=>'0',
            'name'=>'Home',
            'url'=>'',
        ],
        [
            'id'=>'1',
            'name'=>'Product',
            'url'=>'products',
        ],
        [
            'id'=>'2',
            'name'=>'Product name A',
            'url'=>'products-details',
        ],
];
@endphp
@section('content')


    <main class="page-image-bg min-h-[88vh]">
        <div class="py-6 lg:py-12">
            <div class="container ">
                <div class="flex items-center space-x-1">
                    <x-frontend::breadcrumbs.BreadcrumbsBasic
                        :datas="$pageNav"
                    ></x-frontend>
                </div>
                @php
                $productCards = [
                    [
                        'id' => '0',
                        'img' => 'img/cake1.jpg',
                        'title' => 'Product Promotion Title 1',
                    ],
                    [
                        'id' => '1',
                        'img' => 'img/cake2.jpg',
                        'title' => 'Product Promotion Title 2',
                    ],
                 
                    [
                        'id' => '3',
                        'img' => 'img/cake3.jpg',
                        'title' => 'Product Promotion Title 1',
                    ],
                    [
                        'id' => '4',
                        'img' => 'img/cake4.jpg',
                        'title' => 'Product Promotion Title 2',
                    ],
                    [
                        'id' => '5',
                        'img' => 'img/cake5.jpg',
                        'title' => 'Product Promotion Title 1',
                    ],
                    [
                        'id' => '6',
                        'img' => 'img/cake6.jpg',
                        'title' => 'Product Promotion Title 2',
                    ],
                 
                    [
                        'id' => '7',
                        'img' => 'img/cake7.jpg',
                        'title' => 'Product Promotion Title 1',
                    ],
                    [
                        'id' => '8',
                        'img' => 'img/cake8.jpg',
                        'title' => 'Product Promotion Title 2',
                    ],

                  
                  
                ];
            @endphp
        
                <div class="flex flex-wrap -mx-4 mt-8">
                    <div class=" w-full lg:w-1/2 p-4">
                        @include('frontend::layouts.product.ProductDetailThumbnails')
                    </div>
                    <div class="w-full lg:w-1/2 p-4">
                        <h2 class="home-title mb-2">Product name A</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ullamcorper suscipit lobortis</p>
                        <div class="flex flex-wrap items-start flex-col sm:flex-row mt-4">
                            <div class="w-full sm:w-1/3 pb-1 sm:p-2"> <h5 class=" font-semibold">Lorem ipsum</h5></div>
                            <div class="w-full sm:w-2/3 pb-4 sm:p-2"> <p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ullamcorper suscipit lobortis</p></div>
                            <div class="w-full sm:w-1/3 pb-1 sm:p-2"> <h5 class=" font-semibold">Lorem ipsum</h5></div>
                            <div class="w-full sm:w-2/3 pb-4 sm:p-2"> <p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p></div>
                            <div class="w-full sm:w-1/3 pb-1 sm:p-2"> <h5  class=" font-semibold">Lorem ipsum</h5></div>
                            <div class="w-full sm:w-2/3 pb-4 sm:p-2"> <h3 >60 บาท</h3></div>
                           
                        </div>
                    </div>
                </div>
            </div>
       
        </div>
    
    </main>
@endsection

@section('script')
<script src="{{ Module::asset('frontend:js/product.min.js') }}"></script>

@endsection
