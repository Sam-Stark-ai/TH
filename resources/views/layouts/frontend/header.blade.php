    <header class="header-section">
      <div class="elegnews-container" id="elegnews-main">
        <!-- <div class="elegnews-header">
          <div class="elegnews-logo">
            <div class="elegnews-logo-icon">N</div>
            <div class="elegnews-logo-text">NewsWire</div>
          </div>
          <div class="elegnews-live-indicator">
            <div class="elegnews-pulse-dot"></div>
            <span>LIVE</span>
          </div>
        </div> -->

        <div class="elegnews-ticker-wrapper">
          <div class="elegnews-ticker-container">
            <!-- <div class="elegnews-breaking-badge">BREAKING</div> -->
            <div class="elegnews-ticker-content" id="elegnews-ticker">
          
          @foreach($newsbars as $newsbar)
              <span class="elegnews-news-item">
               
                {{$newsbar->title}}
              </span>

              @endforeach
             
            </div>
          </div>

          <div class="elegnews-controls">
            <button
              class="elegnews-control-btn"
              id="elegnews-pause-btn"
              title="Pause/Resume"
            >
              ⏸
            </button>
            <button
              class="elegnews-control-btn"
              id="elegnews-speed-btn"
              title="Speed"
            >
              1x
            </button>
          </div>

          <div class="elegnews-gradient-overlay"></div>
        </div>
      </div>
      <div class="container">
        <div class="header-wrapper">
          <div class="logo">
            <a href="#">
              <img src="{{asset('FrontendAssets/images/tethar-image/tether gif.gif')}}" alt="logo" />
            </a>
          </div>
          <ul class="menu">
            <li>
              <a href="{{route('home')}}">Home</a>
              <!-- <ul class="submenu">
                            <li>
                                <a href="#0">Home Apps</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">Mobile App 1</a>
                                    </li>
                                    <li>
                                        <a href="index-2.html">Mobile App 2</a>
                                    </li>
                                    <li>
                                        <a href="index-3.html">Mobile App 3</a>
                                    </li>
                                    <li>
                                        <a href="index-4.html">Mobile App 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Home Messenger</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="index-5.html">Messenger 1</a>
                                    </li>
                                    <li>
                                        <a href="index-6.html">Messenger 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Home Web</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="index-7.html">Web 1</a>
                                    </li>
                                    <li>
                                        <a href="index-8.html">Web 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Home Dextop</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="index-9.html">Dextop 1</a>
                                    </li>
                                    <li>
                                        <a href="index-10.html">Dextop 2</a>
                                    </li>
                                    <li>
                                        <a href="index-11.html">Dextop 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Home Watchapp</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="index-12.html">Watchapp 1</a>
                                    </li>
                                    <li>
                                        <a href="index-13.html">Watchapp 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Home Hero Video</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="index-14.html">Hero Video 1</a>
                                    </li>
                                    <li>
                                        <a href="index-15.html">Hero Video 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="index-16.html">Home 16</a>
                            </li>
                            <li>
                                <a href="index-17.html">Home 17 <span class="badge badge-primary align-self-center">New</span></a>
                            </li>
                            <li>
                                <a href="index-18.html">Home 18 <span class="badge badge-primary align-self-center">New</span></a>
                            </li>
                            <li>
                                <a href="index-19.html">Home 19 <span class="badge badge-primary align-self-center">New</span></a>
                            </li>
                            <li>
                                <a href="index-20.html">Home 20 <span class="badge badge-primary align-self-center">New</span></a>
                            </li>
                        </ul> -->
            </li>
            <li>
              <a>Gift feature</a>
              <ul class="submenu">
                <li>
                  <a href="#" id="giftSendButtontwo">Tether family</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="{{route('about')}}">About Us</a>
            </li>
            <li>
              <a href="{{route('feature')}}">Feature</a>
              <!--<ul class="submenu">
                            <li>
                                <a href="#">Feature 1</a>
                            </li>
                            <li>
                                <a href="#">Feature 2</a>
                            </li>
                            <li>
                                <a href="#">Feature 3</a>
                            </li>
                        </ul> -->
            </li>
            <li>
              <a href="{{route('pricing')}}">Pricing</a>
            </li>

            <li>
              <a href="{{route('blog')}}">Blog</a>
              <!-- <ul class="submenu">
                            <li>
                                <a href="blog.html">blog style 1</a>
                            </li>
                            <li>
                                <a href="blog-type-two.html">blog style 1</a>
                            </li>
                            <li>
                                <a href="blog-single-1.html">blog Single 1</a>
                            </li>
                            <li>
                                <a href="blog-single-2.html">blog Single 2</a>
                            </li>
                        </ul> -->
            </li>
            <li>
              <a href="{{route('contact')}}">contact</a>
            </li>
            <li class="d-sm-none">
              <a href="#tetherorderpricing"  class="m-0 header-button">shop now</a>
            </li>
          </ul>
          <div class="header-bar d-lg-none">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="header-right">
            <!-- <select class="select-bar">
              <option value="en">En</option>
              <option value="Bn">Bn</option>
              <option value="pk">Pk</option>
              <option value="Fr">Fr</option>
            </select> -->
            <a href="#tetherorderpricing"  class="header-button d-none d-sm-inline-block"
              >shop now</a
            >
          </div>
        </div>
      </div>
    </header>
