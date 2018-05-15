@extends('layouts.template') 
@section('content')

@component('layouts.header')
  <li class="nav-item mx-0 mx-lg-1">
    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Projects</a>
  </li>
  <li class="nav-item mx-0 mx-lg-1">
    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#software-engineer">Engineer Team</a>
  </li>
  <li class="nav-item mx-0 mx-lg-1">
    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
  </li>
  <li class="nav-item mx-0 mx-lg-1">
    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact Us</a>
  </li>
@endcomponent

<!-- Header -->
<header class="masthead bg-primary text-white text-center">
  <div class="container">
    <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
    <h1 class="text-uppercase mb-0">Start Your ProjectS
      <br>Now!</h1>
    <hr class="star-light">
    <h2 class="font-weight-light mb-0">Web Developer - Mobile Developer - iOS Developer</h2>
  </div>
</header>

@component('components.project_list')
@endcomponent
@component('components.engineer_list')
@endcomponent
@component('components.about')
@endcomponent
@component('components.contact')
@endcomponent
@component('components.footer')
@endcomponent

@push('scripts')
  <script src="js/landing_page.js"></script>
@endpush