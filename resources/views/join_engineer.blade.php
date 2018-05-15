@extends('layouts.template') 
@section('content')

@component('layouts.header')
  <li class="nav-item mx-0 mx-lg-1">
    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/">Home</i>
    </a>
  </li>
@endcomponent

<section id="contact">
  <div class="container">
    <br>
    <br>
    <h2 class="text-center text-uppercase text-secondary mb-0">Join Us</h2>
    <hr class="star-dark mb-5">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
        <form name="sentMessage" id="contactForm" novalidate="novalidate" action="{{ url('users/create/engineer') }}" method="post">
          {{ csrf_field() }}
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Name</label>
              <input class="form-control" name="name" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Email Address</label>
              <input class="form-control" name="email" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Universitas</label>
              <input class="form-control" name="univ" id="univ" type="tel" placeholder="University" required="required" data-validation-required-message="Please enter your University.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Skills</label>
              <select class="form-control" name="skills[]" id="skills" multiple="multiple" placeholder="skills" required="required" data-validation-required-message="Please select your skills.">
                @foreach ($skills as $skill)
                  <option value="{{ $skill->nama_skill }}">{{ $skill->nama_skill }}</option>
                @endforeach
              </select>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@component('components.footer')
@endcomponent
@endsection