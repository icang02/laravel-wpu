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
                    <h4 class="mb-4">Create into your account</h4>

                    <form action="" method="post">
                        @csrf
                        <div class="col-lg-7">
                            <input type="text" name="name"
                                class="form-control mt-3 p-3 @error('name') is-invalid @enderror" placeholder="Full Name"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-lg-7">
                            <input type="text" name="username"
                                class="form-control mt-3 p-3 @error('username') is-invalid @enderror"
                                placeholder="Username" value="{{ old('username') }}" required>
                            @error('username')
                                <div class="invalid-feedback mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class=" col-lg-7">
                            <input type="email" name="email"
                                class="form-control mt-3 p-3 @error('email') is-invalid @enderror"
                                placeholder="Email Address" value="{{ old('email') }}" required>
                            @error('email')
                                <div id=" validationServer03Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class=" col-lg-7">
                            <input type="password" name="password"
                                class="form-control mt-3 p-3 @error('password') is-invalid @enderror"
                                placeholder="Password" required>
                            @error('password')
                                <div class="invalid-feedback mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-lg-7">
                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-dark fw-bold py-3">Register</button>
                            </div>
                        </div>

                        <p class="mt-5 opacity-75">Already have an account?
                            <a class="text-decoration-none" href="/login">Login</a>
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
