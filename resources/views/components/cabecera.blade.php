<header>
    <nav>
        {{-- <div class="logo"></div> --}}
        <div class="header__logo">
            <img  src="{{ Vite::asset('resources/images/logo-vt.svg') }}" alt="{{ __('Logo of Roimer\'s portfolio') }}">
            <span>{{ __('Portfolio') }}</span>   
        </div>   
        <ul> 
            <li><a href="#">{{ __('About me') }}</a></li>
            <li><a href="#">{{ __('Projects') }}</a></li>
            <li><a href="#">{{ __('Skills') }}</a></li>
            <li><a href="#">{{ __('Contact me') }}</a></li>
            <li>
                <x-selectoridioma />
            </li>
        </ul>

        <button class="header__menu-toggle-btn">
            <i class="fa-solid fa-bars"></i>
        </button>

    </nav>

    <menu class="header__drop-down">
        <li><a href="#">{{ __('About me') }}</a></li>
        <li><a href="#">{{ __('Projects') }}</a></li>
        <li><a href="#">{{ __('Skills') }}</a></li>
        <li><a href="#">{{ __('Contact me') }}</a></li>
        <li>
            <x-selectoridioma />
        </li>
    </menu>

</header>