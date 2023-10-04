<x-user.layouts.app>
    


    <form method="POST" action="{{ route('register') }}" class="login-form common-form mx-auto">
        @csrf
        <div class="section-header mb-3">
            <h2 class="section-heading text-center">Register</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <fieldset>
                    <label class="label">First name</label>
                    <input type="text" name="name">
                </fieldset>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="col-12">
                <fieldset>
                    <label class="label">Email</label>
                    <input type="text" name="email" :value="old('email')" required autocomplete="username">
                </fieldset>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            {{-- <div class="col-12">
                <fieldset>
                    <label class="label">Email address</label>
                    <input type="email">
                </fieldset>
            </div> --}}
            <div class="col-12">
                <fieldset>
                    <label class="label">Password</label>
                    <input type="password"
                    name="password"
                    required autocomplete="new-password">
                </fieldset>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="col-12">
                <fieldset>
                    <label class="label">Password</label>
                    <input type="password"
                    name="password_confirmation" required autocomplete="new-password">
                </fieldset>
                @error('password_confirmation')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>



            
            <div class="col-12 mt-3">
                <button type="submit" class="btn-primary d-block mt-3 btn-signin">CREATE</button>
            </div>
        </div>
    </form>
</x-user.layouts.app>
