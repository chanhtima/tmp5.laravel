@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
@php
    $pageNav = [
        [
            'id'=>'0',
            'name'=>'Home',
            'url'=>'',
        ],
        [
            'id'=>'1',
            'name'=>'Products',
            'url'=>'products',
        ],
       
];
@endphp
<main class="page-image-bg min-h-[88vh]">

    <div class="container py-6 lg:py-12">
        <div class="flex items-center justify-center space-x-1">
            <x-frontend::breadcrumbs.BreadcrumbsBasic
                :datas="$pageNav"
            ></x-frontend>
        </div>
        <div class="text-center mt-8">
            <h1 class="font-medium text-24 xl:text-38 mb-6 line-pass">OUR PRODUCT</h1>
        </div>
        <x-frontend::texteditor.TextEditor>
            @slot('content')
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet,
                consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                erat Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat </p>
            @endslot
      
        </x-frontend>
        @include('frontend::layouts.product.ProductListLayout')
            <div class=" w-full pt-6">
                @include('frontend::components.pagination.PaginationBasic')
            </div>
            
        </div>


    </main>
@endsection

@section('script')


@endsection
