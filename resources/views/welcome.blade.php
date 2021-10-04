@extends('layouts.front')

@section('content')

  <div id="myCarousel" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      
        <img src="{{ asset('images/img1.jpg') }}" class="bd-placeholder-img" width="100%" height="100%" alt="">
        <div class="container">
          <div class="carousel-caption text-start">
          
          </div>
        </div>
      </div>
      
      <div class="carousel-item">
        
        <img src="{{ asset('images/img2.jpg') }}" class="bd-placeholder-img" width="100%" height="100%" alt="">
      
        <div class="container">
          <div class="carousel-caption">
         

          </div>
        </div>
      </div>
      <div class="carousel-item">
      
        <img src="{{ asset('images/img3.jpg') }}" class="bd-placeholder-img" width="100%" height="100%" alt="">
        <div class="container">
          <div class="carousel-caption text-end">
           
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-6">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->

        <h2>LSSP DATABASE</h2>
        <p>
        LSSP Database contains registered local suppliers and service providers of different categories and specializations who are legally eligible to provide goods and services or execute works in the midstream and downstream petroleum and natural gas sub-sector in Tanzania.
        </p>
        <p><a class="btn btn-secondary" href="/lssp">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-6">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->

        <h2>PROFESSIONALS DATABASE</h2>
        <p>Professionals Database contains all registered Tanzanian professionals who are ready to work in petroleum and natural gas value chain, both locally and internationally.</p>
        <p><a class="btn btn-secondary" href="/professional">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <!-- <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div>/.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider" >

    <div class="row featurette" id="about-section">
      <div class="col-md-7">
        <h2 class="featurette-heading" >WHAT IS CQS   <span class="text-muted">?</span></h2>
        <p class="lead">
        Common Qualification System (CQS) is a tool intended to streamline standards, capacities and capabilities of suppliers and service providers in order to help licensees, contractors or any other operator who are carrying out petroleum and natural gas activities in Tanzania to obtain eligible local suppliers and services providers for provision of goods, services or execution of works. In other words, CQS is intended to classify and recognize capacities, capabilities, skills, knowledge and competencies of local suppliers and service providers in their respective areas of specialization or expertise. Further, CQS provides a platform for registration of Tanzanian Professionals who intend to work with International Oil Companies within and outside the country. Also, Licensees and Contractors who are carrying out midstream and downstream petroleum and natural gas activities in Tanzania are required to submit their Local Content Plans and Local Content Performance Reports to EWURA for approval. Thus, CQS provides space for electronic filing of such Plans and Reports.
        </p>
        <!-- <p><a class="btn btn-secondary" href="#">Check More &raquo;</a></p> -->
      </div>
      <div class="col-md-5 pt-5 container">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->

        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="700" src="{{ asset('images/img4.png') }}"  alt="">
     
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">CQS OBJECTIVE  <span class="text-muted"></span></h2>
        <p class="lead">
        The main objective of CQS is to establish a standard and transparent process for registration of local suppliers and service providers, Tanzanian professionals and electronic filing of local content plans and reports. It is a tool geared to help EWURA in the monitoring and evaluation of local content performance by licensees, contractors, sub-contractors or any other person carrying out midstream and downstream petroleum or natural gas activities in Tanzania. This objective is consistent with the current Government objectives for industrialization, job creation and regulatory framework.
      </p>
      </div>
      <div class="col-md-5 order-md-1">
        
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{ asset('images/img5.png') }}"  alt="">
      </div>
    </div>
<!-- 
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div> -->

    

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <!-- <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer> -->


  @endsection