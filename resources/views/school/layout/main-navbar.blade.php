<ul id="logout" class="dropdown-content">
        <li>
            <a href="{{ route('school.logout.post') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('school.logout.post') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
    <nav class="white z-depth-1">
        <div class="nav-wrapper">
            <a href="{{ route('frontend.home') }}" class="brand-logo">
                {{ config('app.name', 'Laravel') }}
            </a>
            <ul class="right hide-on-med-and-down">
                @guest('school')
                    
                @else                
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="logout">
                            {{ Auth::guard('school')->user()->name }} <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                @endguest
    
            </ul>
            
        </div>
    </nav>
    