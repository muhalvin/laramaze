<x-auth-layout>
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <h3 class="auth-title">Sign in</h3>
                <p class="auth-subtitle mb-3">Log in with your data that you entered during registration.</p>

                <x-auth-session-status class="mb-2" :status="session('status')" />

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group position-relative mb-3">
                        <x-input-label for="email" :value="__('Email')" />

                        <x-text-input id="email" class="form-control form-control-xl" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group position-relative mb-3">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="form-control form-control-xl" type="password" name="password" required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input id="remember_me" type="checkbox" class="form-check-input me-2" name="remember">
                        <label for="remember_me" class="form-check-label text-gray-600">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3">Log in</button>
                </form>
                <div class="text-center mt-3 text-lg fs-6">
                    <p class="text-gray-600">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="font-bold">
                            Sign up
                        </a>
                    </p>
                    @if (Route::has('password.request'))
                        <p>
                            <a class="font-bold" href="{{ route('password.request') }}">
                                Forgot password?
                            </a>
                        </p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>
</x-auth-layout>
