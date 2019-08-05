@extends('layouts.site')

@section('title')
    Contact Us
@endsection

@section('content')
<header id="page-banner" class="banner-main-block">
    <div class="banner-img" style="background-image: url('images/top-banner.jpg')">
      <div class="overlay-bg"></div>
      <div class="container">
        <div class="banner-block">
          <h3 class="section-heading">Contact us</h3>
          <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active"><a>Contact Us</a></li>
          </ol>
        </div>
      </div>
    </div>
</header>

@if(session('success') != null)
<section class="contact-main-block contact-two">
    <div class="container">
        <div class="alert alert-success">
            <strong>Success</strong>
            {{ session('success') }}
        </div>
    </div>
</section>
@endif

<section id="contact" class="contact-main-block contact-two">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-spacing">
          <div class="contact-block block-one">
            <div class="contact-icon"><i class="fa fa-home"></i></div>
            <h4 class="contact-heading">Our Address</h4>
            <p class="contact-address">PO Box 16122 Collins Street West. Victoria 8007 Australia</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-spacing">
          <div class="contact-block block-two">
            <div class="contact-icon"><i class="fa fa-phone"></i></div>
            <h4 class="contact-heading">Contact Number</h4>
            <p class="contact-no">
                <a href="tel:237673901939">
                    (+237) 673 90 1939
                </a>
                <br>
                <a href="tel:237673901939">
                    (+237) 673 90 1939
                </a>
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-spacing">
          <div class="contact-block block-three">
            <div class="contact-icon"><i class="fa fa-envelope"></i></div>
            <h4 class="contact-heading">Email Address</h4>
            <p class="mail-to">
              <a href="javascript:void(0)" target="_top">tncedric@yahoo.com</a><br>
              <a href="javascript:void(0)" target="_top">tncedric@yahoo.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end contact two  -->
<!--  contact form  -->
  <section id="contact-form" class="form-main-block">
    <div class="section">
      <h4 class="section-heading">Leave Us A Message</h4>
    </div>
    <div class="container">
      <div class="row">
       <div class="contact-form-block">
          <form class="contact-form" method="post" action="{{ route('contact.store') }}">
              @csrf
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name And Surname *" required>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" name="tel" placeholder="Contact Phone Number *" required>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" name="email"
                    placeholder="Email Address (Optional)" >
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <textarea id="message" class="form-control" name="message" placeholder="Message *" required></textarea>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <button type="submit" class="btn btn-rounded btn-info">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
<!-- owl carousel js -->
<script type="text/javascript" src="/js/owl.carousel.js"></script>
@endsection
