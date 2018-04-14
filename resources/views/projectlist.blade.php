@extends('welcome')
@section('project-list')
<!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
            <h2 class="col-md-8 text-right text-uppercase text-secondary mb-0">Project List</h2>
            <div class="col-md-4 text-right">
                <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-plus"></i> Create a Project</a>
            </div>
        </div> 
        <hr class="star-dark mb-5">      
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cabin.png" alt="">
              <h4 class="text-center text-secondary mb-0">Big Project</h4>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
                <img class="img-fluid" src="img/portfolio/circus.png" alt="">              
                <h4 class="text-center text-secondary mb-0">Medium Project</h4>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cake.png" alt="">
              <h4 class="text-center text-secondary mb-0">Small Project</h4>
            </a>
          </div>
        </div>            
      </div>
    </section>



       <!-- Portfolio Modal 1 -->
       <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <div>
                <table id="tableAllProject">
                    <thead>
                        <tr>
                            <td>Nama Project</td>  
                            <td>Deskripsi</td>
                            <td>Fitur</td>  
                            <td>Durasi</td>  
                            <td>Harga</td>
                            <td>Pilih</td>  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->nama }}</td> <!-- Nama -->
                            <td>{{ $project->deskripsi }}</td> <!-- Deskripsi -->
                            <td> <!-- List Fitur -->
                            @foreach ($project->listFitur as $fitur)
                                <li>{{ $fitur->nama_fitur }}</li>
                            @endforeach
                            </td> 
                            <td>{{ $project->duration }} Bulan</td> <!-- Durasi -->
                            <td>{{ $project->min_harga }} - {{ $project->max_harga }}</td> <!-- Harga -->
                            <td><button>Apply</button></td> <!-- Harga -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              
              
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              
             
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>




    @yield('engineer-list')
@endsection  