{{-- <x-guest-layout> --}}
    <!-- Session Status -->
{{-- </x-guest-layout> --}}

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
</head>
<body>
    <section>
        <div class="leaves">
            <div class="set">
                <div><img src="{{ asset('assets/login-images/leaf_01.png') }}"></div>
                <div><img src="{{ asset('assets/login-images/leaf_02.png') }}"></div>
                <div><img src="{{ asset('assets/login-images/leaf_03.png') }}"></div>
                <div><img src="{{ asset('assets/login-images/leaf_04.png') }}"></div>
                <div><img src="{{ asset('assets/login-images/leaf_01.png') }}"></div>
                <div><img src="{{ asset('assets/login-images/leaf_02.png') }}"></div>
                <div><img src="{{ asset('assets/login-images/leaf_03.png') }}"></div>
                <div><img src="{{ asset('assets/login-images/leaf_04.png') }}"></div>
            </div>
        </div>
        <img src="{{ asset('assets/login-images/bg.jpg') }}" class="bg">
        <img src="{{ asset('assets/login-images/girl.png') }}" class="girl">
        <img src="{{ asset('assets/login-images/trees.png') }}" class="trees">
        <div class="login">
            <h2>Log In</h2>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form class="login_form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="inputBox">
                    {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                    <input id="email" placeholder="Enter your email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="inputBox">
                    {{-- <x-input-label for="password" :value="__('Password')" /> --}}

                    <input id="password" placeholder="Enter your password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="inputBox">
                    <button class="submit" id="btn">
                        {{ __('Log in') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="f_password" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </form>

        </div>
    </section>
</body>
</html>
