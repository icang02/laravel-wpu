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
    <link rel="stylesheet" href="css/loginlogin.css">
    <title>{{ $title }} | Electi Store</title>
</head>

<body>

    <section class="d-flex align-items-center" style="min-height: 100vh">
        <div class="container">
            <div class="row g-0 shadow">

                <div class="col-lg-5 bg-img"></div>

                <div class="col-lg-7 px-5 py-5 ">
                    <h1 class="fw-bold py-3"><a href="/" class="text-decoration-none text-dark">ETC</a></h1>
                    <h4 class="mb-4">Sign into your account</h4>

                    @if (session()->has('success'))
                        <div class="col-lg-7">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @elseif (session()->has('loginError'))
                        <div class="col-lg-7">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif

                    <form action="/login" method="post">
                        @csrf
                        <div class="col-lg-7">
                            <input type="email" name="email"
                                class="form-control my-3 p-3 @error('email') is-invalid @enderror"
                                placeholder="Email Address" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="
                                    col-lg-7">
                            <input type="password" name="password"
                                class="form-control my-3 p-3 @error('password') is-invalid @enderror"
                                placeholder="Password" required>
                            @error('password')
                                <div class="invalid-feedback mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-7">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-dark fw-bold py-3">Login</button>
                            </div>
                        </div>

                        <a class="d-block mt-5 text-decoration-none" href="">Forget password?</a>
                        <p class="mt-3 opacity-75">Don't have an account?
                            <a class="text-decoration-none" href="/register">Register now</a>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>


    {{-- Bootsrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js integrity="
        sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
