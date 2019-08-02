@extends('layouts.site')

@section('title')
    {{ __("Home") }}
@endsection

@section('styles')
    
    <!-- datepicker css -->
    <link href="/css/datepicker.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
<header id="home-slider" class="slider-main-block">
  <div class="item home-slider-img" style="background-image: url('images/slider-01.jpg')">
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="slider-dtl">
        <h1 class="slider-heading">Aenean varius mi purus vehicula<br>upcoming events</h1>
        <h5 class="slider-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at euismod ex. Maecenas sit amet sollicitudin ex.</h5>
        <div class="slider-countdown">
          <div class="coming-countdown" data-countdown="2017/4/30"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="item home-slider-img" style="background-image: url('images/slider-02.jpg')">
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="slider-dtl">
        <h1 class="slider-heading">Lorem ipsum dolor sit amet<br>upcoming events</h1>
        <h5 class="slider-subheading">Cursus lorem, ac iaculis metus sem vitae purus. Vivamus suscipit velit nec maximus interdum. Maecenas sit. </h5>
        <div class="slider-countdown">
          <div class="coming-countdown" data-countdown="2017/4/30"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="item home-slider-img" style="background-image: url('images/slider-03.jpg')">
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="slider-dtl">
        <h1 class="slider-heading">Maecenas sit sollicitudin <br>upcoming events</h1>
        <h5 class="slider-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at euismod ex. Maecenas sit amet sollicitudin ex.</h5>
        <div class="slider-countdown">
          <div class="coming-countdown" data-countdown="2017/4/30"></div>
        </div>
      </div>
    </div>
  </div>
</header>


<!--  about  -->
  <section id="about" class="about-main-block">
    <div class="container-fluid">
      <div class="row row-spacing">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="about-img">
            <img src="images/abt/about-img.jpg" class="img-responsive" alt="about-img">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="about-content">
            <h3 class="about-heading">Nullam ullamcorper ultricies nulla mattis blandit Praesent dignissim quam</h3>
            <h5 class="about-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ateuismod ex. Maecenas sit amet s</h5>
            <p class="about-dtl">Aliquam laoreet orci quis risus vulputate tempor. Quisque aliquet, ipsum at mattis mattis, tortor nibh cursus lorem, ac iaculis metus sem vitae purus. Vivamus suscipit velit nec maximus interdum.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end about -->
<!--  parallax  -->
  <section id="abt-tab" class="tab-main-block">
    <div class="parallax" style="background-image: url('images/bg-img.jpg')">
      <div class="overlay-bg"></div>
      <div class="abt-tab-block">
        <div class="container">
          <div class="abt-tab-content text-center">
            <h3 class="abt-tab-heading">Nullam ullamcorper ultricies nulla mattis blandit Praesent dignissim quam bibendum.</h3>
            <h5 class="abt-tab-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at seuismod ex. Maecenas sit amet sollicitudin ex.</h5>
          </div>
          <div class="abt-tab-icons">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                <div class="abt-tab-item">
                  <a href="#">
                    <div class="abt-tab-icon">
                      <i class="flaticon-prayers"></i>
                    </div>
                    <h6 class="abt-icon-name">Daily Prayers</h6>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                <div class="abt-tab-item">
                  <a href="#">
                    <div class="abt-tab-icon">
                      <i class="flaticon-teaching"></i>
                    </div>
                    <h6 class="abt-icon-name">Teaching</h6>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                <div class="abt-tab-item">
                  <a href="#">
                    <div class="abt-tab-icon">
                      <i class="flaticon-sermons"></i>
                    </div>
                    <h6 class="abt-icon-name">Sermons</h6>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                <div class="abt-tab-item">
                  <a href="#">
                    <div class="abt-tab-icon">
                      <i class="flaticon-help"></i>
                    </div>
                    <h6 class="abt-icon-name">Helpers</h6>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                <div class="abt-tab-item">
                  <a href="#">
                    <div class="abt-tab-icon">
                      <i class="flaticon-wedding"></i>
                    </div>
                    <h6 class="abt-icon-name">Wedding</h6>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                <div class="abt-tab-item">
                  <a href="#">
                    <div class="abt-tab-icon">
                      <i class="flaticon-events"></i>
                    </div>
                    <h6 class="abt-icon-name">Events</h6>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end parallax -->
