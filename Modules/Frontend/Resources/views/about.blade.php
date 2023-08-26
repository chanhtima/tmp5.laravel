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
            'name'=>'About',
            'url'=>'about',
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
        <x-frontend::texteditor.TextEditor>
            @slot('content')
        <div class="flex flex-wrap -mx-4 xl:pt-12">
            <div class="w-full lg:w-1/2 px-4 pb-4 pt-12 ">
                <div class=" relative mb-6 sm:mb-10">
                    <p class=" relative z-[1] text-gray-400">Lorem ipsum dolor sit amet,</p>
                    <h2 class="home-title relative z-[1] -mt-2">ABOUT GRACIAS CAFE</h2>
                    <img class="w-1/2 lg:w-auto absolute top-0 -left-4 lg:-left-12 z-0" src="{{ Module::asset('frontend:img/about-text.png') }}" alt="GRACIAS CAFE">
                    
                </div>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                </p>
            </div>
            <div class="w-full lg:w-1/2 p-4">
                <img  src="{{ Module::asset('frontend:img/about.png') }}" alt="GRACIAS CAFE">
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-1/3 p-4">
                <img class="rounded-2xl"  src="{{ Module::asset('frontend:img/about2.jpg') }}" alt="GRACIAS CAFE">
            </div>
            <div class="w-full lg:w-2/3 px-4 pb-4 pt-12 lg:pt-20">
              <div class="relative mb-6 sm:mb-10">
                <p class=" relative z-[1] text-gray-400">Lorem ipsum dolor sit amet,</p>
                <h2 class="home-title relative z-[1] -mt-2">THE FARMER’S DIARY</h2>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
              </p>
            </div>
          </div>
          <div class="mt-10 text-center">
            <div class="relative mb-6">
              <h2 class="home-title relative z-[1] -mt-2">ABOUT GRACIAS CAFE</h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
              dolore magna aliquam erat Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
              euismod tincidunt ut laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet, consectetuer adipiscing
              elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat Lorem ipsum dolor sit
              amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
              erat Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
              laoreet dolore magna aliquam erat
            </p>
          </div>
          <div class="flex flex-wrap -mx-4 items-center mt-4">
            <div class="w-full md:w-1/3 p-4"><img  src="{{ Module::asset('frontend:img/about3.jpg') }}" alt="GRACIAS CAFE"
                class="rounded-2xl w-full"></div>
            <div class="w-full md:w-1/3 p-4"><img  src="{{ Module::asset('frontend:img/about4.jpg') }}" alt="GRACIAS CAFE"
                class="rounded-2xl w-full"></div>
            <div class="w-full md:w-1/3 p-4"><img  src="{{ Module::asset('frontend:img/about3.jpg') }}" alt="GRACIAS CAFE"
                class="rounded-2xl w-full"></div>
          </div>
        @endslot
      
    </x-frontend>
          
         </div>
  
    </main>
@endsection

@section('script')


@endsection
