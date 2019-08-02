@extends('layouts.site')

@section('titlte')
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
            <p class="contact-no"><a href="tel:012123456789">012 123 456 789</a><br><a href="tel:012123456789">012 123 456 789</a></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-spacing">
          <div class="contact-block block-three">
            <div class="contact-icon"><i class="fa fa-envelope"></i></div>
            <h4 class="contact-heading">Email Address</h4>
            <p class="mail-to">
              <a href="mailto:wporganic@example.com?Subject=Hello%20again" target="_top">wporganic@example.com</a><br>
              <a href="mailto:wporganic@example.com?Subject=Hello%20again" target="_top">wporganic@example.com</a>
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
      <h4 class="section-heading">Contact With Us</h4>
      <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at<br> euismod ex. Maecenas sit amet sollicitudin ex.</h5>
    </div>
    <div class="container">
      <div class="row">
       <div class="contact-form-block">
          <form class="contact-form" method="post" action="https://wporganic.com/html/church/version1/contact-us.php">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name And Surname" required>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="number" name="number" placeholder="Contact Phone Number" required>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" required>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <textarea id="message" class="form-control" name="message" placeholder="Message"></textarea>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <button type="submit" class="btn btn-default">Send</button>
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
