<div class="nav-bar navbar-fixed-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="logo">
          <a href="/">
              <img src="/img/logo_trans_1.png" alt="logo"
                width="100px" height="50px">
          </a>
        </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="navigation-menu">
          <div id="cssmenu">
            <ul>
              <li>
                  <a href="/">Home</a>
              </li>
              <li>
                  <a href="{{ route('services') }}">Services</a>
              </li>
              <li>
                  <a href="{{ route('ministries') }}">
                      Ministries
                  </a>
              </li>
              <li>
                  <a href="{{ route('events') }}">
                      Events
                  </a>
              </li>

              <li>
                  <a href="{{ route('gallery') }}">
                      Gallery
                  </a>
              </li>
              <li>
                  <a href="#">About Us</a>

                   <ul>
                      <li>
                          <a href="{{ route('about.pastor') }}">
                              The Pastor
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('about.church') }}">
                              About Church
                          </a>
                      </li>
                    </ul>
              </li>
              <li>
                  <a href="{{ route('contact') }}">
                      Contact Us
                  </a>
              </li>

              <!-- <li class="donate-btn"><a href="donation.html" class="btn btn-default">Donate</a></li>
              <li class="search-icon"><a href="#"><i class="fa fa-search"></i></a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
