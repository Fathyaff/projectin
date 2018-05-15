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
    <h2 class="text-center text-uppercase text-secondary mb-0">Create Project</h2>
    <hr class="star-dark mb-5">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
        <form name="sentMessage" id="contactForm" novalidate="novalidate" action="{{ url('project/create') }}" method="post">
          {{ csrf_field() }}
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Project Name</label>
              <input class="form-control" name="projectName" id="projectName" type="text" placeholder="Project Name" required="required" data-validation-required-message="Please enter project name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Duration</label>
              <input class="form-control" name="duration" id="duration" type="number" onkeydown="return false" placeholder="Duration" required="required" data-validation-required-message="Please enter project duration.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Desain</label>
              <!-- <input class="form-control" name="design" id="design" type="tel" placeholder="Desain" required="required" data-validation-required-message="Please enter is this project already have design asset."> -->
              <input type="radio" name="design" id="design" value="false"/>Already have
              <input type="radio" name="design" id="design" value="true"/>Need Designer
              <input type="radio" name="design" id="design" value="false"/>Doesnt Need
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Deskripsi</label>
              <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" placeholder="Deskripsi" required="required" data-validation-required-message="Please enter project description."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Minimum Budget</label>
              <input class="form-control" name="minHarga" id="minHarga" type="number" step="250000" onkeydown="return false" placeholder="Minimum Budget" required="required" data-validation-required-message="Please enter your minimim bugdet.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Maximum Budget</label>
              <input class="form-control" name="maxHarga" id="maxHarga" type="number" step="250000" onkeydown="return false" placeholder="Maximum Budget" required="required" data-validation-required-message="Please enter your maximum budget.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>List Features</label>
              <select class="form-control" name="features[]" id="features" multiple="multiple" placeholder="List Features" required="required" data-validation-required-message="Please select your project features.">
                @foreach ($features as $feature)
                  <option value="{{ $feature->nama_fitur }}">{{ $feature->nama_fitur }}</option>
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