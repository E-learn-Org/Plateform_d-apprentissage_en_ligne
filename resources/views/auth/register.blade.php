
<html lang="en">
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <section>
            <div class="container">
                <div id="scene">
                    <div class="layer" data-depth-x="-0.5" data-depth-y="0.15"><img src="{{ asset('assets/sign-up-images/moon.png') }}"></div>
                    <div class="layer" data-depth-x="0.15"><img src="{{ asset('assets/sign-up-images/mountains02.png') }}"></div>
                    <div class="layer" data-depth-x="0.25"><img src="{{ asset('assets/sign-up-images/mountains01.png') }}"></div>
                    <div class="layer" data-depth-x="-0.25"><img src="{{ asset('assets/sign-up-images/road.png') }}"></div>
                </div>
            </div>

            <div class="login">
                <h2>Sign Up/ Register</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="inputBox">
                        {{-- <x-input-label for="name" :value="__('Name')" /> --}}
                        <input class="input" placeholder="Enter your name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="inputBox">
                        {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                        <input class="input" placeholder="Enter your email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="inputBox">
                        {{-- <x-input-label for="password" :value="__('Password')" /> --}}

                        <input placeholder="Enter your password" class="input" id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="inputBox">
                        {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

                        <input placeholder="Enter confirm password" class="input" id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="inputBox">
                        <x-input-label style="color: #fff;" for="role_id" value="{{ __('Registered as:') }}"/>
                        <select class="input" name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-300">
                            <option value="student">Student</option>
                            <option value="instructor">Instructor</option>
                        </select>
                    </div>

                    <div class="inputBox">

                        <button class="submit">
                            {{ __('Register') }}
                        </button>

                        <a class="login_btn" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                </form>
            </div>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js" integrity="sha512-/6TZODGjYL7M8qb7P6SflJB/nTGE79ed1RfJk3dfm/Ib6JwCT4+tOfrrseEHhxkIhwG8jCl+io6eaiWLS/UX1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="{{ asset('script/script.js') }}"></script>
    </body>
</html>


