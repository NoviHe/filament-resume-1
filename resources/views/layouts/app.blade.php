@php
    $siteName = get_setting_value('_site_name');
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/lightslider.min.css">
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">


    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>{{ $siteName }} - Full Stack Developer</title>
    <meta name="title" content="{{ $siteName }} - Full Stack Developer">
    <meta name="description"
        content="I am a Full Stack Developer who is experienced in the PHP programming language with the Laravel framework.">
    <meta name="keywords"
        content="freelance,full-stack,full-stack developer,php,laravel, bootstrap,jquery,vscode,css,html,kotlin,javascript,vue">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="{{ $siteName }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://novihe.github.io/CV/">
    <meta property="og:title" content="Novi Herlambang - Full Stack Developer">
    <meta property="og:description"
        content="I am a Full Stack Developer who is experienced in the PHP programming language with the Laravel framework.">
    <meta property="og:image" content="./assets/img/full.PNG">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://novihe.github.io/CV/">
    <meta property="twitter:title" content="Novi Herlambang - Full Stack Developer">
    <meta property="twitter:description"
        content="I am a Full Stack Developer who is experienced in the PHP programming language with the Laravel framework.">
    <meta property="twitter:image" content="./assets/img/full.PNG">
</head>

<body class="bg-light">
    <nav class="navbar navbar-light fixed-top bg-light shadow-sm">
        <div class="container-lg">
            <a class="navbar-brand text-primary fs-4" href="#">{{ Str::substr($siteName, 0, 6) }}<span
                    class="fs-5">{{ Str::substr($siteName, 6) }}</span></a>
            <div class="dropdown">
                <button class="btn btn-primary px-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#home">Home</a></li>
                    <li><a class="dropdown-item" href="#about">About</a></li>
                    <li><a class="dropdown-item" href="#portfolio">Portfolo</a></li>
                    <li><a class="dropdown-item" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')


    <section class="contact py-5" id="contact">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">Contact Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4 text-primary">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="text ms-3">
                            <h3 class="fs-5">Email</h3>
                            <p class="text-muted">{{ get_setting_value('_email') }}</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4 text-primary">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="text ms-3">
                            <h3 class="fs-5">Phone</h3>
                            <p class="text-muted">{{ get_setting_value('_phone') }}</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4 text-primary">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="text ms-3">
                            <h3 class="fs-5">Visit Me</h3>
                            <p class="text-muted">{{ get_setting_value('_location') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <input id="name" type="text" placeholder="Your Name"
                                        class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input id="email" type="text" placeholder="Your Email"
                                        class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <input id="subject" type="text" placeholder="Subject"
                                        class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <textarea id="message" rows="5" placeholder="Your Message"
                                        class="form-control form-control-lg fs-6 border-0 shadow-sm"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <button class="btn btn-primary px-3" type="button" id="button">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer border-top py-4">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12">
                    <p class="m-0 text-center text-muted">CopyRight &copy; {{ date('Y') . ' ' . $siteName }}</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <script src="./assets/js/lightslider.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/portfolio.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
