<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>WindowOfHope | Login</title>
        <link href="assets/img/favicon.png" rel="icon" />
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />

        <!-- Vendor CSS Files -->
        <link
            href="assets/vendor/bootstrap/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
            rel="stylesheet"
        />
        {{--
        <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
        --}}
        <link
            href="assets/vendor/swiper/swiper-bundle.min.css"
            rel="stylesheet"
        />
        <link
            href="assets/vendor/glightbox/css/glightbox.min.css"
            rel="stylesheet"
        />

        <!-- Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet" />
    </head>
    <body>
        <main class="main">
            <section id="contact" class="contact section">
                <div class="container section-title">
                    <h2>Register</h2>
                    <p>Daftar Akun</p>
                </div>
                @if (session('success'))
                <div>{{ session("success") }}</div>
                @endif

                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <img
                                src="assets/img/they.jpg"
                                alt="Ilustration"
                                class="auth-img"
                            />
                        </div>

                        <div class="col-lg-6">
                            <form
                                action="{{ route('postregister') }}"
                                method="post"
                                class="php-email-form"
                            >
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <input
                                            type="text"
                                            name="name"
                                            id="name"
                                            value="{{ old('name') }}"
                                            class="form-control"
                                            placeholder="Masukkan nama lengkap"
                                        />
                                        @error('name')
                                        <div>{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <input
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            id="email"
                                            value="{{ old('email') }}"
                                            placeholder="Masukkan email"
                                            required
                                        />
                                        @error('email')
                                        <div>{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <input
                                            type="password"
                                            class="form-control"
                                            name="password"
                                            id="password"
                                            placeholder="Masukkan password"
                                            required
                                        />
                                        @error('password')
                                        <div>{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <input
                                            type="password"
                                            class="form-control"
                                            name="password_confirmation"
                                            id="password_confirmation"
                                            placeholder="Konfirmasi password"
                                            required
                                        />
                                    </div>

                                    <button
                                        type="submit"
                                        class="col-md-12 text-center"
                                    >
                                        Daftar Akun
                                    </button>
                                </div>
                            </form>
                            <a href="/login">Sudah punya akun?</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
