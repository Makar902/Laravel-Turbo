<header>
    <link rel="stylesheet" href="{{asset('css/out.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleDropDown.css')}}">
    <div class="container flex justify-between items-center">

        <div class="logo-container">
            <button class="logo-button" onclick="location.href='/shop'">
                <img src="{{asset('images/Logo.jpg')}}" alt="Logo" class="logo">
            </button>
            <button class="button-30" onclick="location.href='/home'">Home</button>
            <button class="button-30" onclick="location.href='/about'">About Us</button>
        </div>
        <div class="buttons-container ">
            @guest
                <button class="button-85" onclick="location.href='/login'">Login</button>
                <button class='transparent-button' onclick="location.href='/register'">

                    <div class='directionAwareButton'>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='segment'></div>
                        <div class='button' onclick="location.href='/register'">
                            Register
                        </div>
                    </div>
                </button>
            @else

                <div class="dropdown">
                    <button class="button-30">{{Auth::user()->name}}</button>
                    <div class="dropdown-content">
                        <a href="#">Profile</a>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                </div>
            @endguest
        </div>

    </div>
</header>