<!--  who are we -->
  <section id="who" class="who-main-block hidden-xs">
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">Who Are We</h3>
        <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at  euismod ex, Maeceans sit amet sollicitudin ex.</h5>
      </div>
      <div id="who-slider" class="who-slider">
        <div class="item who-block">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="who-dtlOne">
                <a href="about.html"><h4 class="who-heading">Lorem ipsum dolor sit amet.</h4></a>
                <p>Aliquam laoreet orci quis risus vulputate tempor. Quisque aliquet, ipsum at mattis mattis, tortor nibh cursus lorem, ac iaculis metus sem vitae purus. Vivamus suscipit velit nec maximus interdum.</p>
                <a class="read-more" href="about.html">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="who-imgOne">
                <img src="images/abt/who-img-01.jpg" class="img-responsive" alt="who-img-1">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="who-imgTwo img-spacing">
                <img src="images/abt/who-img-02.jpg" class="img-responsive" alt="who-img-2">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="who-dtlTwo">
                <a href="about.html"><h4 class="who-heading">Lorem ipsum dolor sit amet.</h4></a>
                <p>Aliquam laoreet orci quis risus vulputate tempor. Quisque aliquet, ipsum at mattis mattis, tortor nibh cursus lorem, ac iaculis metus sem vitae purus. Vivamus suscipit velit nec maximus interdum.</p>
                <a class="read-more" href="about.html">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="item who-block">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="who-dtlOne">
                <a href="about.html"><h4 class="who-heading">Lorem ipsum dolor sit amet.</h4></a>
                <p>Aliquam laoreet orci quis risus vulputate tempor. Quisque aliquet, ipsum at mattis mattis, tortor nibh cursus lorem, ac iaculis metus sem vitae purus. Vivamus suscipit velit nec maximus interdum.</p>
                <a class="read-more" href="about.html">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="who-imgOne">
                <img src="images/abt/who-img-03.jpg" class="img-responsive" alt="who-img-3">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="who-imgTwo img-spacing">
                <img src="images/abt/who-img-04.jpg" class="img-responsive" alt="who-img-4">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="who-dtlTwo">
                <a href="about.html"><h4 class="who-heading">Lorem ipsum dolor sit amet.</h4></a>
                <p>Aliquam laoreet orci quis risus vulputate tempor. Quisque aliquet, ipsum at mattis mattis, tortor nibh cursus lorem, ac iaculis metus sem vitae purus. Vivamus suscipit velit nec maximus interdum.</p>
                <a class="read-more" href="about.html">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="item who-block">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="who-dtlOne">
                <a href="about.html"><h4 class="who-heading">Lorem ipsum dolor sit amet.</h4></a>
                <p>Aliquam laoreet orci quis risus vulputate tempor. Quisque aliquet, ipsum at mattis mattis, tortor nibh cursus lorem, ac iaculis metus sem vitae purus. Vivamus suscipit velit nec maximus interdum.</p>
                <a class="read-more" href="about.html">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="who-imgOne">
                <img src="images/abt/who-img-02.jpg" class="img-responsive" alt="who-img-5">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="who-content">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="who-imgTwo  img-spacing">
                  <img src="images/abt/who-img-05.jpg" class="img-responsive" alt="who-img-6">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="who-dtlTwo">
                  <a href="about.html"><h4 class="who-heading">Lorem ipsum dolor sit amet.</h4></a>
                  <p>Aliquam laoreet orci quis risus vulputate tempor. Quisque aliquet, ipsum at mattis mattis, tortor nibh cursus lorem, ac iaculis metus sem vitae purus. Vivamus suscipit velit nec maximus interdum.</p>
                  <a class="read-more" href="about.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
         <div class="item who-block">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="who-dtlOne">
                <a href="about.html"><h4 class="who-heading">Lorem ipsum dolor sit amet.</h4></a>
                <p>Aliquam laoreet orci quis risus vulputate tempor. Quisque aliquet, ipsum at mattis mattis, tortor nibh cursus lorem, ac iaculis metus sem vitae purus. Vivamus suscipit velit nec maximus interdum.</p>
                <a class="read-more" href="about.html">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="who-imgOne">
                <img src="images/abt/who-img-04.jpg" class="img-responsive" alt="who-img-7">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="who-imgTwo img-spacing">
                <img src="images/abt/who-img-03.jpg" class="img-responsive" alt="who-img-8">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="who-dtlTwo">
                <a href="about.html"><h4 class="who-heading">Lorem ipsum dolor sit amet.</h4></a>
                <p>Aliquam laoreet orci quis risus vulputate tempor. Quisque aliquet, ipsum at mattis mattis, tortor nibh cursus lorem, ac iaculis metus sem vitae purus. Vivamus suscipit velit nec maximus interdum.</p>
                <a class="read-more" href="about.html">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="who-count" class="who-count"></div>
    </div>
  </section>
