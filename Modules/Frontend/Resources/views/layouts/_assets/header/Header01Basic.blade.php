@php
    $mainMenu = [
        [
            'id'=> '0',
            'name'=> 'Home',
            'url'=> '',
            'subMenu'=> [],
        ],
        [
            'id'=> '2',
            'name'=> 'About',
            'url'=> 'about',
            'subMenu'=> [],
        ],
        [
            'id'=> '3',
            'name'=> 'Products',
            'url'=> 'products',
            'subMenu'=> [],
        ],

        [
            'id'=> '4',
            'name'=> 'News & Events',
            'url'=> 'new-events',
            'subMenu'=> [],
        ],
        [
            'id'=> '5',
            'name'=> 'Contact Us',
            'url'=> 'contacts',
            'subMenu'=> [],
        ],
    ]
@endphp
<div class=" bg-primary py-3 navbar-main">
    <div class="container">
        <div class="navbar nav-bar-social-wrapper">
            <div class="navbar-start">
            </div>
            <div class="navbar-end">
                <ul class="nav-bar-social">
                    @for ($i = 1; $i <= 7; $i++)
                    <a href="{{ url('/') }}" >
                        <img src="{{ Module::asset('frontend:img/icon/icontopbar'.$i.'.png') }}" alt="icon">
                    </a>
                    @endfor
                </ul>
            </div>
        </div>
        <div class="navbar  bg-primary">
            <div class="navbar-start">
                <div class="logo">
                    <a href="{{ url('/') }}" >
                        <h1 class=" text-28 xtn:text-36  text-white">GRACIAS</h1>
                    </a>
                </div>
            </div>
            <div class="navbar-end">
                <div class="hidden lg:flex">
                    <x-frontend::menu.MenuHorizontal :menuData="$mainMenu"></x-frontend>
                </div>
                <x-frontend::language.LanguageToggleSwitch></x-frontend>
                <x-frontend::menu.MenuMobileNavigation :menuData="$mainMenu"></x-frontend>
            </div>
        </div>
    </div>
</div>