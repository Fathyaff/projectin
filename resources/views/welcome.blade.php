   @extends('layouts.header')

   @section('landingpage')
    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        <h1 class="text-uppercase mb-0">Start Your ProjectS <br>Now!</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Web Developer - Mobile Developer - iOS Developer</h2>
      </div>
    </header>

    @yield('project-list')
@endsection
