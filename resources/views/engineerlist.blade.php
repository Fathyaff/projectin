@extends('projectlist')
@section('engineer-list')
<!-- Portfolio Grid Section -->
    <section class="portfolio" id="software-engineer">
      <div class="container">
         <div class="row">
            <h2 class="col-md-9 text-right text-uppercase text-secondary mb-0">Software Engineer</h2>
            <div class="col-md-3 text-right">
                <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-plus"></i> Join</a>
            </div>
        </div> 
        <hr class="star-dark mb-5">
        <div class="row">                   
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/submarine.png" alt="">             
              <h4 class="text-center text-secondary mb-0">Expert Engineer</h4>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/safe.png" alt="">
              <h4 class="text-center text-secondary mb-0">Average Engineer</h4>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
               <img class="img-fluid" src="img/portfolio/game.png" alt="">
              <h4 class="text-center text-secondary mb-0">Beginner Engineer</h4>
            </a>
          </div>
        </div>
      </div>
    </section>

    @yield('about')
@endsection