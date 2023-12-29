@include('layouts.layoutView')
@include('layouts.headerView')
@include('layouts.footerView')
<div>
    <div class="frame">
        <div class="signup-link">
            <a class="li">Sign Up</a>
        </div>

        <form class="form-signin" method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="name">Name</label>
                <input class="form-styling" type="text" name="name" value="{{ old('name') }}" required autofocus/>
                @error('name')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="email">Email</label>
                <input class="form-styling" type="email" name="email" value="{{ old('email') }}" required/>
                @error('email')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" class="form-styling" name="password" required/>
                @error('password')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-styling" name="password_confirmation" required/>
            </div>

            <button type="submit"  class="btn-signup-unstyled">

                <a class="btn-signup">{{ __('Register') }}</a>
            </button>
        </form>
    </div>
</div>
