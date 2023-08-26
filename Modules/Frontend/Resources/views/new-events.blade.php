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
            'name'=>'News & Events',
            'url'=>'new-events',
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
        <div class="mt-12">
    
            <x-frontend::card.Card01Horizontal
                img="img/news1.jpg" 
                title="Therefore, when you title research work"
                detail="Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated.Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated.Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated.Therefore, when you title research work, make sure it captures all of the relevant aspects of your study, including the specific topic and problem being investigated."
                date="20-Jun-2023"
                url="/new-details"
                class=" mt-4 lg:mt-8">
                @slot('button')
                    <x-frontend::button.ButtonIconLBordered url="/new-details" text="Read More" class=" mt-4 lg:mt-8">
                            @slot('icon') 
                                <svg width="25" height="14" class="mt-1 ml-2" viewBox="0 0 35 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                        d="M33.0396 7.11658L33.7467 6.40947L34.4538 7.11658L33.7467 7.82368L33.0396 7.11658ZM1.03955 8.11658C0.487267 8.11658 0.0395508 7.66886 0.0395508 7.11658C0.0395508 6.56429 0.487267 6.11658 1.03955 6.11658V8.11658ZM27.7467 0.40947L33.7467 6.40947L32.3324 7.82368L26.3324 1.82368L27.7467 0.40947ZM33.7467 7.82368L27.7467 13.8237L26.3324 12.4095L32.3324 6.40947L33.7467 7.82368ZM33.0396 8.11658H1.03955V6.11658H33.0396V8.11658Z"
                                        fill="#FFF9F0" />
                                </svg>
                        @endslot
                    </x-frontend>
                    @endslot
            </x-frontend>
        </div>
        @include('frontend::layouts.news.NewsEventLayout')
            <div class=" w-full pt-6">
                @include('frontend::components.pagination.PaginationBasic')
            </div>
            
        </div>


    </main>
@endsection

@section('script')


@endsection
