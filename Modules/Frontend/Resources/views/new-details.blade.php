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
            'name'=>'News & Event',
            'url'=>'new-events',
        ],
        [
            'id'=>'2',
            'name'=>'Therefore, when you title research work',
            'url'=>'new-details',
        ],
    ]
@endphp

@section('content')
<main class="page-image-bg min-h-[88vh]">
    <div class="py-6 lg:py-12">
        <div class="container ">
            <div class="flex items-center justify-center space-x-1">
                <x-frontend::breadcrumbs.BreadcrumbsBasic
                    :datas="$pageNav"
                ></x-frontend>
            </div>
            <div class="mt-12">
                <img class="rounded-2xl w-full lg:w-1/2 lg:float-left lg:mr-8 mb-4 lg:mb-8" src="{{ Module::asset('frontend:img/news4.jpg') }}" alt="GRACIAS CAFE">
                <div class=" lg:pt-16">
                  <div class="flex items-s space-x-2">
                    <img src="{{ Module::asset('frontend:img/icon/calendar.svg') }}" class="mb-[3px] opacity-40">
                    <p class="text-gray-400">20-Jun-2023</p>
                  </div>
                  <h2 class="home-title  mb-6">Therefore, when you title research work</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                  </p>
                  <br>
                  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                  </p>
                  <br>
                  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                  </p>
                  <br>
                  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                  </p>
                  <br>
                  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                  </p>
                  <br>
                  <h4 class="mb-2">Quas laborum inventore quibusdam eum</h4>
                  <ul class="mb-2">
                    <li>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi accusamus voluptates nostrum, necessitatibus culpa voluptatum aperiam minima amet, rerum quis quas laborum inventore quibusdam eum, quia voluptatem voluptas magni repudiandae!
                    </li>
                    <li>
                      Adipisicing elit. Animi accusamus voluptates nostrum, necessitatibus culpa voluptatum aperiam minima amet, rerum quis quas laborum inventore quibusdam eum, quia!
                    </li>
                    <li>
                      Consectetur adipisicing elit. Animi accusamus voluptates nostrum, necessitatibus culpa voluptatum aperiam minima amet, rerum quis quas laborum inventore quibusdam eum, quia voluptatem voluptas magni repudiandae!
                    </li>
                    <li>
                      Sit amet consectetur adipisicing elit. Animi accusamus voluptates nostrum, necessitatibus culpa voluptatum aperiam minima amet, rerum quis quas laborum inventore quibusdam eum quas laborum inventore quibusdam eum.
                    </li>
                    <li>
                      Ipsum dolor sit amet consectetur adipisicing elit. Animi accusamus voluptates nostrum, necessitatibus culpa voluptatum aperiam minima amet, rerum quis quas laborum inventore quibusdam eum, quia voluptatem voluptas magni repudiandae!
                    </li>
                    <li>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi accusamus voluptates nostrum, necessitatibus culpa voluptatum aperiam minima amet, rerum quis quas laborum inventore quibusdam eum, quia voluptatem voluptas magni repudiandae!
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi accusamus voluptates nostrum, necessitatibus culpa voluptatum aperiam minima amet, rerum quis quas laborum inventore quibusdam eum, quia voluptatem voluptas magni repudiandae!
                    </li>
                  </ul>
                  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                  </p>
                </div>
                <div class="sm:w-4/5  justify-center mt-4 md:w-full flex flex-wrap -mx-4">
                  <div class="w-full md:w-1/3 p-4">
                    <img src="{{ Module::asset('frontend:img/about2.jpg') }}" alt="" class="rounded-xl">
                  </div>
                  <div class="w-full md:w-1/3 p-4">
                    <img src="{{ Module::asset('frontend:img/about3.jpg') }}" alt="" class="rounded-xl">

                  </div>
                  <div class="w-full md:w-1/3 p-4">
                    <img src="{{ Module::asset('frontend:img/about4.jpg') }}" alt="" class="rounded-xl">

                  </div>
                </div>
              </div>
           
    </div>

    </main>
@endsection

@section('script')


@endsection