<!--  end who are we -->
<!--  latest sermons -->
  <section id="sermons" class="sermons-horizontal-main-block sermons-hOne">
    <div class="container-fluid">
      <div class="section text-center">
        <h3 class="section-heading">Latest Sermons</h3>
        <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at euismod ex, Maeceans sit amet sollicitudin ex.</h5>
      </div>
      <div class="row row-spacing">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="sermons-block">
            <div class="sermons-img">
              <img src="images/sermons/sermons-01.jpg" class="img-responsive" alt="sermons-img-1">
            </div>
            <div class="item sermons-horizontal-block">
              <div class="sermons-content">
                <a href="sermons-details.html"><h4 class="sermons-heading">Praesent elementum ante.</h4></a>
                <div class="sermons-desc">
                  <p class="sermons-speaker">Speaker : <a href="sermons-details.html">Johan Tom</a></p>
                  <p class="sermons-date">Date : 02 - 01 - 2017</p>
                </div>
                <p class="sermons-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
                <a class="read-more" href="sermons-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
              <div class="sermons-icon">
                <ul>
                  <li>
                      <a class="popup-video" href="https://video-vh.s3.envato.com/h264-video-previews/e0657980-289f-4c5a-9ba0-2c730b9c990a/19398708.mp4"><i class="flaticon-video-player"></i></a>
                  </li>
                  <li>
                      <a class="popup-video" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/72365194&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"><i class="flaticon-headphones"></i></a>
                  </li>
                  <li><a href="uploads/demo.zip" target="_blank" class="cloud"><i class="flaticon-cloud-computing"></i></a></li>
                  <li><a href="uploads/demo.pdf" class="pdf"><i class="flaticon-pdf"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="sermons-block">
            <div class="sermons-img">
              <img src="images/sermons/sermons-02.jpg" class="img-responsive" alt="sermons-img-2">
            </div>
            <div class="item sermons-horizontal-block">
              <div class="sermons-content">
                <a href="sermons-details.html"><h4 class="sermons-heading">Praesent elementum ante.</h4></a>
                <div class="sermons-desc">
                  <p class="sermons-speaker">Speaker : <a href="sermons-details.html">Johan Tom</a></p>
                  <p class="sermons-date">Date : 02 - 01 - 2017</p>
                </div>
                <p class="sermons-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
                <a class="read-more" href="sermons-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
              <div class="sermons-icon">
                <ul>
                  <li>
                      <a class="popup-video" href="https://vimeo.com/1084537"><i class="flaticon-video-player"></i></a>
                  </li>
                  <li>
                      <a class="popup-video" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/597953&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"><i class="flaticon-headphones"></i></a>
                  </li>
                  <li><a href="uploads/demo.zip" target="_blank" class="cloud"><i class="flaticon-cloud-computing"></i></a></li>
                  <li><a href="uploads/demo.pdf" class="pdf"><i class="flaticon-pdf"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end latest sermons -->
