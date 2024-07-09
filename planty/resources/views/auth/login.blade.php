<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Plant Care</title>
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
        <link
            href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" rel="stylesheet">
        <link href="{{ asset('/css/utils.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/register_style.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- Session Status -->
        <x-auth-session-status :status="session('status')" class="mb-4" />

        <div class='row register-container'>
            <div class='col-5 register-img-container position-relative'>
                {{-- <img src="{{ asset('/assets/planty.png') }}"> --}}
                <video autoplay loop muted preload>
                    <source src="{{ asset('/assets/login/login_background.mp4') }}" type="video/mp4">
                </video>
            </div>
            <form action="{{ route('login') }}" class="col-7 form-container" enctype="multipart/form-data"
                method="POST">

                @csrf
                <h1 class="planty-heading-1 text-center mb-2">Register</h1>
                <div class="form-textfield">
                    <div class="planty-heading-4 register-item">
                        <label class='p-0' for='email'>Email</label>
                        <input autocomplete="email" id='email' name='email' required type='text'>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="planty-heading-4 register-item">
                        <label class='p-0' for='password'>Password</label>
                        <input autocomplete="new-password" id='password' name='password' required type='password'>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="block mt-4">
                    <label class="inline-flex items-center" for="remember_me">
                        <input class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" id="remember_me"
                            name="remember" type="checkbox">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <button class="mt-5 register-btn planty-heading-4" name='login' type='submit'>Login</button>
                <p class="text-center mt-2 planty-text-paragraph">Dont have an account?<a class="text-black"
                        href="#">Register</a></p>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>

</html>
