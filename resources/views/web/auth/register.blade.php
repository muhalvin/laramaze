<x-auth-layout>
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <h3 class="auth-title">Sign up</h3>
                <p class="auth-subtitle mb-3">Input your data to register to our website.</p>

                <x-auth-session-status class="mb-2" :status="session('status')" />

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group position-relative mb-3">
                        <x-input-label for="email" :value="__('Email')" />

                        <x-text-input id="email" class="form-control form-control-xl" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="form-group position-relative mb-3">
                        <x-input-label for="name" :value="__('Name')" />

                        <x-text-input id="name" class="form-control form-control-xl" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />

                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="form-group position-relative mb-3">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="form-control form-control-xl" type="password" name="password" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="form-group position-relative mb-3">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="form-control form-control-xl" type="password" name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <button class="btn btn-outline-primary btn-block btn-lg shadow-lg mt-3">
                        Register
                    </button>

                    <a href="{{ route('auth.google') }}" class="btn btn-primary btn-block btn-lg mt-3">
                        <i class="bi bi-google me-1"></i>
                        <span class="text-sm">Sign up with Google</span>
                    </a>
                </form>
                <div class="text-center mt-3 text-lg fs-6">
                    <p class="text-gray-600">
                        Already registered?
                        <a href="{{ route('login') }}" class="font-bold">
                            Sign In
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>
</x-auth-layout>