<!--  latest news -->
  <section id="news" class="news-main-block">
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">Latest News</h3>
        <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at euismod ex, Maeceans sit amet sollicitudin ex.</h5>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class="news-blockOne">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="news-imgOne block-effect">
                  <a href="blog-details.html"><img src="images/blog/news-01.jpg" class="img-responsive" alt="news-img-1"></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="news-contentOne">
                  <div class="news-desc">
                    <p class="news-date"><i class="fa fa-calendar"></i>Posted 25 Dec 2016</p>
                    <p class="news-by"><i class="fa fa-user"></i>Post By : <a href="#">Admin</a></p>
                  </div>
                  <a href="blog-details.html"><h4 class="news-heading">Lorem ipsum dolor sit amet.</h4></a>
                  <p class="news-dtl">Aliquam laoreet orci quis risus vulputate tempor. Quisque aliquet, ipsum at mattis mattis, tortor nibh cursus lorem, ac iaculis metus sem vitae purus. Vivamus suscipit velit nec maximus interdum.</p>
                  <a class="read-more" href="blog-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class="news-blockTwo">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="news-contentTwo">
                  <div class="news-desc">
                    <p class="news-date"><i class="fa fa-calendar"></i>Posted 25 Dec 2016</p>
                    <p class="news-by"><i class="fa fa-user"></i>Post By : <a href="#">Admin</a></p>
                  </div>
                  <a href="blog-details.html"><h4 class="news-heading">Lorem ipsum dolor sit amet.</h4></a>
                  <p class="news-dtl">Aliquam laoreet orci quis risus vulputate tempor. Quisque aliquet, ipsum at mattis mattis, tortor nibh cursus lorem, ac iaculis metus sem vitae purus. Vivamus suscipit velit nec maximus interdum.</p>
                  <a class="read-more" href="blog-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="news-imgTwo block-effect">
                    <a href="blog-details.html"><img src="images/blog/news-02.jpg" class="img-responsive" alt="news-img-2"></a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end latest news -->
<!--  testimonial -->
  <section id="pastor" class="pastor-main-block block-spacing">
    <div class="parallax" style="background-image: url('images/pastor/pastor-bg.jpg')">
      <div class="overlay-bg"></div>
      <div id="pastor-slider" class="pastor-slider">
        <div class="item pastor-block">
          <div class="container">
            <div class="pastor-content">
              <span class="quotes-icon"><i class="fa fa-2x fa-quote-left"></i></span>
              <h2 class="pastor-dtl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras iaculis interdum lobortis. Etiam enim tortor</h2>
              <div class="pastor-id"><p>sendero seko</p></div>
            </div>
          </div>
        </div>
        <div class="item pastor-block">
          <div class="container">
            <div class="pastor-content">
              <span class="quotes-icon"><i class="fa fa-2x fa-quote-left"></i></span>
              <h2 class="pastor-dtl">Aliquam laoreet orci quis risus vulputate tempor. Quisque aliquet, ipsum at mattis mattis, tortor nibh. </h2>
              <div class="pastor-id"><p>anderson rocho</p></div>
            </div>
          </div>
        </div>
        <div class="item pastor-block">
          <div class="container">
            <div class="pastor-content">
              <span class="quotes-icon"><i class="fa fa-2x fa-quote-left"></i></span>
              <h2 class="pastor-dtl">Cursus lorem, ac iaculis metus sem vitae purus. Vivamus suscipit velit nec maximus interdum.</h2>
              <div class="pastor-id"><p>franklin dave</p></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end pastor -->
