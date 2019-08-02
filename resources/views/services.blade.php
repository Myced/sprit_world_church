@extends('layouts.site')

@section('title')
Services
@endsection

@section('content')

<br><br><br><section id="news" class="news-main-block">
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">What We Have to Offer </h3>
        <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at euismod ex, Maeceans sit amet sollicitudin ex.</h5>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
          <div class="abt-tab-item">
            <a  class="popup-video" href="what-we-offer/daily-prayers.php">
              <div class="abt-tab-icon">
                <i class="flaticon-prayers"></i>
              </div>
              <h6 class="abt-icon-name">Daily Prayers</h6>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
          <div class="abt-tab-item">
            <a class="popup-video" href="what-we-offer/teachings.php">
              <div class="abt-tab-icon">
                <i class="flaticon-teaching"></i>
              </div>
              <h6 class="abt-icon-name">Teaching</h6>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
          <div class="abt-tab-item">
            <a class="popup-video" href="what-we-offer/sermons.php">
              <div class="abt-tab-icon">
                <i class="flaticon-sermons"></i>
              </div>
              <h6 class="abt-icon-name">Sermons</h6>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
          <div class="abt-tab-item">
            <a class="popup-video" href="what-we-offer/helpers.php">
              <div class="abt-tab-icon">
                <i class="flaticon-help"></i>
              </div>
              <h6 class="abt-icon-name">Donations</h6>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
          <div class="abt-tab-item">
            <a class="popup-video" href="what-we-offer/weddings.php">
              <div class="abt-tab-icon">
                <i class="flaticon-wedding"></i>
              </div>
              <h6 class="abt-icon-name">Wedding</h6>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
          <div class="abt-tab-item">
            <a href="event.php">
              <div class="abt-tab-icon">
                <i class="flaticon-events"></i>
              </div>
              <h6 class="abt-icon-name">Events</h6>
            </a>
          </div>
        </div>
      </div><hr>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class="news-blockOne">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="news-imgOne block-effect">
                  <a href="blog-details.html"><img src="images/services/prayer-01.jpg" class="img-responsive" alt="news-img-1"></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="news-contentOne">
                  <div class="news-desc">
                    <!-- <p class="news-date"><i class="fa fa-calendar"></i>Posted 25 Dec 2016</p> -->
                    <!-- <p class="news-by"><i class="fa fa-user"></i>Post By : <a href="#">Admin</a></p> -->
                  </div>
                  <a href="blog-details.html"><h4 class="news-heading">Why Daily Prayers is Important</h4></a>
                  <p class="news-dtl">For followers of Jesus Christ prayer is the best way to communicate with God. Prayer is
                    the vehicle for daily dialog with the One who created us. The importance of daily communication through prayer
                    cannot be overestimated. It is so important that it is mentioned over 250 times in Scripture.
                    So why is daily prayer so important? First, daily prayer gives us an opportunity to share all aspects of
                    our lives with God.</p>
                  <a class="read-more" href="what-we-offer/daily-prayers.php">Read More<i class="fa fa-long-arrow-right"></i></a>
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
                    <!-- <p class="news-date"><i class="fa fa-calendar"></i>Posted 25 Dec 2016</p> -->
                    <!-- <p class="news-by"><i class="fa fa-user"></i>Post By : <a href="#">Admin</a></p> -->
                  </div>
                  <a href="blog-details.html"><h4 class="news-heading">Teachings Of a Holy Life.</h4></a>
                  <p class="news-dtl">There’s a dimension of living you can only experience when you make a decision to please the Father in every area
                    of your life. In that dimension, Jesus becomes real to you and manifests Himself to you. As you discover how to be holy,
                     His power becomes alive in you.</p>
                  <a class="read-more" href="blog-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="news-imgTwo block-effect">
                    <a href="blog-details.html"><img src="images/services/prayer-02.jpg" class="img-responsive" alt="news-img-2"></a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end latest news -->
@endsection
