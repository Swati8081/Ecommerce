<x-user.layouts.app>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    


    <form method="POST" action="{{ route('login') }}" class="login-form common-form mx-auto">
        @csrf
        <div class="section-header mb-3">
            <h2 class="section-heading text-center">Login</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <fieldset>
                    <label class="label">Email address</label>
                    <input type="email" name="email" required autofocus autocomplete="username">
                </fieldset>
                @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
            </div>
            <div class="col-12">
                <fieldset>
                    <label class="label">Password</label>
                    <input type="password" name="password" required autofocus autocomplete="current-password">
                </fieldset>
                @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
            </div>
            <div class="col-12 mt-3">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
                <button type="submit" class="btn-primary d-block mt-4 btn-signin">SIGN IN</button>
                <a href="{{route('register')}}" class="btn-secondary mt-2 btn-signin">CREATE AN ACCOUNT</a>
            </div>
        </div>
    </form>
</x-user.layouts.app>