<!--  upcoming events -->
  <section id="events" class="events-main-block">
    <div class="section text-center">
      <h3 class="section-heading">Upcoming Events</h3>
      <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at  euismod ex, Maeceans sit amet sollicitudin ex.</h5>
    </div>
    <div id="event-slider" class="event-slider">
      <div class="item event-block">
        <div class="event-item">
          <div class="event-img">
            <div class="overlay-bg"></div>
            <a href="event-details.html"><img src="images/event/events-03.jpg" class="img-responsive" alt="event-img-1"></a>
          </div>
          <div class="event-countdown">
            <div class="coming-countdown" data-countdown="2017/4/30"></div>
          </div>
          <div class="event-content">
            <a href="event-details.html"><h4 class="event-heading">Praesent elementum ante.</h4></a>
            <p class="event-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
            <a class="read-more" href="event-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="item event-block">
        <div class="event-item">
          <div class="event-img">
            <div class="overlay-bg"></div>
            <a href="event-details.html"><img src="images/event/events-02.jpg" class="img-responsive" alt="event-img-2"></a>
          </div>
          <div class="event-countdown">
            <div class="coming-countdown" data-countdown="2017/4/30"></div>
          </div>
          <div class="event-content">
            <a href="event-details.html"><h4 class="event-heading">Praesent elementum ante.</h4></a>
            <p class="event-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
            <a class="read-more" href="event-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="item event-block">
        <div class="event-item">
          <div class="event-img">
            <div class="overlay-bg"></div>
            <a href="event-details.html"><img src="images/event/events-01.jpg" class="img-responsive" alt="event-img-3"></a>
          </div>
          <div class="event-countdown">
            <div class="coming-countdown" data-countdown="2017/4/30"></div>
          </div>
          <div class="event-content">
            <a href="event-details.html"><h4 class="event-heading">Praesent elementum ante.</h4></a>
            <p class="event-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
            <a class="read-more" href="event-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="item event-block">
        <div class="event-item">
          <div class="event-img">
            <div class="overlay-bg"></div>
            <a href="event-details.html"><img src="images/event/events-04.jpg" class="img-responsive" alt="event-img-4"></a>
          </div>
          <div class="event-countdown">
            <div class="coming-countdown" data-countdown="2017/4/30"></div>
          </div>
          <div class="event-content">
            <a href="event-details.html"><h4 class="event-heading">Praesent elementum ante.</h4></a>
            <p class="event-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
            <a class="read-more" href="event-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="item event-block">
        <div class="event-item">
          <div class="event-img">
            <div class="overlay-bg"></div>
            <a href="event-details.html"><img src="images/event/events-05.jpg" class="img-responsive" alt="event-img-5"></a>
          </div>
          <div class="event-countdown">
            <div class="coming-countdown" data-countdown="2017/4/30"></div>
          </div>
          <div class="event-content">
            <a href="event-details.html"><h4 class="event-heading">Praesent elementum ante.</h4></a>
            <p class="event-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
            <a class="read-more" href="event-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="item event-block">
        <div class="event-item">
          <div class="event-img">
            <div class="overlay-bg"></div>
            <a href="event-details.html"><img src="images/event/events-06.jpg" class="img-responsive" alt="event-img-6"></a>
          </div>
          <div class="event-countdown">
            <div class="coming-countdown" data-countdown="2017/4/30"></div>
          </div>
          <div class="event-content">
            <a href="event-details.html"><h4 class="event-heading">Praesent elementum ante.</h4></a>
            <p class="event-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
            <a class="read-more" href="event-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end upcoming events -->
