<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

        <!-- =======================================================
          * Template Name: Zelosos Site
          * Updated: July 15 2023 with Bootstrap v5.3.0
          * Author: zelososDevs
          ======================================================== -->
        @include('includes.link')

</head>
<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- Home-Header -->
    @include('home.head')

    <!-- Home-CONTENTS -->
    @yield('content')

    <!-- Home-Footer -->
    @include('home.footer')

        <!-- Scroll Top Button -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        @include('includes.scripts')

    </body>

</html>
