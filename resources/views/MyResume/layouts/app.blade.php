@php
    $siteName = get_setting_value('_site_name');
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $siteName }} - Full Stack Developer</title>

    <!-- Favicons -->
    <link href="{{ asset('MyResume/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('MyResume/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    @include('MyResume.layouts.partial.style')


    <!-- =======================================================
  * Template Name: MyResume
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <x-my-resume.navbar-component />

    </header><!-- End Header -->

    @if (Route::current()->getName() === 'home')
        @if (get_visibility_section('_home'))
            <x-my-resume.jumbotron-section />
        @endif
    @endif

    <main id="main">

        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>{{ get_setting_value('_site_name') }}</h3>
            {!! get_setting_value('_site_description') !!}
            <div class="social-links">
                <a href="{{ get_setting_value('_github') }}" class="github"><i class="bx bxl-github"></i></a>
                <a href="{{ get_setting_value('_facebook') }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{ get_setting_value('_instagram') }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="{{ get_setting_value('_youtube') }}" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="{{ get_setting_value('_linkedin') }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="{{ get_setting_value('_whatsapp') }}" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>{{ get_setting_value('_site_name') }}</span></strong>. All Rights
                Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: [license-url] -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('MyResume.layouts.partial.script')

</body>

</html>