<!--  donation -->
  <section id="donation" class="donation-main-block">
    <div class="parallax" style="background-image: url('images/bg-img.jpg')">
      <div class="overlay-bg"></div>
      <div class="section text-center">
        <h3 class="section-heading">Urgent Donation Required</h3>
        <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at euismod ex, Maeceans sit amet sollicitudin ex.</h5>
      </div>
      <div class="donation-block">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="donation-item">
                <div class="donation-img block-effect">
                  <a href="donation-details.html"><img src="images/donation/donation-02.jpg" class="img-responsive" alt="donation-img-1"></a>
                  <span class="donation-btn"><a href="donation-details.html" class="btn btn-default">Donate</a></span>
                </div>
                <div class="donation-content">
                  <p class="social-media-heading">Share Post :</p>
                   <div class="social-icon">
                    <ul>
                      <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="https://www.twitter.com/" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="https://plus.google.com/" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="https://dribbble.com/" target="_blank" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                      <li><a href="https://www.behance.net/" target="_blank" class="behance"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                  <a href="donation-details.html"><h4 class="donation-heading">Lorem ipsum dolor sit amet.</h4></a>
                  <p class="donation-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
                  <a class="read-more" href="donation-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="donation-item">
                <div class="donation-img block-effect">
                  <a href="donation-details.html"><img src="images/donation/donation-01.jpg" class="img-responsive" alt="donation-img-2"></a>
                  <span class="donation-btn"><a href="donation-details.html" class="btn btn-default">Donate</a></span>
                </div>
                <div class="donation-content">
                  <p class="social-media-heading">Share Post :</p>
                  <div class="social-icon">
                    <ul>
                      <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="https://www.twitter.com/" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="https://plus.google.com/" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="https://dribbble.com/" target="_blank" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                      <li><a href="https://www.behance.net/" target="_blank" class="behance"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                  <a href="donation-details.html"><h4 class="donation-heading">Lorem ipsum dolor sit amet.</h4></a>
                  <p class="donation-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
                  <a class="read-more" href="donation-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 donation-top-mgn">
              <div class="donation-item">
                <div class="donation-img block-effect">
                  <a href="donation-details.html"><img src="images/donation/donation-03.jpg" class="img-responsive" alt="donation-img-3"></a>
                  <span class="donation-btn"><a href="donation-details.html" class="btn btn-default">Donate</a></span>
                </div>
                <div class="donation-content">
                  <p class="social-media-heading">Share Post :</p>
                   <div class="social-icon">
                    <ul>
                      <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="https://www.twitter.com/" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="https://plus.google.com/" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="https://dribbble.com/" target="_blank" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                      <li><a href="https://www.behance.net/" target="_blank" class="behance"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                  <a href="donation-details.html"><h4 class="donation-heading">Lorem ipsum dolor sit amet.</h4></a>
                  <p class="donation-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
                  <a class="read-more" href="donation-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end donation -->
<!--  causes -->
  <section id="causes" class="causes-main-block">
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">Our Causes</h3>
        <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at euismod ex, Maeceans sit amet sollicitudin ex.</h5>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="causes-item">
            <div class="cause-img">
              <img src="images/cause-01.jpg" class="img-responsive" alt="causes-img-1">
            </div>
            <div class="causes-content">
              <h5 class="causes-heading">Causes #01</h5>
              <p class="causes-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="causes-item">
            <div class="cause-img">
              <img src="images/cause-02.jpg" class="img-responsive" alt="causes-img-2">
            </div>
            <div class="causes-content">
              <h5 class="causes-heading">Causes #02</h5>
              <p class="causes-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="causes-item">
            <div class="cause-img">
              <img src="images/cause-03.jpg" class="img-responsive" alt="causes-img-3">
            </div>
            <div class="causes-content">
              <h5 class="causes-heading">Causes #03</h5>
              <p class="causes-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="causes-item">
            <div class="cause-img">
              <img src="images/cause-04.jpg" class="img-responsive" alt="causes-img-4">
            </div>
            <div class="causes-content">
              <h5 class="causes-heading">Causes #04</h5>
              <p class="causes-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end causes -->
