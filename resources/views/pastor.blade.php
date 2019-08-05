@extends('layouts.site')

@section('title')
Our Pastor
@endsection

@section('content')
<header id="page-banner" class="banner-main-block">
    <div class="banner-img" style="background-image: url('/img/banner_2.jpg')">
      <div class="overlay-bg"></div>
      <div class="container">
        <div class="banner-block">
          <h3 class="section-heading">Pastor A B COLLINS</h3>
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

<section id="pastor-dtl-page" class="pastor-dtl-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="pastor-img">
            <img src="/img/pastor.jpg" class="img-responsive" alt="pastor Picture">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-lg-offset-1 col-lg-11 col-md-offset-1 col-md-11 col-sm-12 col-xs-12">
              <div class="pastor-content">
                <h3 class="pastor-id">A B COLLINS</h3>
                <p class="pastor-post">
                    Senior Pastor
                    <strong class="text-styled">(SPIRIT WORSHIP EMBASSY)</strong>
                </p>
                <hr>
                <div class="social-icon social-two">
                  <ul>
                    <li><a href="https://plus.google.com/" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://www.twitter.com/" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.youtube.com/" target="_blank" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                  </ul>
                </div>
                <p class="pastor-desc old-standard">
                    <strong>A-b Collins</strong> is the founder of spirit worship embassy ministries.
                    It is a prophetic word addicted ministry, also call
                    <strong class="text-styled">Covenant City of Wonders</strong>.
                    He is a man that carries a mandate to command change and
                    bring back dignity in the body of Christ, he is also a good writer
                    of books. A-b Collins is a man that has the pleasure to help
                    the hopeless, he is a man that carries an atmosphere of
                    happiness and joy. A-b Collins believes in reaching out
                    to the lost at all cost, he is a man that loves teaching
                    and preaching the <strong>Gospel of JESUS CHRIST</strong>.
                    <strong>Spirit worship Embassy</strong> is a ministry that
                    was given birth on the 10<sup>th</sup> of
                    June 2015, through God’s own servant
                    <strong>BRO.A-B COLLINS.</strong>
                    After a long fast God spoke to him and said
                    <span class="text-styled">"Go to the world and wipe out tears and restore happiness"</span>.
                    These were HIS exact words to His servant.
                </p>

                <!-- <div class="pastor-body">
                  <div class="row ubuntu">
                    <div class="col-xs-3">
                        <p class="ubuntu">Pastor Address:</p>
                    </div>
                    <div class="col-xs-9">
                        <p>
                            Church Themes
                            <br>
                            Block 145 Antela Road<br>Bredsbin Austrlia
                        </p>
                    </div>
                    <div class="col-xs-3">
                        <p>Phone:</p>
                    </div>
                    <div class="col-xs-9">
                        <p class="contact-no">
                            <a href="tel:012123456789">012 123 456 789</a>
                            <br>
                            <a href="tel:012123456789">012 123 456 789</a>
                        </p>
                    </div>
                    <div class="col-xs-3">
                        <p>Email:</p>
                    </div>
                    <div class="col-xs-9">
                      <p class="mail-to">
                          <a href="mailto:wporganic@example.com?Subject=Hello%20again"
                            target="_top">wporganic@example.com</a>
                            <br>
                            <a href="mailto:wporganic@example.com?Subject=Hello%20again"
                            target="_top">wporganic@example.com</a>
                        </p>
                    </div>
                  </div>
                </div> -->
                <!-- end of pastor contact information -->


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end pastor detail -->
<!--  pastor quote -->
  <section id="pastor-quote" class="pastor-quote-main-block">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h3 class="pastor-id">His Mission</h3>
                </div>
            </div>
        </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="pastor-quote-block">
            <span class="quotes-icon"><i class="fa fa-quote-left"></i></span>
            <p class="lobster f-24 text-styled">
                Revealing salvation across the globe to six hundred millions souls.
                <br>
                <strong>Titus, 2:11</strong> <br>
                <strong>Matthew 28:19:29</strong> <br>
                <strong>Deuteronomy 15:5:7</strong> <br>
                to all the nations
               </p>
             <span class="quotes-icon"><i class="fa fa-quote-right"></i></span>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end pastor quote -->

<!--  contact form  -->
  <section id="contact-form" class="form-main-block form-two pastor-form">
    <div class="parallax" style="background-image: url('/img/banner_2.jpg')">
      <div class="overlay-bg"></div>
      <div class="form-section">
        <h4 class="form-heading">
            If you need to contact Pastor <strong class="lobster">A. B. Collins</strong>
            You can use the information below.
            <br>
            Or leave a message
        </h4>
        <div class="pastor-form-block">
          <div class="pastor-contact">
            <span><i class="fa fa-phone"></i></span>
            <p><a href="tel:012123456789">+325487902145</a></p>
          </div>
          <div class="pastor-mail">
            <span><i class="fa fa-envelope"></i></span>
            <p><a href="mailto:abcollins@yahoo.com" target="_top">abcollins@yahoo.com</a></p>
          </div>
        </div>
      </div>
      <div class="container">
          <br>
        <div class="row">
         <div class="contact-form-block">
            <form class="contact-form" method="post" action="{{ route('about.pastor.store') }}">
                @csrf
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Name And Surname" required>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="tel" placeholder="Contact Phone Number" required>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Email Address (Optional)">
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <textarea id="message" class="form-control" name="message" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button type="submit" name="button" class="btn btn-info">
                    Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
        <br><br>
      </div>
    </div>
  </section>
@endsection
