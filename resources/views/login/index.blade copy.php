<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    {{-- My CSS --}}
    <link rel="stylesheet" href="css/login-register.css">
    <title>{{ $title }} | Electi Store</title>
</head>

<body>

    <section>
        {{-- Form Login --}}
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx"><img src="img/img-1.jpg" alt="Image"></div>
                <div class="formBx">
                    <form action="/login" method="post">
                        @csrf
                        <h1 class="logo-text"><a href="/">ELS</a></h1>
                        <h2>Sign In</h2>

                        @if (session()->has('success'))
                            <p class="text-success mt-4 mb-2">{{ session('success') }}</p>
                        @endif

                        <input type="text" name="usernameLogin" id="usernameLogin" placeholder="Username">
                        <input type="password" name="passwordLogin" id="passwordLogin" placeholder="Password">
                        <button type="submit" name="login">Login</button>
                        <p class="signup">don't have an account? <a href="#" onclick="toggleForm();">Sign up.</a>
                        </p>
                    </form>
                </div>
            </div>

            {{-- Form Registration --}}
            <div class="user signupBx">
                <div class="formBx">
                    <form action="/login#" method="post">
                        @csrf

                        <h1 class="logo-text"><a href="/">ELS</a></h1>
                        <h2>Create an account</h2>

                        <input class="form-control" type="text" name="name" placeholder="Full Name"
                            value="{{ old('name') }}" required>
                        @error('name')
                            <small class="text-danger opacity-75">
                                {{ $message }}
                            </small>
                        @enderror

                        <input type="text" name="username" placeholder="Username" value="{{ old('username') }}"
                            required>
                        @error('username')
                            <small class="text-danger opacity-75">
                                {{ $message }}
                            </small>
                        @enderror

                        <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}"
                            required>
                        @error('email')
                            <small class="text-danger opacity-75">
                                {{ $message }}
                            </small>
                        @enderror

                        <input type="password" name="password" placeholder="Create Password" required>
                        @error('password')
                            <small class="text-danger opacity-75 d-block">
                                {{ $message }}
                            </small>
                        @enderror

                        <button type="submit" name="register">Register</button>

                        <p class="signup">
                            Already have an account?
                            <a href="#" onclick="toggleForm();">Sign in.</a>
                        </p>
                    </form>
                </div>
                <div class="imgBx"><img src="img/img-2.jpg" alt="Image"></div>
            </div>
        </div>
    </section>


    {{-- Bootsrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js integrity="
        sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- My Script --}}
    <script>
        function toggleForm() {
            section = document.querySelector('section');
            container = document.querySelector('.container');
            container.classList.toggle('active');
            section.classList.toggle('active');
        }
    </script>
</body>

</html>