<!--  portfolio -->
  <section id="portfolio" class="portfolio-main-block portfolio-one">
    <div class="container-fluid">
      <div class="section text-center">
        <h3 class="section-heading">Our Portfolio</h3>
        <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at  euismod ex, Maeceans sit amet sollicitudin ex.</h5>
      </div>
      <div class="row">
        <div id="portfolio-block" class="portfolio-popup">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item portfolio-btm-mrgn">
            <div class="portfolio-img">
              <img src="images/gallery/gallery-01.jpg" class="img-responsive" alt="portfolio-img-1">
              <div class="portfolio-overlay"><a href="images/gallery/gallery-01.jpg"><i class="fa fa-search"></i></a></div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 portfolio-item portfolio-btm-mrgn">
            <div class="portfolio-img">
              <img src="images/gallery/gallery-02.jpg" class="img-responsive" alt="portfolio-img-2">
              <div class="portfolio-overlay"><a href="images/gallery/gallery-02.jpg"><i class="fa fa-search"></i></a></div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 portfolio-item portfolio-btm-mrgn">
            <div class="portfolio-img">
              <img src="images/gallery/gallery-03.jpg" class="img-responsive" alt="portfolio-img-3">
              <div class="portfolio-overlay"><a href="images/gallery/gallery-03.jpg"><i class="fa fa-search"></i></a></div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 portfolio-item portfolio-btm-mrgn">
            <div class="portfolio-img">
              <img src="images/gallery/gallery-04.jpg" class="img-responsive" alt="portfolio-img-4">
              <div class="portfolio-overlay"><a href="images/gallery/gallery-04.jpg"><i class="fa fa-search"></i></a></div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 portfolio-item">
            <div class="portfolio-img">
              <img src="images/gallery/gallery-05.jpg" class="img-responsive" alt="portfolio-img-5">
              <div class="portfolio-overlay"><a href="images/gallery/gallery-05.jpg"><i class="fa fa-search"></i></a></div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item">
            <div class="portfolio-img">
              <img src="images/gallery/gallery-06.jpg" class="img-responsive" alt="portfolio-img-6">
              <div class="portfolio-overlay"><a href="images/gallery/gallery-06.jpg"><i class="fa fa-search"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end portfolio -->
<!-- subscribe -->
  <section id="subscribe" class="subscribe-main-block">
    <div class="bg-img parallax" style="background-image: url('images/bg-img.jpg')">
      <div class="overlay-bg"></div>
      <div class="container">
        <div class="subscribe-dtl">
          <h5 class="subscribe-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at euismod ex. Maecenas sit amet sollicitudin ex.</h5>
          <div class="email-btn">
            <form id="subscribe-form" class="subscribe-form">
              <div class="input-group">
                <label class="sr-only">Your Email address</label>
                <input class="form-control" id="mc-email" placeholder="Your email address.." type="email">
                <button type="submit" class="btn btn-default subscribe-btn">Subscribe</button>
              </div>
              <label for="mc-email"></label>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end subscribe -->
<!-- supporter -->
  <section id="supporter" class="supporter-main-block">
    <div class="container-fluid">
      <div class="section text-center">
        <h3 class="section-heading">Thanks To Our Supporter</h3>
        <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at  euismod ex, Maeceans sit amet sollicitudin ex.</h5>
      </div>
      <div id="supporter-slider" class="supporter-slider">
        <div class="item supporter-block">
          <div class="supporter-item">
            <img src="images/supporter-01.png" class="img-responsive" alt="support-img-1">
          </div>
        </div>
        <div class="item supporter-block">
          <div class="supporter-item">
            <img src="images/supporter-02.png" class="img-responsive" alt="support-img-2">
          </div>
        </div>
        <div class="item supporter-block">
          <div class="supporter-item">
            <img src="images/supporter-03.png" class="img-responsive" alt="support-img-3">
          </div>
        </div>
        <div class="item supporter-block">
          <div class="supporter-item">
            <img src="images/supporter-04.png" class="img-responsive" alt="support-img-4">
          </div>
        </div>
        <div class="item supporter-block">
          <div class="supporter-item">
            <img src="images/supporter-02.png" class="img-responsive" alt="support-img-5">
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end supporter -->
@endsection

@section('scripts')


<!-- event countdown js -->
<script type="text/javascript" src="/js/jquery.countdown.js"></script>
@endsection
