<ul id="logout" class="dropdown-content">
    <li>
        <a href="{{ route('frontend.logout.post') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ route('frontend.logout.post') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>
<ul id="currentlocale" class="dropdown-content">    
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li class="nav-item dropdown">
            <a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ ucfirst($properties['native']) }}
            </a>
        </li>
    @endforeach    
</ul>

<nav class="white z-depth-1">
    <div class="nav-wrapper">
        <a href="{{ route('frontend.home') }}" class="brand-logo">
            {{ config('app.name', 'Laravel') }}
        </a>
        <ul class="right hide-on-med-and-down">
            <li>
                <a class="dropdown-button" href="#!" data-activates="currentlocale">
                    {{ ucfirst(LaravelLocalization::getCurrentLocale()) }} <i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>

            @guest
                <li>
                    <a href="{{ route('frontend.login.get') }}">{{ trans('app.login') }}</a>
                </li>
                <li>
                    <a href="{{ route('frontend.register.get') }}">{{ trans('app.register') }}</a>
                </li>
                
                <li>
                    <a href="{{ route('renter.home') }}">{{ __('Espace Loueur') }}</a>
                </li>

                <li>
                    <a href="{{ route('school.home') }}">{{ __('Espace Ecole') }}</a>
                </li>

                <li>
                    <a href="{{ route('admin.home') }}">{{ __('Admin Operateur') }}</a>
                </li>
            @else                
                <li>
                    <a class="dropdown-button" href="#!" data-activates="logout">
                        {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
            @endguest

        </ul>
        
    </div>
</nav>