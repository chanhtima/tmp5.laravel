@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
    <main>
        @include('frontend::layouts.home.HomeCarouselBanner')

        <section  class="page-image-bg pb-12">
            {{-- About --}}
            <div class="container">
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
                    @endslot
                  
                </x-frontend>
                <div class="flex justify-center pt-8 pb-12"> 
                    <x-frontend::button.ButtonIconLBordered url="/about" text="Read Our Story" class=" mt-4 lg:mt-8">
                        @slot('icon') 
                            <svg  width="25" height="14" class="mt-1 ml-2" viewBox="0 0 35 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                    d="M33.0396 7.11658L33.7467 6.40947L34.4538 7.11658L33.7467 7.82368L33.0396 7.11658ZM1.03955 8.11658C0.487267 8.11658 0.0395508 7.66886 0.0395508 7.11658C0.0395508 6.56429 0.487267 6.11658 1.03955 6.11658V8.11658ZM27.7467 0.40947L33.7467 6.40947L32.3324 7.82368L26.3324 1.82368L27.7467 0.40947ZM33.7467 7.82368L27.7467 13.8237L26.3324 12.4095L32.3324 6.40947L33.7467 7.82368ZM33.0396 8.11658H1.03955V6.11658H33.0396V8.11658Z"
                                    fill="#FFF9F0" />
                            </svg>
                      @endslot
                    </x-frontend>
                </div>
            </div>
            {{-- our produtc --}}
            <div class=" container pb-12">
                <div>
                <x-frontend::utility.TitleSeparatorBtn url="/products" text="SEE MORE" title="OUR PRODUCTS" class=" mt-4 lg:mt-8">
                </x-frontend>
                   <p class="pt-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna aliquam erat Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                </div>
                <div class="pt-8">

                    @include('frontend::layouts.home.HomeCarouselProduct')
                </div>
             
            </div>
            <div class=" container">
                <div>
                <x-frontend::utility.TitleSeparatorBtn url="/new-events" text="SEE MORE" title="News & Events" class=" mt-4 lg:mt-8">
                </x-frontend>
              
                </div>
                <div class="pt-4">
                    @include('frontend::layouts.home.HomeCarouselNews')
                </div>
             
            </div>
        </section>
       
    </main>
    
@endsection
    
@section('script')
<script src="{{ Module::asset('frontend:js/index.min.js') }}"></script>

@endsection
    