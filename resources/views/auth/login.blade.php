@include('layouts.layoutView')
@include('layouts.headerView')
@include('layouts.footerView')
<div>
    <div class="frame">
        <div class="signup-link">
            <a class="li">Sign In</a></div>

        <form class="form-signin" method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="email">Login</label>
                <input class="form-styling" type="email" name="email" value="{{ old('name') }}" required autofocus autocomplete="username"/>
                @error('email')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password">Password</label>
                <input class="form-styling" type="password" name="password" id="password" required autocomplete="current-password"/>
                @error('password')
                <div>{{ $message }}</div>
                @enderror

            </div>

            <button type="submit" class="btn-signup-unstyled"><a class="btn-signup"> {{ __('Log in') }}</a></button>
        </form>


    </div>
</div>
