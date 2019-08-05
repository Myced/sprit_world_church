@extends('layouts.site')

@section('title')
    {{ __("Gallery") }}
@endsection

@section('content')
<header id="page-banner" class="banner-main-block">
   <div class="banner-img" style="background-image: url('images/top-banner.jpg')">
     <div class="overlay-bg"></div>
     <div class="container">
       <div class="banner-block">
         <h3 class="section-heading">Gallery</h3>
         <ol class="breadcrumb">
           <li><a href="/">Home</a></li>
           <li class="active"><a>Gallery</a></li>
         </ol>
       </div>
     </div>
   </div>
</header>

<section id="portfolio" class="portfolio-main-block portfolio-three">
    <div class="container-fluid">
      <div class="section text-center">
        <h3 class="section-heading">Our Gallery</h3>
        <h5 class="sub-heading lobster">
            Here is a collection of some of our images.
            <br>
            Go through them and enjoy. <strong>Happy Viewing!!!!</strong>
        </h5>
      </div>
    </div>
    <div class="portfolio-content">
      <div class="container">
        <div class="row">
          <div class="portfolio-block portfolio-popup">
            <div class="col-md-4 col-sm-6 portfolio-item portfolio-btm-mrgn">
              <div class="portfolio-img">
                <img src="images/gallery/gallery-08.jpg" class="img-responsive" alt="portfolio-img-1">
                <div class="portfolio-overlay"><a href="images/gallery/gallery-08.jpg"><i class="fa fa-plus"></i></a></div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item portfolio-btm-mrgn">
              <div class="portfolio-img">
                <img src="images/gallery/gallery-02.jpg" class="img-responsive" alt="portfolio-img-2">
                <div class="portfolio-overlay"><a href="images/gallery/gallery-02.jpg"><i class="fa fa-plus"></i></a></div>
              </div>
            </div>
            <div class="col-md-4 hidden-sm portfolio-item portfolio-btm-mrgn">
              <div class="portfolio-img">
                <img src="images/gallery/gallery-03.jpg" class="img-responsive" alt="portfolio-img-3">
                <div class="portfolio-overlay"><a href="images/gallery/gallery-03.jpg"><i class="fa fa-plus"></i></a></div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item portfolio-btm-mrgn">
              <div class="portfolio-img">
                <img src="images/gallery/gallery-04.jpg" class="img-responsive" alt="portfolio-img-4">
                <div class="portfolio-overlay"><a href="images/gallery/gallery-04.jpg"><i class="fa fa-plus"></i></a></div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item portfolio-btm-mrgn">
              <div class="portfolio-img">
                <img src="images/gallery/gallery-05.jpg" class="img-responsive" alt="portfolio-img-5">
                <div class="portfolio-overlay"><a href="images/gallery/gallery-05.jpg"><i class="fa fa-plus"></i></a></div>
              </div>
            </div>
            <div class="col-md-4 hidden-sm portfolio-item portfolio-btm-mrgn">
              <div class="portfolio-img">
                <img src="images/gallery/gallery-11.jpg" class="img-responsive" alt="portfolio-img-6">
                <div class="portfolio-overlay"><a href="images/gallery/gallery-11.jpg"><i class="fa fa-plus"></i></a></div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item portfolio-btm-mrgn">
              <div class="portfolio-img">
                <img src="images/gallery/gallery-14.jpg" class="img-responsive" alt="portfolio-img-7">
                <div class="portfolio-overlay"><a href="images/gallery/gallery-14.jpg"><i class="fa fa-plus"></i></a></div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item portfolio-btm-mrgn">
              <div class="portfolio-img">
                <img src="images/gallery/gallery-08.jpg" class="img-responsive" alt="portfolio-img-8">
                <div class="portfolio-overlay"><a href="images/gallery/gallery-08.jpg"><i class="fa fa-plus"></i></a></div>
              </div>
            </div>
            <div class="col-md-4 hidden-sm portfolio-item portfolio-btm-mrgn">
              <div class="portfolio-img">
                <img src="images/gallery/gallery-09.jpg" class="img-responsive" alt="portfolio-img-9">
                <div class="portfolio-overlay"><a href="images/gallery/gallery-09.jpg"><i class="fa fa-plus"></i></a></div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
              <div class="portfolio-img">
                <img src="images/gallery/gallery-10.jpg" class="img-responsive" alt="portfolio-img-10">
                <div class="portfolio-overlay"><a href="images/gallery/gallery-10.jpg"><i class="fa fa-plus"></i></a></div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
              <div class="portfolio-img">
                <img src="images/gallery/gallery-11.jpg" class="img-responsive" alt="portfolio-img-11">
                <div class="portfolio-overlay"><a href="images/gallery/gallery-11.jpg"><i class="fa fa-plus"></i></a></div>
              </div>
            </div>
            <div class="col-md-4 hidden-sm portfolio-item">
              <div class="portfolio-img">
                <img src="images/gallery/gallery-15.jpg" class="img-responsive" alt="portfolio-img-12">
                <div class="portfolio-overlay"><a href="images/gallery/gallery-15.jpg"><i class="fa fa-plus"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
@endsection
