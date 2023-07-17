@extends('home.main')
@section('title','Pagina Inicial')
@section('content')
    <main id="main">

        <!-- Hero Section - Home Page -->
        @include('contents.home-contents-sections.hero-section')
        <!-- End Hero Section -->

        <!-- Clients Section - Home Page -->
        @include('contents.home-contents-sections.clients-section')
        <!-- End Clients Section -->

        <!-- About Section - Home Page -->
        @include('contents.home-contents-sections.sobre-nos-section')
        <!-- End About Section -->

        <!-- Stats Section - Home Page -->
        @include('contents.home-contents-sections.stats-section')
        <!-- End Stats Section -->

        <!-- Services Section - Home Page -->
        @include('contents.home-contents-sections.services-section')
        <!-- End Services Section -->

        <!-- Features Section - Home Page -->
        @include('contents.home-contents-sections.features-section')
        <!-- End Features Section -->

        <!-- Portfolio Section - Home Page -->
        @include('contents.home-contents-sections.portfolio-section')
        <!-- End Portfolio Section -->

        <!-- Pricing Section - Home Page -->
        {{-- @include('contents.home-contents-sections.pricing-section') --}}
        <!-- End Pricing Section -->

        <!-- Faq Section - Home Page -->
        @include('contents.home-contents-sections.faq-section')
        <!-- End Faq Section -->

        <!-- Team Section - Home Page -->
        @include('contents.home-contents-sections.team-section')
        <!-- End Team Section -->

        <!-- Call-to-action Section - Home Page -->
        @include('contents.home-contents-sections.call-to-action-section')
        <!-- End Call-to-action Section -->

        <!-- Testimonials Section - Home Page -->
        @include('contents.home-contents-sections.testimonials-section')
        <!-- End Testimonials Section -->

        <!-- Recent-posts Section - Home Page -->
        @include('contents.home-contents-sections.recents-posts-section')
        <!-- End Recent-posts Section -->

        <!-- Contact Section - Home Page -->
        @include('contents.home-contents-sections.contacts-section')
        <!-- End Contact Section -->

    </main>
@endsection
