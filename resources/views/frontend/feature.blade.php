@extends('layouts.frontend.master')


@section('css')
@endsection

@section('content')

    <!--============= Header Section Ends Here =============-->
    <section
      class="page-header bg_img feature-banner"
      data-background="{{asset('FrontendAssets/images/page-header.png')}}"
    >
      <div class="dot-1 d-none d-lg-block">
        <img
          src="{{asset('FrontendAssets/images/tethar-image/circle-teck.gif')}}"
          class="circle-teck-img"
          alt="banner"
        />
      </div>
      <div class="dot-2 d-none d-lg-block">
        <img
          src="{{asset('FrontendAssets/images/tethar-image/circle-teck.gif')}}"
          class="circle-teck-img"
          alt="banner"
        />
      </div>

      <div class="dot-3">
        <img
          src="{{asset('FrontendAssets/images/tethar-image/dil dil pakistan.png')}}"
          alt="banner"
        />
      </div>

      <div class="dot-4">
        <img src="{{asset('FrontendAssets/images/tethar-image/asmin munir.png')}}" alt="banner" />
      </div>

      <div class="dot-5">
        <img src="{{asset('FrontendAssets/images/tethar-image/asmin munir.png')}}" alt="banner" />
      </div>
      <div class="bottom-shape d-none d-md-block">
        <img src="{{asset('FrontendAssets/css/img/page-header.png')}}" alt="css" />
      </div>
      <div class="container">
        <div class="page-header-content cl-white">
          <h2 class="title">Features</h2>
          <ul class="breadcrumb">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="#0">Pages</a>
            </li>
            <li>Features</li>
          </ul>
        </div>
      </div>
    </section>
    <!--============= Header Section Ends Here =============-->

    <!--============= Exclusive Section Starts Here =============-->

    <section
      class="exclusive-section padding-bottom-2 padding-top oh"
      id="featurewatch"
    >
      <div class="animated-shape-watch shape1"></div>
      <div class="animated-shape-watch shape2"></div>
      <div class="animated-shape-watch shape3"></div>

      <div
        class="particles-container-watch"
        id="particles-container-watch"
      ></div>

      <div class="container">
        <div class="row">
          <div
            class="col-lg-7 col-xl-6"
            style="position: relative; z-index: 999999"
          >
            <div class="section-header-watch left-style">
              <h5 class="cate">{{$feature->feature_badge}}</h5>
              <h2 class="title">{{$feature->feature_heading}}</h2>
              <p>
              {{$feature->feature_subheading}}
              </p>
            </div>
            <div class="row mb--20 featurewatch-container">
              <div class="col-sm-6">
                <div class="exclusive-item-watch" data-delay="0">
                  <div class="exclusive-thumb">
                    <lord-icon
                      src="https://cdn.lordicon.com/uihwbzln.json"
                      trigger="hover"
                      colors="primary:#2b0b90,secondary:#ba94fd,tertiary:#eee8fc"
                      style="width: 60px; height: 60px"
                    >
                    </lord-icon>
                  </div>
                  <div class="exclusive-content">
                    <h6 class="title">Real-Time Emotional Sync</h6>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="exclusive-item-watch" data-delay="100">
                  <div class="exclusive-thumb">
                    <lord-icon
                      src="https://cdn.lordicon.com/wixhsrdu.json"
                      trigger="hover"
                      colors="primary:#7166ee,secondary:#fad1e6,tertiary:#82a4ff"
                      style="width: 60px; height: 60px"
                    >
                    </lord-icon>
                  </div>
                  <div class="exclusive-content">
                    <h6 class="title">Seamless Device Pairing</h6>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="exclusive-item-watch" data-delay="200">
                  <div class="exclusive-thumb">
                    <lord-icon
                      src="https://cdn.lordicon.com/rqfqhnxq.json"
                      trigger="hover"
                      state="hover-two-hearts"
                      colors="primary:#f49cc8,secondary:#f28ba8,tertiary:#e83a30,quaternary:#f9c9c0,quinary:#f24c00,senary:#fad1e6"
                      style="width: 60px; height: 60px"
                    >
                    </lord-icon>
                  </div>
                  <div class="exclusive-content">
                    <h6 class="title">Elegant & Minimal Design</h6>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="exclusive-item-watch" data-delay="300">
                  <div class="exclusive-thumb">
                    <lord-icon
                      src="https://cdn.lordicon.com/exucpnpr.json"
                      trigger="hover"
                      state="hover-shield"
                      colors="primary:#7166ee,secondary:#3a3347,tertiary:#ffc738"
                      style="width: 60px; height: 60px"
                    >
                    </lord-icon>
                  </div>
                  <div class="exclusive-content">
                    <h6 class="title">End-to-End Data Encryption</h6>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="exclusive-item-watch" data-delay="400">
                  <div class="exclusive-thumb">
                    <lord-icon
                      src="https://cdn.lordicon.com/opeotjej.json"
                      trigger="hover"
                      state="hover-cycle"
                      colors="primary:#f49cc8,secondary:#3a3347,tertiary:#fad1e6,quaternary:#3a3347"
                      style="width: 60px; height: 60px"
                    >
                    </lord-icon>
                  </div>
                  <div class="exclusive-content">
                    <h6 class="title">Instant Vibe & Pulse Alerts</h6>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="exclusive-item-watch" data-delay="500">
                  <div class="exclusive-thumb">
                    <lord-icon
                      src="https://cdn.lordicon.com/epjwszin.json"
                      trigger="hover"
                      state="hover-reveal"
                      colors="primary:#2b0b90,secondary:#eee8fc,tertiary:#eee8fc,quaternary:#ba94fd"
                      style="width: 60px; height: 60px"
                    >
                    </lord-icon>
                  </div>
                  <div class="exclusive-content">
                    <h6 class="title">24/7 Technical Assistance</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-xl-6 d-lg-flex d-none flex-watch">
            <div class="featurewatch-1-thumb-watch mt-0 ex-featurewatch">
              <div class="glow"></div>
              <img
                src="{{asset($feature->feature_image)}}"
                alt="Tether Heart featurewatch Image"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============= Exclusive Section Ends Here =============-->

    <!--============= Amazing Feature Section Starts Here =============-->
    <section class="amazing-feature-section pos-rel" id="feature">
      <div class="shape-container oh">
        <div
          class="bg_img feature-background"
          data-background="assets/images/bg/amazing-feature-bg.jpg')}}"
        ></div>
        <div class="feature-top-shape d-none d-lg-block">
          <img src="{{asset('FrontendAssets/css/img/feature-shape.png')}}" alt="css" />
        </div>
      </div>
      <div
        class="topper-feature oh padding-top padding-bottom"
        id="responsivespace"
      >
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div
                class="section-header left-style mb-lg-0 white-lg-black pos-rel"
                id="respose-color"
              >
                <h5 class="cate">{{$tetherheart->tetherheart_title_badge}}</h5>
                <h2 class="title">
                  {{$tetherheart->tetherheart_heading}}
                </h2>
                <p>
                  {!! $tetherheart->tetherheart_description !!}
                </p>
                <div class="downarrow d-none d-lg-block">
                  <img
                    src="{{asset('FrontendAssets/images/feature/downarrow.png')}}"
                    alt="feature"
                  />
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-6">
              <a
                href="https://www.youtube.com/watch?v=Djz8Nc0Qxwk"
                class="feature-video-area popup"
              >
                <div class="thumb">
                  <img
                    src="{{asset('FrontendAssets/images/feature/fature-video.png')}}"
                    alt="feature"
                  />
                </div>
                <div class="button-area">
                  <h4 class="title">Watch Videos</h4>
                  <div class="video-button">
                    <i class="flaticon-play"></i>
                  </div>
                </div>
              </a>
            </div> -->
          </div>
        </div>
      </div>

      <div
        class="amazing-feature-bottom padding-top padding-bottom pb-lg-0 pt-lg-0"
        id="responsivespace-top"
      >
        <div class="container">
          <div class="row">
            <!-- <div class="col-lg-8 col-xl-7">
              <div class="section-header left-style cl-white">
                <h5 class="cate">A Collection of Prominent Features</h5>
                <h2 class="title">Delivering Exceptional User Experiences.</h2>
                <p>
                  Numerous features make it possible to customize the system in
                  accordance with all your needs.
                </p>
              </div>
            </div> -->
            <div class="col-12">
              <div class="row justify-content-center mb-30-none">
                <div class="col-sm-6 col-lg-3">
                  <div class="am-item">
                    <div class="am-thumb">
                      <!-- <img
                        src="{{asset('FrontendAssets/images/feature/am-fea1.png')}}"
                        alt="feature"
                      /> -->
                      <lord-icon
                        src="https://cdn.lordicon.com/urswgamh.json"
                        trigger="loop"
                        state="loop-cycle"
                        colors="primary:#3b319e,secondary:#0f0033"
                        style="width: 96px; height: 96px"
                      >
                      </lord-icon>
                    </div>
                    <div class="am-content">
                      <h5 class="title">Easy To Use</h5>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="am-item">
                    <div class="am-thumb">
                      <!-- <img
                        src="{{asset('FrontendAssets/images/feature/am-fea2.png')}}"
                        alt="feature"
                      /> -->
                      <lord-icon
                        src="https://cdn.lordicon.com/fgxwhgfp.json"
                        trigger="loop"
                        delay="2000"
                        colors="primary:#3b319e,secondary:#110a5c"
                        style="width: 96px; height: 96px"
                      >
                      </lord-icon>
                    </div>
                    <div class="am-content">
                      <h5 class="title">Secure Data</h5>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-sm-6 col-lg-3">
                                <div class="am-item active">
                                    <div class="am-thumb">
                                        <img src="{{asset('FrontendAssets/images/feature/am-fea2.png')}}" alt="feature">
                                    </div>
                                    <div class="am-content">
                                        <h5 class="title">Quick Access</h5>
                                    </div>
                                </div>
                            </div> -->
                <div class="col-sm-6 col-lg-3">
                  <div class="am-item">
                    <div class="am-thumb">
                      <!-- <img
                        src="{{asset('FrontendAssets/images/feature/am-fea3.png')}}"
                        alt="feature"
                      /> -->
                      <lord-icon
                        src="https://cdn.lordicon.com/bktacmnd.json"
                        trigger="loop"
                        delay="1000"
                        colors="primary:#3b319e,secondary:#0f0033"
                        style="width: 96px; height: 96px"
                      >
                      </lord-icon>
                    </div>
                    <div class="am-content">
                      <h5 class="title">Quick Access</h5>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="am-item">
                    <div class="am-thumb">
                      <!-- <img
                        src="{{asset('FrontendAssets/images/feature/am-fea4.png')}}"
                        alt="feature"
                      /> -->
                      <lord-icon
                        src="https://cdn.lordicon.com/jdgfsfzr.json"
                        trigger="loop"
                        delay="1000"
                        state="hover-conversation-alt"
                        colors="primary:#3b319e,secondary:#0f0033"
                        style="width: 96px; height: 96px"
                      >
                      </lord-icon>
                    </div>
                    <div class="am-content">
                      <h5 class="title">24h Support</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============= Amazing Feature Section Ends Here =============-->

    <!--============= Feature Section Starts Here =============-->
    <!-- <section class="feature-section padding-top padding-bottom oh">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-xl-8">
            <div class="section-header mw-100">
              <h5 class="cate">An Exhaustive list of Amazing Features</h5>
              <h2 class="title">
                The only application you’ll need to power your life.
              </h2>
              <p class="mw-500">
                Numerous features make it possible to customize the system in
                accordance with all your needs.
              </p>
            </div>
          </div>
        </div>
        <ul class="nav nav-tabs feature-tab-menu">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="item-one-tab"
              data-bs-toggle="tab"
              data-bs-target="#item-one"
              type="button"
              role="tab"
              aria-controls="item-one"
              aria-selected="true"
            >
              Collaboration
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="item-two-tab"
              data-bs-toggle="tab"
              data-bs-target="#item-two"
              type="button"
              role="tab"
              aria-controls="item-two"
              aria-selected="false"
            >
              Productivity
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="item-three-tab"
              data-bs-toggle="tab"
              data-bs-target="#item-three"
              type="button"
              role="tab"
              aria-controls="item-three"
              aria-selected="false"
            >
              Integrations
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div
            class="tab-pane fade show active"
            id="item-one"
            role="tabpanel"
            aria-labelledby="item-one-tab"
          >
            <div class="row">
              <div class="col-lg-6 col-md-10">
                <div class="feature-tab-header">
                  <h3 class="title">Collaboration</h3>
                  <p>
                    Bring your team together. Discuss projects, share ideas, and
                    get work done in real time.
                  </p>
                </div>
              </div>
            </div>
            <div class="cola-area">
              <div class="cola-item">
                <div class="col-md-6 col-lg-5 col-xl-4">
                  <div class="cola-content">
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/feature/colaboration.png')}}"
                        alt="feature"
                      />
                    </div>
                    <span class="cate">Collaboration</span>
                    <h5 class="title">
                      Share all types of files and find them easily
                    </h5>
                    <ul>
                      <li>Drag and Drop files</li>
                      <li>Shared files</li>
                      <li>Share multiple file</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-8">
                  <div class="cola-thumb">
                    <img src="{{asset('FrontendAssets/images/feature/feat1.png')}}" alt="feature" />
                  </div>
                </div>
              </div>
              <div class="cola-item">
                <div class="col-md-6 col-lg-5 col-xl-4">
                  <div class="cola-content">
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/feature/colaboration.png')}}"
                        alt="feature"
                      />
                    </div>
                    <span class="cate">Collaboration</span>
                    <h5 class="title">
                      Jump onto video calls with just a click
                    </h5>
                    <ul>
                      <li>Video Conferencing</li>
                      <li>Connect with remote teams</li>
                      <li>Share your screen</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-8">
                  <div class="cola-thumb">
                    <img src="{{asset('FrontendAssets/images/feature/feat2.png')}}" alt="feature" />
                  </div>
                </div>
              </div>
              <div class="cola-item">
                <div class="col-md-6 col-lg-5 col-xl-4">
                  <div class="cola-content">
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/feature/colaboration.png')}}"
                        alt="feature"
                      />
                    </div>
                    <span class="cate">Collaboration</span>
                    <h5 class="title">
                      Share all types of files and find them easily
                    </h5>
                    <ul>
                      <li>Drag and Drop files</li>
                      <li>Shared files</li>
                      <li>Share multiple file</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-8">
                  <div class="cola-thumb">
                    <img src="{{asset('FrontendAssets/images/feature/feat3.png')}}" alt="feature" />
                  </div>
                </div>
              </div>
              <div class="cola-item">
                <div class="col-md-6 col-lg-5 col-xl-4">
                  <div class="cola-content">
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/feature/colaboration.png')}}"
                        alt="feature"
                      />
                    </div>
                    <span class="cate">Collaboration</span>
                    <h5 class="title">Find whatever you're looking for</h5>
                    <ul>
                      <li>fast and easy Search</li>
                      <li>Search files and links</li>
                      <li>Advanced search</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-8">
                  <div class="cola-thumb">
                    <img src="{{asset('FrontendAssets/images/feature/feat4.png')}}" alt="feature" />
                  </div>
                </div>
              </div>
              <div class="cola-item">
                <div class="col-md-6 col-lg-5 col-xl-4">
                  <div class="cola-content">
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/feature/colaboration.png')}}"
                        alt="feature"
                      />
                    </div>
                    <span class="cate">Collaboration</span>
                    <h5 class="title">
                      Share important news and updates with the entire team
                    </h5>
                    <ul>
                      <li>Announcement channels</li>
                      <li>Broadcast information</li>
                      <li>Sending email updates</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-8">
                  <div class="cola-thumb">
                    <img src="{{asset('FrontendAssets/images/feature/feat5.png')}}" alt="feature" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="item-two"
            role="tabpanel"
            aria-labelledby="item-two-tab"
          >
            <div class="row">
              <div class="col-lg-6 col-md-10">
                <div class="feature-tab-header">
                  <h3 class="title">productivity</h3>
                  <p>
                    Boost your team's productivity and efficiency with our
                    inbuilt tools. Collaborate with team members, share
                    opinions, and manage your tasks more efficiently.
                  </p>
                </div>
              </div>
            </div>
            <div class="cola-area">
              <div class="cola-item">
                <div class="col-md-6 col-lg-5 col-xl-4">
                  <div class="cola-content">
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/feature/productivity.png')}}"
                        alt="feature"
                      />
                    </div>
                    <span class="cate">productivity</span>
                    <h5 class="title">
                      Convert discussions to tasks instantly
                    </h5>
                    <ul>
                      <li>creating to-dos</li>
                      <li>Increase the conversion efficiency</li>
                      <li>Make checklists</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-8">
                  <div class="cola-thumb">
                    <img src="{{asset('FrontendAssets/images/feature/feat6.png')}}" alt="feature" />
                  </div>
                </div>
              </div>
              <div class="cola-item">
                <div class="col-md-6 col-lg-5 col-xl-4">
                  <div class="cola-content">
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/feature/productivity.png')}}"
                        alt="feature"
                      />
                    </div>
                    <span class="cate">productivity</span>
                    <h5 class="title">
                      Create notes and collaborate with your team on the go
                    </h5>
                    <ul>
                      <li>Notes feature</li>
                      <li>Share ideas quickly</li>
                      <li>Enhance team collaboration</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-8">
                  <div class="cola-thumb">
                    <img src="{{asset('FrontendAssets/images/feature/feat7.png')}}" alt="feature" />
                  </div>
                </div>
              </div>
              <div class="cola-item">
                <div class="col-md-6 col-lg-5 col-xl-4">
                  <div class="cola-content">
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/feature/productivity.png')}}"
                        alt="feature"
                      />
                    </div>
                    <span class="cate">productivity</span>
                    <h5 class="title">Missed a deadline? Never again</h5>
                    <ul>
                      <li>Never miss another deadline</li>
                      <li>Set a reminder</li>
                      <li>Reminders set for all</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-8">
                  <div class="cola-thumb">
                    <img src="{{asset('FrontendAssets/images/feature/feat8.png')}}" alt="feature" />
                  </div>
                </div>
              </div>
              <div class="cola-item">
                <div class="col-md-6 col-lg-5 col-xl-4">
                  <div class="cola-content">
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/feature/productivity.png')}}"
                        alt="feature"
                      />
                    </div>
                    <span class="cate">productivity</span>
                    <h5 class="title">
                      Streamline and automate your workflows
                    </h5>
                    <ul>
                      <li>Simplify and automate</li>
                      <li>Receive real-time updates</li>
                      <li>Enhance team collaboration</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-8">
                  <div class="cola-thumb">
                    <img src="{{asset('FrontendAssets/images/feature/feat9.png')}}" alt="feature" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="item-three"
            role="tabpanel"
            aria-labelledby="item-three-tab"
          >
            <div class="row">
              <div class="col-lg-6 col-md-10">
                <div class="feature-tab-header">
                  <h3 class="title">integrations</h3>
                  <p>
                    Integrate your most frequently used third-party apps with
                    Mosto. Choose from over 60+ apps listed on our Appstore or
                    build your own.
                  </p>
                </div>
              </div>
            </div>
            <div class="cola-area">
              <div class="cola-item">
                <div class="col-md-6 col-lg-5 col-xl-4">
                  <div class="cola-content">
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/feature/integrations.png')}}"
                        alt="feature"
                      />
                    </div>
                    <span class="cate">Integrations</span>
                    <h5 class="title">
                      Access your entire Google Drive from within Mosto
                    </h5>
                    <ul>
                      <li>Collaborate with Google Drive's</li>
                      <li>Increase the conversion efficiency</li>
                      <li>Make checklists</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-8">
                  <div class="cola-thumb">
                    <img src="{{asset('FrontendAssets/images/feature/feat10.png')}}" alt="feature" />
                  </div>
                </div>
              </div>
              <div class="cola-item">
                <div class="col-md-6 col-lg-5 col-xl-4">
                  <div class="cola-content">
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/feature/integrations.png')}}"
                        alt="feature"
                      />
                    </div>
                    <span class="cate">Integrations</span>
                    <h5 class="title">
                      Reach every meeting on time with Google Calendar
                    </h5>
                    <ul>
                      <li>Collaborate with Google Drive's</li>
                      <li>Increase the conversion efficiency</li>
                      <li>Make checklists</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-8">
                  <div class="cola-thumb">
                    <img src="{{asset('FrontendAssets/images/feature/feat11.png')}}" alt="feature" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--============= Feature Section Ends Here =============-->

    <!--============= How Section Starts Here =============-->
    <section class="how-section-two oh pos-rel mt-120 mt-max-lg-0" id="how">
      <div
        class="how-main-bg bg_img"
        data-background="assets/images/how/how-bg.jpg')}}"
      ></div>
      <div class="how-top">
        <img src="{{asset('FrontendAssets/css/img/how-top2.png')}}" alt="css" />
      </div>
      <div class="how-bottom">
        <img src="{{asset('FrontendAssets/css/img/how-bottom2.png')}}" alt="css" />
      </div>
      <div class="container">
        <div class="row flex-wrap-reverse">
          <div class="col-lg-5 rtl">
            <a
              href="https://youtu.be/gl2tglNLe9I?si=ivKgKvPrYxRCmX4R"
              class="feature-video-area popup"
            >
              <div class="thumb">
                <img src="{{asset('FrontendAssets/images/feature/circle.png')}}" alt="feature" />
              </div>
              <div class="button-area">
                <h4 class="title">Watch Videos</h4>
                <div class="video-button">
                  <i class="flaticon-play"></i>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-7 padding-top">
            <div class="section-header left-style">
              <h5 class="cate">Describe Your App</h5>
              <h2 class="title">Let’s See How It Works</h2>
              <p>
                Our smart rings are designed with your relationship in
                mind—simple to use, yet powerful in how they keep love alive, no
                matter the distance.
              </p>
            </div>
            <div class="downarrow2">
              <img src="{{asset('FrontendAssets/images/feature/downarrow2.png')}}" alt="feature" />
            </div>
          </div>
        </div>
        <div class="how-wrapper">
          <div class="how--item">
            <div class="anime-item"></div>
            <div class="how-content">
              <div class="serial">
                <img src="{{asset('FrontendAssets/images/how/c10.png')}}" alt="how" />
              </div>
              <div class="thumb">
                <img src="{{asset('FrontendAssets/images/how/i1.png')}}" alt="how" />
              </div>
              <a href="#0" class="button-4">download app</a>
              <p>Download App either for Windows,Mac or Android</p>
            </div>
            <div class="how-thumb">
              <img src="{{asset('FrontendAssets/images/how/h1.png')}}" alt="how" />
            </div>
          </div>
          <div class="how--item">
            <div class="anime-item"></div>
            <div class="how-content">
              <div class="serial">
                <img src="{{asset('FrontendAssets/images/how/c8.png')}}" alt="how" />
              </div>
              <div class="thumb">
                <img src="{{asset('FrontendAssets/images/how/i2.png')}}" alt="how" />
              </div>
              <a href="#0" class="button-4">create an account</a>
              <p>Sign up for Tether Heart. One account for all devices</p>
            </div>
            <div class="how-thumb">
              <img src="{{asset('FrontendAssets/images/how/h2.png')}}" alt="how" />
            </div>
          </div>
          <div class="how--item">
            <div class="anime-item"></div>
            <div class="how-content">
              <div class="serial">
                <img src="{{asset('FrontendAssets/images/how/c9.png')}}" alt="how" />
              </div>
              <div class="thumb">
                <img src="{{asset('FrontendAssets/images/how/i3.png')}}" alt="how" />
              </div>
              <a href="#0" class="button-4">Connect the Rings</a>
              <p>
                Each partner wears a smart ring, paired effortlessly through our
                secure mobile app. Once connected, the rings create a private
                bond between you and your partner.
              </p>
            </div>
            <div class="how-thumb">
              <img src="{{asset('FrontendAssets/images/how/h3.png')}}" alt="how" />
            </div>
          </div>
          <div
            class="plane wow slideInUp d-none d-lg-block"
            data-wow-duration="2s"
          >
            <img src="{{asset('FrontendAssets/images/how/rocket.png')}}" alt="how" />
          </div>
        </div>
        <div class="member-counter-area padding-bottom padding-top">
          <div class="up-bal two wow">
            <img src="{{asset('FrontendAssets/images/how/c6.png')}}" alt="how" />
          </div>
          <div class="up-bal wow slideInUp" data-wow-duration="1s">
            <img src="{{asset('FrontendAssets/images/how/c7.png')}}" alt="how" />
          </div>
          <div class="member-bg">
            <img src="{{asset('FrontendAssets/images/how/how-much-bg.png')}}" alt="how" />
          </div>
          <div class="member-counter cl-white">
            <h2 class="title"><span class="counter">455,326,234</span></h2>
            <p>People Joined Already</p>
            <a href="#0" class="custom-button">Download App</a>
            <ul class="download-options">
              <li>
                <a href="#0"><i class="fab fa-windows"></i></a>
              </li>
              <li>
                <a href="#0" class="active"><i class="fab fa-apple"></i></a>
              </li>
              <li>
                <a href="#0"><i class="fab fa-android"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--============= How Section Ends Here =============-->

    <!--============= Comunity Section Starts Here =============-->
    <section
      class="comunity-section mt-5 padding-top padding-bottom oh pos-rel"
    >
      <div
        class="comunity-bg bg_img"
        data-background="assets/images/client/mosto-client.jpg')}}"
      ></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header cl-white">
              <h5 class="cate">Join to comunity</h5>
              <h2 class="title">Over 1 000 000 users</h2>
              <p>Join and share in a community of like-minded members</p>
            </div>
          </div>
        </div>
        <div class="comunity-wrapper">
          <div class="buttons">
            <a href="#0" class="button-3 active"
              >Join to comunity <i class="flaticon-right"></i
            ></a>
          </div>
          <div class="comunity-area">
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/1.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/2.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/3.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/4.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/5.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/6.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/7.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/8.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/9.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/10.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/11.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/12.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/13.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/14.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/15.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/16.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/17.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/18.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/19.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/22.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/20.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/21.png')}}" alt="comunity" />
            </div>
          </div>
          <div class="comunity-area two">
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/1.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/2.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/3.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/4.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/5.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/6.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/7.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/8.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/9.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/10.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/11.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/12.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/13.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/14.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/15.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/16.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/17.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/18.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/19.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/22.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/20.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/21.png')}}" alt="comunity" />
            </div>
          </div>
          <div class="comunity-area three">
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/1.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/2.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/3.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/4.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/5.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/6.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/7.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/8.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/9.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/10.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/11.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/12.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/13.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/14.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/15.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/16.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/17.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/18.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/19.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/22.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/20.png')}}" alt="comunity" />
            </div>
            <div class="comunity-item">
              <img src="{{asset('FrontendAssets/images/comunity/21.png')}}" alt="comunity" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============= Comunity Section Ends Here =============-->

    <!--============= Sponsor Section Section Here =============-->
    <!-- <section class="sponsor-section padding-bottom">
      <div class="container">
        <div class="section-header mw-100">
          <h5 class="cate">Used by over 1,000,000 people worldwide</h5>
          <h2 class="title">Companies that trust us</h2>
        </div>
        <div class="sponsor-slider-4 owl-theme owl-carousel">
          <div class="sponsor-thumb">
            <img src="{{asset('FrontendAssets/images/sponsor/sponsor1.png')}}" alt="sponsor" />
          </div>
          <div class="sponsor-thumb">
            <img src="{{asset('FrontendAssets/images/sponsor/sponsor2.png')}}" alt="sponsor" />
          </div>
          <div class="sponsor-thumb">
            <img src="{{asset('FrontendAssets/images/sponsor/sponsor3.png')}}" alt="sponsor" />
          </div>
          <div class="sponsor-thumb">
            <img src="{{asset('FrontendAssets/images/sponsor/sponsor4.png')}}" alt="sponsor" />
          </div>
          <div class="sponsor-thumb">
            <img src="{{asset('FrontendAssets/images/sponsor/sponsor5.png')}}" alt="sponsor" />
          </div>
          <div class="sponsor-thumb">
            <img src="{{asset('FrontendAssets/images/sponsor/sponsor6.png')}}" alt="sponsor" />
          </div>
          <div class="sponsor-thumb">
            <img src="{{asset('FrontendAssets/images/sponsor/sponsor7.png')}}" alt="sponsor" />
          </div>
          <div class="sponsor-thumb">
            <img src="{{asset('FrontendAssets/images/sponsor/sponsor1.png')}}" alt="sponsor" />
          </div>
          <div class="sponsor-thumb">
            <img src="{{asset('FrontendAssets/images/sponsor/sponsor2.png')}}" alt="sponsor" />
          </div>
          <div class="sponsor-thumb">
            <img src="{{asset('FrontendAssets/images/sponsor/sponsor3.png')}}" alt="sponsor" />
          </div>
          <div class="sponsor-thumb">
            <img src="{{asset('FrontendAssets/images/sponsor/sponsor4.png')}}" alt="sponsor" />
          </div>
          <div class="sponsor-thumb">
            <img src="{{asset('FrontendAssets/images/sponsor/sponsor5.png')}}" alt="sponsor" />
          </div>
          <div class="sponsor-thumb">
            <img src="{{asset('FrontendAssets/images/sponsor/sponsor6.png')}}" alt="sponsor" />
          </div>
          <div class="sponsor-thumb">
            <img src="{{asset('FrontendAssets/images/sponsor/sponsor7.png')}}" alt="sponsor" />
          </div>
        </div>
      </div>
    </section> -->
    <!--============= Sponsor Section Ends Here =============-->



    @endsection


@section('script')
<script>
      document.addEventListener('DOMContentLoaded', function () {
        document.body.classList.add('loaded');
      });

      document.addEventListener('DOMContentLoaded', function () {
        // Background animation
        const animatedBg = document.getElementById('animatedBg');
        const sectionHeight =
          document.querySelector('.how-section').clientHeight;
        const sectionWidth = document.querySelector('.how-section').clientWidth;

        // Enhanced heart color variations
        const heartColors = [
          { hue: 330, saturation: 85, lightness: 70 }, // Pink
          { hue: 345, saturation: 80, lightness: 65 }, // Darker pink
          { hue: 355, saturation: 75, lightness: 75 }, // Light red
          { hue: 320, saturation: 70, lightness: 75 }, // Purple-pink
          { hue: 0, saturation: 80, lightness: 70 }, // Red
        ];

        // Create floating background hearts
        function createBackgroundHearts() {
          // Create many hearts initially
          for (let i = 0; i < 120; i++) {
            setTimeout(() => {
              create3DFloatingHeart();
            }, i * 150); // Faster creation for initial batch
          }

          // Continue creating hearts
          setInterval(create3DFloatingHeart, 500);
        }

        function create3DFloatingHeart() {
          const heart = document.createElement('div');
          heart.className = 'bg-heart';

          // Random size category (1-3)
          const sizeCategory = Math.floor(Math.random() * 3) + 1;
          heart.classList.add(`size-${sizeCategory}`);

          // Random position
          const posX = Math.floor(Math.random() * sectionWidth);
          const posY = Math.floor(Math.random() * sectionHeight);

          // Duration varies by size (larger hearts move slower)
          const baseDuration = 15;
          const duration = baseDuration + sizeCategory * 2; // 17-21s

          // Random delay
          const delay = Math.floor(Math.random() * 4);

          // Position the heart
          heart.style.left = `${posX}px`;
          heart.style.top = `${posY}px`;

          // Set z-index based on size for proper layering
          heart.style.zIndex = sizeCategory;

          // Opacity based on size (larger hearts are more visible)
          const baseOpacity = 0.5;
          const opacity = baseOpacity + sizeCategory * 0.1; // 0.6-0.8

          // Select a random color palette and apply variation
          const colorSet =
            heartColors[Math.floor(Math.random() * heartColors.length)];
          const hue = colorSet.hue + (Math.random() * 10 - 5);
          const saturation = colorSet.saturation + (Math.random() * 10 - 5);
          const lightness = colorSet.lightness + (Math.random() * 10 - 5);

          // Apply color as CSS variable
          heart.style.setProperty(
            '--heart-color',
            `linear-gradient(to bottom,
        hsla(${hue}, ${saturation}%, ${lightness}%, ${opacity}),
        hsla(${hue - 10}, ${saturation - 5}%, ${lightness - 10}%, ${opacity}))`
          );

          // Apply 3D rotation
          const rotateX = Math.random() * 40 - 20;
          const rotateY = Math.random() * 40 - 20;
          const rotateZ = Math.random() * 360;

          heart.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) rotateZ(${rotateZ}deg) translateZ(${
            sizeCategory * 10
          }px)`;

          // Apply animations
          heart.style.animation = `float3dHeart ${duration}s ease-in-out ${delay}s forwards,
                               float3dSideways ${
                                 duration / 4
                               }s ease-in-out ${delay}s infinite`;

          // Add to background
          animatedBg.appendChild(heart);

          // Remove after animation completes
          setTimeout(() => {
            heart.remove();
          }, (duration + delay) * 1000);
        }

        // Create burst effects randomly
        function createRandomBursts() {
          setInterval(() => {
            createHeartBurst();
          }, 5000); // Less frequent bursts
        }

        function createHeartBurst() {
          const burst = document.createElement('div');
          burst.className = 'bg-burst';

          // Random position within viewport
          const posX = Math.floor(Math.random() * sectionWidth);
          const posY = Math.floor(Math.random() * sectionHeight);
          const size = Math.floor(Math.random() * 80) + 80; // 80-160px

          // Apply styles
          burst.style.width = `${size}px`;
          burst.style.height = `${size}px`;
          burst.style.left = `${posX - size / 2}px`;
          burst.style.top = `${posY - size / 2}px`;

          // Random color variations
          const colorSet =
            heartColors[Math.floor(Math.random() * heartColors.length)];
          burst.style.background = `radial-gradient(circle,
        hsla(${colorSet.hue}, ${colorSet.saturation}%, ${colorSet.lightness}%, 0.5) 0%,
        hsla(${colorSet.hue}, ${colorSet.saturation}%, ${colorSet.lightness}%, 0) 70%)`;

          // Animate
          burst.style.animation = 'bgHeartBurst 1.8s ease-out forwards';

          // Add to background
          animatedBg.appendChild(burst);

          // Remove after animation completes
          setTimeout(() => {
            burst.remove();
          }, 1800);
        }

        // Item animations - keep your existing code
        function animateItemParticles() {
          const items = document.querySelectorAll('.how-item');

          items.forEach((item) => {
            const particles = item.querySelectorAll('.particle');

            // Initial animation
            setTimeout(() => {
              particles.forEach((particle, index) => {
                setTimeout(() => {
                  animateParticle(particle);
                }, index * 200);
              });

              // Set interval for repeated animations
              setInterval(() => {
                particles.forEach((particle, index) => {
                  setTimeout(() => {
                    animateParticle(particle);
                  }, index * 200);
                });
              }, 5000);
            }, 1000);
          });
        }

        function animateParticle(particle) {
          // Random position and size
          const randX = Math.floor(Math.random() * 80) + 10; // 10-90%
          const randSize = Math.floor(Math.random() * 15) + 10; // 10-25px
          const randDuration = Math.floor(Math.random() * 3) + 3; // 3-6s

          particle.style.left = `${randX}%`;
          particle.style.bottom = '10%';
          particle.style.width = `${randSize}px`;
          particle.style.height = `${randSize}px`;

          // Reset any existing animation
          particle.style.animation = 'none';
          particle.offsetHeight; // Trigger reflow

          // Create floating animation
          particle.style.opacity = '1';
          particle.style.animation = `float3dHeart ${randDuration}s ease-in-out`;

          // Reset after animation
          setTimeout(() => {
            particle.style.opacity = '0';
            particle.style.animation = 'none';
          }, randDuration * 1000);
        }

        // Button interactions
        const buttons = document.querySelectorAll('.button-3');
        buttons.forEach((button) => {
          button.addEventListener('mouseenter', function () {
            const item = this.closest('.how-item');
            const particles = item.querySelectorAll('.particle');

            // Animate particles
            particles.forEach((particle, index) => {
              setTimeout(() => {
                animateParticle(particle);
              }, index * 100);
            });
          });
        });

        // Platform icon interactions
        const downloadOptions = document.querySelectorAll(
          '.download-options li a'
        );
        downloadOptions.forEach((option) => {
          option.addEventListener('mouseenter', function () {
            this.classList.add('active');
          });

          option.addEventListener('mouseleave', function () {
            if (!this.classList.contains('permanent-active')) {
              this.classList.remove('active');
            }
          });

          option.addEventListener('click', function (e) {
            e.preventDefault();
            const allOptions =
              this.closest('.download-options').querySelectorAll('li a');
            allOptions.forEach((opt) => {
              opt.classList.remove('permanent-active');
              opt.classList.remove('active');
            });
            this.classList.add('permanent-active');
            this.classList.add('active');

            // Show download animation
            const downloadIndicator = this.closest(
              '.how-content'
            ).querySelector('.download-indicator');
            downloadIndicator.style.opacity = '1';
            downloadIndicator.style.transform = 'scaleX(1)';

            setTimeout(() => {
              downloadIndicator.style.opacity = '0';
              downloadIndicator.style.transform = 'scaleX(0)';
            }, 2000);
          });
        });

        // Initialize animations
        createBackgroundHearts();
        createRandomBursts();
        animateItemParticles();
      });
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const particlesContainer = document.getElementById(
          'particles-container-watch'
        );
        const particleCount = 30;
        const particleColors = [
          'rgba(113, 102, 238, 0.3)',
          'rgba(244, 156, 200, 0.3)',
          'rgba(186, 148, 253, 0.3)',
        ];

        for (let i = 0; i < particleCount; i++) {
          const particle = document.createElement('div');
          particle.classList.add('particle');

          // Random properties
          const size = Math.random() * 10 + 5;
          const color =
            particleColors[Math.floor(Math.random() * particleColors.length)];

          // Position
          const posX = Math.random() * 100;
          const posY = Math.random() * 100;

          // Animation
          const animDuration = Math.random() * 20 + 10;
          const animDelay = Math.random() * 5;

          // Apply styles
          particle.style.width = `${size}px`;
          particle.style.height = `${size}px`;
          particle.style.backgroundColor = color;
          particle.style.left = `${posX}%`;
          particle.style.top = `${posY}%`;
          particle.style.animation = `floating ${animDuration}s ease-in-out ${animDelay}s infinite`;

          particlesContainer.appendChild(particle);
        }

        // Scroll animation
        const featurewatchSection = document.getElementById('featurewatch');
        const featurewatchItems = document.querySelectorAll(
          '.exclusive-item-watch'
        );
        const featurewatchThumb = document.querySelector(
          '.featurewatch-1-thumb-watch'
        );
        const sectionHeader = document.querySelector('.section-header-watch');

        // Function to check if an element is in viewport
        function isInViewport(element) {
          const rect = element.getBoundingClientRect();
          return (
            rect.top <=
              (window.innerHeight || document.documentElement.clientHeight) *
                0.8 && rect.bottom >= 0
          );
        }

        // Function to reset animations
        function resetAnimations() {
          featurewatchSection.classList.remove('section-active');
          featurewatchItems.forEach((item) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(50px)';
          });
          featurewatchThumb.style.opacity = '0';
          featurewatchThumb.style.transform = 'translateY(50px)';
          featurewatchThumb.classList.remove('animate');
        }

        // Function to animate section on scroll
        function animateOnScroll() {
          if (isInViewport(featurewatchSection)) {
            featurewatchSection.classList.add('section-active');

            // Animate featurewatch items with delay
            featurewatchItems.forEach((item) => {
              const delay = parseInt(item.getAttribute('data-delay')) || 0;
              setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
              }, delay);
            });

            // Animate featurewatch thumb
            setTimeout(() => {
              featurewatchThumb.style.opacity = '1';
              featurewatchThumb.style.transform = 'translateY(0)';
              featurewatchThumb.classList.add('animate');
            }, 600);
          } else {
            resetAnimations(); // Reset animations if the section is out of view
          }
        }

        // Initial check
        animateOnScroll();

        // Check on scroll
        window.addEventListener('scroll', animateOnScroll);

        // Hover effects for lordicon
        const lordIcons = document.querySelectorAll('lord-icon');
        lordIcons.forEach((icon) => {
          const parentItem = icon.closest('.exclusive-item-watch');

          parentItem.addEventListener('mouseenter', () => {
            icon.setAttribute('trigger', 'loop');
          });

          parentItem.addEventListener('mouseleave', () => {
            icon.setAttribute('trigger', 'hover');
          });
        });
      });
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        // Create particlenewesoletters
        const particlenewesoletters = document.querySelector(
          '.particlenewesoletters'
        );
        const particlenewesoletterCount = 30;

        for (let i = 0; i < particlenewesoletterCount; i++) {
          const particlenewesoletter = document.createElement('div');
          particlenewesoletter.classList.add('particlenewesoletter');

          // Random size between 2px and 6px
          const size = Math.random() * 4 + 2;
          particlenewesoletter.style.width = `${size}px`;
          particlenewesoletter.style.height = `${size}px`;

          // Random position
          particlenewesoletter.style.left = `${Math.random() * 100}%`;
          particlenewesoletter.style.top = `${Math.random() * 100}%`;

          // Set animation
          particlenewesoletter.style.animation = `float ${
            Math.random() * 10 + 5
          }s ease-in-out infinite`;
          particlenewesoletter.style.animationDelay = `${Math.random() * 5}s`;

          particlenewesoletters.appendChild(particlenewesoletter);
        }

        // Elements to animate
        const animateElements = [
          document.querySelector('.newslater-section'),
          document.querySelector('.particlenewesoletters'),
          document.querySelector('.top-shape'),
          document.querySelector('.bottom-shape'),
          document.querySelector('.sectionheadernerwesoletter'),
          document.querySelector('.catenerwesoletter'),
          document.querySelector('.titlenewesoletter'),
          document.querySelector('.sectionheadernerwesoletter p'),
          document.querySelector('.subscribeformnewesoletter'),
          document.querySelector('.subscribe-thumb-2'),
        ];

        // Add button glow effect
        const subscribeButton = document.querySelector(
          '.subscribeformnewesoletter button'
        );

        // Intersection Observer to trigger animations
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              // When section is in view
              if (entry.isIntersecting) {
                // Add animated class to all elements
                animateElements.forEach((el) => {
                  if (el) el.classList.add('animated');
                });

                // Add glow effect to button after short delay
                setTimeout(() => {
                  if (subscribeButton)
                    subscribeButton.classList.add('button-glow');
                }, 2000);
              } else {
                // When section is out of view, remove animated classes
                animateElements.forEach((el) => {
                  if (el) el.classList.remove('animated');
                });

                // Remove button glow
                if (subscribeButton)
                  subscribeButton.classList.remove('button-glow');
              }
            });
          },
          {
            threshold: 0.2, // Trigger when 20% of the element is visible
            rootMargin: '-10px',
          }
        );

        // Observe the newsletter section
        observer.observe(document.querySelector('.newslater-section'));

        // Form interaction effects
        const formInput = document.querySelector(
          '.subscribeformnewesoletter input'
        );
        if (formInput) {
          formInput.addEventListener('focus', () => {
            document.querySelector(
              '.subscribeformnewesoletter'
            ).style.boxShadow = '0 5px 30px rgba(255, 149, 0, 0.3)';
          });

          formInput.addEventListener('blur', () => {
            document.querySelector(
              '.subscribeformnewesoletter'
            ).style.boxShadow = '0 5px 25px rgba(0, 0, 0, 0.2)';
          });
        }

        // Add animation to image
        const image = document.querySelector('.subscribe-thumb-2 img');
        if (image) {
          image.addEventListener('load', () => {
            image.classList.add('float-animation');
          });
        }
      });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        // Initialize particles.js for background effects
        if (typeof particlesJS !== 'undefined') {
          particlesJS('particles-js', {
            particles: {
              number: {
                value: 80,
                density: {
                  enable: true,
                  value_area: 800,
                },
              },
              color: {
                value: '#ffffff',
              },
              shape: {
                type: 'circle',
                stroke: {
                  width: 0,
                  color: '#000000',
                },
                polygon: {
                  nb_sides: 5,
                },
              },
              opacity: {
                value: 0.5,
                random: true,
                anim: {
                  enable: true,
                  speed: 1,
                  opacity_min: 0.1,
                  sync: false,
                },
              },
              size: {
                value: 3,
                random: true,
                anim: {
                  enable: true,
                  speed: 2,
                  size_min: 0.1,
                  sync: false,
                },
              },
              line_linked: {
                enable: true,
                distance: 150,
                color: '#ffffff',
                opacity: 0.2,
                width: 1,
              },
              move: {
                enable: true,
                speed: 1,
                direction: 'none',
                random: true,
                straight: false,
                out_mode: 'out',
                bounce: false,
                attract: {
                  enable: false,
                  rotateX: 600,
                  rotateY: 1200,
                },
              },
            },
            interactivity: {
              detect_on: 'canvas',
              events: {
                onhover: {
                  enable: true,
                  mode: 'bubble',
                },
                onclick: {
                  enable: true,
                  mode: 'push',
                },
                resize: true,
              },
              modes: {
                grab: {
                  distance: 400,
                  line_linked: {
                    opacity: 1,
                  },
                },
                bubble: {
                  distance: 100,
                  size: 4,
                  duration: 2,
                  opacity: 0.8,
                  speed: 3,
                },
                repulse: {
                  distance: 200,
                  duration: 0.4,
                },
                push: {
                  particles_nb: 4,
                },
                remove: {
                  particles_nb: 2,
                },
              },
            },
            retina_detect: true,
          });
        }

        // Elements to animate
        const animateElements = document.querySelectorAll(
          '.animateelementSpace'
        );

        // Intersection Observer to trigger animations
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                // Add animated class to the element
                entry.target.classList.add('animated');

                // If it's a button, add pulse effect
                if (entry.target.classList.contains('pulsebuttonSpace')) {
                  entry.target.classList.add('animated');
                }

                // For nested animated elements, add delay
                const childElements = entry.target.querySelectorAll(
                  '.animateelementSpace:not(.animated)'
                );
                if (childElements.length > 0) {
                  childElements.forEach((el, index) => {
                    setTimeout(() => {
                      el.classList.add('animated');
                    }, 100 * index);
                  });
                }
              } else {
                // When element is out of view, remove animation classes for re-animation
                entry.target.classList.remove('animated');

                // Also remove from child elements
                const childElements = entry.target.querySelectorAll(
                  '.animateelementSpace'
                );
                if (childElements.length > 0) {
                  childElements.forEach((el) => {
                    el.classList.remove('animated');
                  });
                }
              }
            });
          },
          {
            threshold: 0.1, // Trigger when 10% of the element is visible
            rootMargin: '-50px',
          }
        );

        // Observe all animated elements
        animateElements.forEach((el) => {
          observer.observe(el);
        });

        // Observe the section itself
        observer.observe(document.querySelector('.newslettersectionSpace'));
      });
    </script>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
      // Initialize AOS
      AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false,
      });

      // Plan selector functionality
      const planSelector = document.getElementById('plan-selector');
      const monthlyPrice = document.getElementById('monthly-price');
      const yearlyPrice = document.getElementById('yearly-price');

      const prices = {
        basic: { monthly: 15.0, yearly: 199.0 },
        standard: { monthly: 29.0, yearly: 299.0 },
        premium: { monthly: 49.0, yearly: 499.0 },
        pro: { monthly: 99.0, yearly: 999.0 },
      };

      planSelector.addEventListener('change', function () {
        const plan = this.value;

        // Animate price change
        animateValue(
          monthlyPrice,
          parseFloat(monthlyPrice.textContent),
          prices[plan].monthly,
          500
        );
        animateValue(
          yearlyPrice,
          parseFloat(yearlyPrice.textContent),
          prices[plan].yearly,
          500
        );
      });

      // Monthly/Yearly toggle
      const monthlyOption = document.getElementById('monthly');
      const yearlyOption = document.getElementById('yearly');

      monthlyOption.addEventListener('click', function () {
        this.classList.add('active');
        yearlyOption.classList.remove('active');
        // Add bounce animation
        this.style.animation = 'none';
        setTimeout(() => {
          this.style.animation = 'pulse 1s';
        }, 10);
      });

      yearlyOption.addEventListener('click', function () {
        this.classList.add('active');
        monthlyOption.classList.remove('active');
        // Add bounce animation
        this.style.animation = 'none';
        setTimeout(() => {
          this.style.animation = 'pulse 1s';
        }, 10);

        // Show "Best Value" badge
        if (!this.querySelector('.badge')) {
          const badge = document.createElement('span');
          badge.classList.add('badge');
          badge.textContent = 'Save 20%';
          badge.style.position = 'absolute';
          // badge.style.top = '-10px';
          badge.style.right = '-10px';
          badge.style.background = '#FF6B6B';
          badge.style.color = 'white';
          badge.style.padding = '5px 10px';
          badge.style.borderRadius = '20px';
          badge.style.fontSize = '12px';
          badge.style.fontWeight = 'bold';
          badge.style.boxShadow = '0 3px 10px rgba(0,0,0,0.1)';
          badge.style.animation = 'pulse 2s infinite';
          this.style.position = 'relative';
          this.appendChild(badge);
        }
      });

      // Download button animation
      const downloadBtn = document.getElementById('download-btn');

      downloadBtn.addEventListener('mouseenter', function () {
        this.innerHTML = '<i class="fas fa-rocket"></i> Get Started Now';
        this.style.padding = '16px 40px';
        this.style.color = '#fff';
      });

      downloadBtn.addEventListener('mouseleave', function () {
        this.innerHTML = 'Download App';
        this.style.padding = '16px 36px';
      });

      // Counter animation
      function animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
          if (!startTimestamp) startTimestamp = timestamp;
          const progress = Math.min((timestamp - startTimestamp) / duration, 1);
          let value;

          // Add easing for smoother animation
          if (end > 1000) {
            // If it's a large number, use exponential ease
            value = Math.floor(start + Math.pow(progress, 2) * (end - start));
            obj.textContent = value.toLocaleString();
          } else {
            // For smaller numbers, use a different ease and keep decimal places
            value = start + Math.pow(progress, 3) * (end - start);
            obj.textContent = value.toFixed(2);
          }

          // Add flicker effect for number counter
          obj.style.animation = 'numberIncrease 0.1s';

          if (progress < 1) {
            window.requestAnimationFrame(step);
          }
        };
        window.requestAnimationFrame(step);
      }

      // Counter animation for users with improved animation
      const counter = document.getElementById('counter');
      setTimeout(() => {
        animateValue(counter, 0, 5326234, 3000);
      }, 500);

      // Simulated slider functionality with improved interaction
      const slider = document.querySelector('.invest-range-slider');
      let isDragging = false;
      let sliderWidth = slider.offsetWidth;
      let percentage = 30; // starting percentage

      // Initialize slider position
      updateSliderPosition(percentage);

      slider.addEventListener('mousedown', function (e) {
        isDragging = true;
        document.body.style.cursor = 'grabbing';
        handleSliderMove(e);
      });

      document.addEventListener('mouseup', function () {
        if (isDragging) {
          isDragging = false;
          document.body.style.cursor = 'default';
        }
      });

      document.addEventListener('mousemove', function (e) {
        if (isDragging) {
          handleSliderMove(e);
        }
      });

      // Handle slider touch events for mobile
      slider.addEventListener('touchstart', function (e) {
        isDragging = true;
        handleSliderMove(e.touches[0]);
      });

      document.addEventListener('touchend', function () {
        if (isDragging) {
          isDragging = false;
        }
      });

      document.addEventListener('touchmove', function (e) {
        if (isDragging) {
          handleSliderMove(e.touches[0]);
        }
      });

      // Function to handle slider movement
      function handleSliderMove(e) {
        const sliderRect = slider.getBoundingClientRect();
        sliderWidth = sliderRect.width;
        let offsetX = e.clientX - sliderRect.left;

        // Constrain to slider width
        offsetX = Math.max(0, Math.min(offsetX, sliderWidth));

        // Calculate percentage
        percentage = Math.round((offsetX / sliderWidth) * 100);

        // Update slider position
        updateSliderPosition(percentage);
      }

      // Update slider position based on percentage
      function updateSliderPosition(percent) {
        // Update slider visuals
        slider.style.setProperty('--percent', percent + '%');
        slider.querySelector('::before').style.width = percent + '%';

        // Position the slider handle
        const handle = slider.querySelector('::after');
        if (handle) {
          handle.style.left = percent + '%';
        }

        // Update price based on slider position (just a demo effect)
        const currentPlan = planSelector.value;
        const baseMonthly = prices[currentPlan].monthly;
        const baseYearly = prices[currentPlan].yearly;

        // Calculate adjusted price based on slider position
        const adjustedMonthly = baseMonthly * (0.5 + (percent / 100) * 1.5);
        const adjustedYearly = baseYearly * (0.5 + (percent / 100) * 1.5);

        // Animate to new prices
        animateValue(
          monthlyPrice,
          parseFloat(monthlyPrice.textContent),
          adjustedMonthly,
          300
        );
        animateValue(
          yearlyPrice,
          parseFloat(yearlyPrice.textContent),
          adjustedYearly,
          300
        );
      }

      // Ensure slider works on window resize
      window.addEventListener('resize', function () {
        sliderWidth = slider.offsetWidth;
        updateSliderPosition(percentage);
      });

      // Generate animated background particlespricing
      function createparticlespricing() {
        const particlespricingcontainerpricing =
          document.getElementById('particlespricing');
        const particleCount = 30;

        for (let i = 0; i < particleCount; i++) {
          const particle = document.createElement('div');
          particle.classList.add('particle');

          // Random position
          const posX = Math.random() * 100;
          const posY = Math.random() * 100;

          // Random size
          const size = Math.random() * 5 + 3;

          // Random opacity
          const opacity = Math.random() * 0.5 + 0.1;

          // Random animation
          const duration = Math.random() * 20 + 10;
          const delay = Math.random() * 5;

          // Set styles
          particle.style.left = posX + '%';
          particle.style.top = posY + '%';
          particle.style.width = size + 'px';
          particle.style.height = size + 'px';
          particle.style.opacity = opacity;
          particle.style.animation = `floatAnimation ${duration}s ease-in-out infinite`;
          particle.style.animationDelay = delay + 's';

          particlespricingcontainerpricing.appendChild(particle);
        }
      }

      // Initialize particlespricing
      createparticlespricing();

      // Activate download platform options
      const downloadOptions = document.querySelectorAll('.download-options a');
      downloadOptions.forEach((option) => {
        option.addEventListener('click', function (e) {
          e.preventDefault();

          // Remove active class from all options
          downloadOptions.forEach((opt) => opt.classList.remove('active'));

          // Add active class to clicked option
          this.classList.add('active');

          // Update download button text based on platform
          const platform = this.querySelector('i').className;
          let platformName = 'App';

          if (platform.includes('windows')) {
            platformName = 'Windows';
          } else if (platform.includes('apple')) {
            platformName = 'iOS';
          } else if (platform.includes('android')) {
            platformName = 'Android';
          }

          downloadBtn.textContent = `Download for ${platformName}`;
        });
      });

      // Add hover effects to pricing cards
      const pricingRange = document.querySelector('.pricingrangepricing');
      pricingRange.addEventListener('mouseenter', function () {
        this.style.transform =
          'perspective(1000px) rotateX(5deg) translateY(-5px)';
      });

      pricingRange.addEventListener('mouseleave', function () {
        this.style.transform =
          'perspective(1000px) rotateX(0deg) translateY(0)';
      });

      // Add custom range input styling support for different browsers
      function styleRangeInput() {
        const rangeInputs = document.querySelectorAll('input[type="range"]');

        if (rangeInputs.length > 0) {
          rangeInputs.forEach((input) => {
            input.addEventListener('input', function () {
              const value =
                ((this.value - this.min) / (this.max - this.min)) * 100;
              this.style.background = `linear-gradient(to right, #5142FC 0%, #47A4FF ${value}%, rgba(81, 66, 252, 0.1) ${value}%, rgba(81, 66, 252, 0.1) 100%)`;
            });

            // Trigger input event to apply styles on page load
            input.dispatchEvent(new Event('input'));
          });
        }
      }

      // Initialize all components when DOM is loaded
      document.addEventListener('DOMContentLoaded', function () {
        styleRangeInput();

        // Set initial values
        const initialPlan = planSelector.value;
        monthlyPrice.textContent = prices[initialPlan].monthly.toFixed(2);
        yearlyPrice.textContent = prices[initialPlan].yearly.toFixed(2);
      });
    </script>

    <script>
      // Create floating bubbles
      const floatingcontainerdownalodappsec = document.getElementById(
        'floatingelementsdownloadsec'
      );
      const bubbleCount = 15;

      for (let i = 0; i < bubbleCount; i++) {
        const size = Math.random() * 40 + 10;
        const element = document.createElement('div');
        element.classList.add('floating-element');
        element.style.width = `${size}px`;
        element.style.height = `${size}px`;
        element.style.left = `${Math.random() * 100}%`;
        element.style.opacity = Math.random() * 0.5 + 0.1;
        element.style.animationDuration = `${Math.random() * 15 + 10}s`;
        element.style.animationDelay = `${Math.random() * 5}s`;
        floatingcontainerdownalodappsec.appendChild(element);
      }

      // Enhanced hover effects for download buttons
      const downloadButtons = document.querySelectorAll(
        '.downloadoptionslidownload-app li'
      );
      downloadButtons.forEach((button) => {
        button.addEventListener('mouseenter', function () {
          const icon = this.querySelector('i');
          const span = this.querySelector('span');

          // Animate icon
          icon.style.transform = 'scale(1.2)';
          icon.style.transition = 'transform 0.3s ease';

          // Add subtle bounce animation to the entire button
          this.animate(
            [
              { transform: 'translateY(0)' },
              { transform: 'translateY(-5px)' },
              { transform: 'translateY(-2px)' },
              { transform: 'translateY(-10px)' },
            ],
            {
              duration: 800,
              fill: 'forwards',
              easing: 'cubic-bezier(0.34, 1.56, 0.64, 1)',
            }
          );
        });

        button.addEventListener('mouseleave', function () {
          const icon = this.querySelector('i');

          // Reset icon
          icon.style.transform = 'scale(1)';

          // Reset button position with a smooth return
          this.animate(
            [
              { transform: 'translateY(-10px)' },
              { transform: 'translateY(0)' },
            ],
            {
              duration: 500,
              fill: 'forwards',
              easing: 'cubic-bezier(0.34, 1.56, 0.64, 1)',
            }
          );
        });
      });

      // Parallax effect on scroll
      window.addEventListener('scroll', function () {
        const scrollPosition = window.scrollY;
        const appScreen = document.querySelector('.apps-download-screen-20');
        const appBg = document.querySelector('.apps-download-bg');
        const appThumb = document.querySelector('.apps-download-thumb');

        if (appScreen && appBg && appThumb) {
          appBg.style.transform = `translateY(${scrollPosition * 0.05}px)`;
          appThumb.style.transform = `translate(-50%, -50%) translateY(${
            scrollPosition * -0.02
          }px)`;
        }
      });
    </script>

    <script>
      // Create floating particles
      function createParticles() {
        const particles = document.getElementById('th-particles');
        const particleCount = 20;

        for (let i = 0; i < particleCount; i++) {
          const particle = document.createElement('div');
          particle.className = 'th-particle';

          // Random size
          const size = Math.random() * 15 + 5;
          particle.style.width = `${size}px`;
          particle.style.height = `${size}px`;

          // Random position
          particle.style.left = `${Math.random() * 100}%`;
          particle.style.top = `${Math.random() * 100}%`;

          // Random opacity
          particle.style.opacity = Math.random() * 0.5 + 0.1;

          // Random animation duration and delay
          const duration = Math.random() * 20 + 10;
          const delay = Math.random() * 10;
          particle.style.animation = `th-float ${duration}s ${delay}s infinite linear`;

          particles.appendChild(particle);
        }
      }

      // Initialize animations
      window.addEventListener('load', function () {
        createParticles();

        // Mobile navigation active state
        const navLinks = document.querySelectorAll('.th-mobile-nav-menu li a');
        navLinks.forEach((link) => {
          link.addEventListener('click', function () {
            navLinks.forEach((item) => item.classList.remove('th-active'));
            this.classList.add('th-active');
          });
        });
      });
    </script>

    <script>
      // Create tech-themed particles
      const particlesContainer = document.getElementById('tech-particles');
      const techIcons = [
        '⚡',
        '❤️',
        '🔌',
        '📱',
        '💻',
        '🛰️',
        '❤️',
        '🔋',
        '💡',
        '⚙️',
        '❤️',
      ];
      const particleCount = 26;

      // Create circuit lines
      for (let i = 0; i < 15; i++) {
        createCircuitLine();
      }

      function createCircuitLine() {
        const line = document.createElement('div');
        line.classList.add('circuit-line');

        // Random position
        line.style.left = `${Math.random() * 100}%`;
        line.style.top = `${Math.random() * 100}%`;
        line.style.width = `${Math.random() * 150 + 50}px`;
        line.style.transform = `rotate(${Math.random() * 360}deg)`;

        // Random animation duration and delay
        const delay = Math.random() * 5;
        line.style.animationDelay = `${delay}s`;

        particlesContainer.appendChild(line);
      }

      // Create data nodes
      for (let i = 0; i < 30; i++) {
        createDataNode();
      }

      function createDataNode() {
        const node = document.createElement('div');
        node.classList.add('data-node');

        // Random position
        node.style.left = `${Math.random() * 100}%`;
        node.style.top = `${Math.random() * 100}%`;

        // Random size
        const size = Math.random() * 4 + 2;
        node.style.width = `${size}px`;
        node.style.height = `${size}px`;

        // Add pulse to some nodes
        if (Math.random() > 0.7) {
          const pulseNode = document.createElement('div');
          pulseNode.classList.add('data-node', 'data-pulse');
          pulseNode.style.left = node.style.left;
          pulseNode.style.top = node.style.top;
          pulseNode.style.width = node.style.width;
          pulseNode.style.height = node.style.height;
          particlesContainer.appendChild(pulseNode);
        }

        particlesContainer.appendChild(node);
      }

      // Create tech icon particles
      for (let i = 0; i < particleCount; i++) {
        createTechParticle();
      }

      function createTechParticle() {
        const particle = document.createElement('div');
        particle.classList.add('tech-particle');

        const icon = document.createElement('span');
        icon.classList.add('tech-icon');
        icon.textContent =
          techIcons[Math.floor(Math.random() * techIcons.length)];
        particle.appendChild(icon);

        // Random position
        particle.style.left = `${Math.random() * 100}%`;
        particle.style.bottom = '0';

        // Random animation duration and delay
        const duration = Math.random() * 10 + 8;
        const delay = Math.random() * 15;
        particle.style.animation = `techfloatromantic ${duration}s ease-in-out ${delay}s infinite`;

        particlesContainer.appendChild(particle);
      }

      // Create diamond sparkles
      const sparklesContainer = document.getElementById('sparkles-container');
      for (let i = 0; i < 25; i++) {
        createSparkle();
      }

      function createSparkle() {
        const sparkle = document.createElement('div');
        sparkle.classList.add('diamond-sparkle');

        // Random position
        sparkle.style.left = `${Math.random() * 100}%`;
        sparkle.style.top = `${Math.random() * 100}%`;

        // Random animation delay
        const delay = Math.random() * 5;
        sparkle.style.animationDelay = `${delay}s`;

        sparklesContainer.appendChild(sparkle);
      }

      // Intersection Observer for scroll animations
      const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px',
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate');
          }
        });
      }, observerOptions);

      // Observe elements for animation
      document
        .querySelectorAll(
          '.feature-cardromantic, .image-cardromantic, .text-contentromantic'
        )
        .forEach((element) => {
          observer.observe(element);
        });

      // Trigger animations for initial view
      window.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
          document
            .querySelectorAll('.image-cardromantic, .text-contentromantic')
            .forEach((el) => {
              if (isInViewport(el)) {
                el.classList.add('animate');
              }
            });
        }, 300);
      });

      function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <=
            (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <=
            (window.innerWidth || document.documentElement.clientWidth)
        );
      }

      // Add interactive effects
      const heroSection = document.querySelector('.hero-section-romantic');
      const rings = document.querySelectorAll('.ring');
      const bgRings = document.querySelectorAll('.bg-ring');

      heroSection.addEventListener('mousemove', (e) => {
        const x = e.clientX / window.innerWidth - 0.5;
        const y = e.clientY / window.innerHeight - 0.5;

        rings.forEach((ring, index) => {
          const factor = (index + 1) * 20;
          ring.style.transform = `translate(${x * factor}px, ${
            y * factor
          }px) rotate(${index % 2 === 0 ? '' : '-'}${
            (Date.now() / 100) % 360
          }deg)`;
        });

        // Make background rings react subtly to mouse movement
        bgRings.forEach((ring, index) => {
          const factor = (index + 1) * 5;
          const currentTransform = window
            .getComputedStyle(ring)
            .getPropertyValue('transform');
          const additionalTransform = `translate(${x * factor}px, ${
            y * factor
          }px)`;
          ring.style.transform = additionalTransform;
        });

        // Move some tech particles with cursor
        document
          .querySelectorAll('.tech-particle')
          .forEach((particle, index) => {
            if (index % 3 === 0) {
              // Only affect every third particle
              const factor = Math.random() * 30 + 10;
              const currentTransform = window
                .getComputedStyle(particle)
                .getPropertyValue('transform');
              particle.style.transform = `translate(${x * factor}px, ${
                y * factor
              }px)`;
            }
          });
      });
    </script>
    <script>
      // Add parallax effect on mouse move
      document.addEventListener('mousemove', (e) => {
        const phones = document.querySelectorAll('.phone-mockup');
        const rings = document.querySelectorAll('.ring-product');
        const bgRings = document.querySelectorAll('.ring');

        const moveX = (e.clientX - window.innerWidth / 2) / 25;
        const moveY = (e.clientY - window.innerHeight / 2) / 25;

        phones.forEach((phone, i) => {
          if (!phone.matches(':hover')) {
            // Only apply parallax if not hovering
            const factor = (i + 1) * 0.8;
            phone.style.transform = `translate(${moveX * factor}px, ${
              moveY * factor
            }px) rotate(var(--rotation))`;
          }
        });

        rings.forEach((ring, i) => {
          const factor = (i + 1) * 1.2;
          ring.style.transform = `translate(${-moveX * factor}px, ${
            -moveY * factor
          }px) rotate(${i * 45 + e.clientX / 20}deg) scale(${
            i === 0 ? 1 : 0.8
          })`;
        });

        bgRings.forEach((ring, i) => {
          const factor = (i + 1) * 0.5;
          ring.style.transform = `translate(${moveX * factor}px, ${
            moveY * factor
          }px) scale(${1 + (Math.sin(Date.now() / 2000) + 1) / 10})`;
        });
      });

      // Intersection Observer for scroll animations
      const observernew = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add('visible');
            } else {
              // Optional: Remove the class when scrolling away
              // entry.target.classList.remove('visible');
            }
          });
        },
        {
          threshold: 0.1, // Trigger when at least 10% of the element is visible
        }
      );

      // Observe the section
      observernew.observe(document.querySelector('.app-download-section'));

      // 3D hover effect for phones
      const phones = document.querySelectorAll('.phone-mockup');
      phones.forEach((phone) => {
        phone.addEventListener('mousemove', (e) => {
          const bounds = phone.getBoundingClientRect();
          const mouseX = e.clientX - bounds.left;
          const mouseY = e.clientY - bounds.top;
          const rotateY = (mouseX / bounds.width - 0.5) * 20;
          const rotateX = (mouseY / bounds.height - 0.5) * -20;

          phone.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.1) translateY(-25px)`;
        });

        phone.addEventListener('mouseleave', () => {
          phone.style.transform = `rotate(var(--rotation))`;
        });
      });

      // Make app screenshots hover automatically when section is visible
      document
        .querySelector('.app-download-section')
        .addEventListener('animationend', () => {
          setInterval(() => {
            const randomPhone =
              phones[Math.floor(Math.random() * phones.length)];

            // Simulate hover
            randomPhone.dispatchEvent(
              new MouseEvent('mousemove', {
                bubbles: true,
                clientX:
                  randomPhone.getBoundingClientRect().left +
                  randomPhone.offsetWidth / 2,
                clientY:
                  randomPhone.getBoundingClientRect().top +
                  randomPhone.offsetHeight / 2,
              })
            );

            // After some time, reset
            setTimeout(() => {
              randomPhone.dispatchEvent(new MouseEvent('mouseleave'));
            }, 2000);
          }, 4000);
        });

      // Trigger visibility check on page load
      document.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
          document
            .querySelector('.app-download-section')
            .classList.add('visible');
        }, 300); // Small delay for better animation effect
      });
    </script>

    <script>
      // Create sparkle elements dynamically
      const moyenAppSection = document.querySelector('.moyen-app-section');
      const sparkleCount = 30;

      for (let i = 0; i < sparkleCount; i++) {
        const sparkle = document.createElement('div');
        sparkle.classList.add('moyen-sparkle');

        // Random position
        sparkle.style.left = Math.random() * 100 + '%';
        sparkle.style.top = Math.random() * 100 + '%';

        // Random size
        const size = Math.random() * 6 + 2;
        sparkle.style.width = size + 'px';
        sparkle.style.height = size + 'px';

        // Random animation duration and delay
        const duration = Math.random() * 3 + 2;
        sparkle.style.animationDuration = duration + 's';

        const delay = Math.random() * 5;
        sparkle.style.animationDelay = delay + 's';

        moyenAppSection.appendChild(sparkle);
      }

      // Add interactive hover effects to mockups
      const moyenMockups = document.querySelectorAll('.moyen-mockup');
      moyenMockups.forEach((mockup) => {
        mockup.addEventListener('mouseover', () => {
          moyenMockups.forEach((m) => {
            if (m !== mockup) {
              m.style.transform = 'scale(0.92) translateY(10px)';
              m.style.filter = 'brightness(0.7)';
            } else {
              m.style.transform = 'scale(1.08) translateY(-15px)';
              m.style.zIndex = '10';
              m.style.boxShadow = '0 30px 60px rgba(0, 0, 0, 0.4)';
            }
          });
        });

        mockup.addEventListener('mouseout', () => {
          moyenMockups.forEach((m) => {
            m.style.transform = '';
            m.style.filter = '';
            m.style.zIndex = '';
            m.style.boxShadow = '';
          });
        });
      });

      // Intersection Observer for scroll animations
      const observerOptionsnew = {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px',
      };

      const animateOnScroll = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            // Main section animation
            entry.target.classList.add('animate');

            // Animate children elements
            const title = entry.target.querySelector('.moyen-title');
            const logo = entry.target.querySelector('.moyen-logo');
            const downloadContent = entry.target.querySelector(
              '.moyen-download-content'
            );
            const downloadOptions = entry.target.querySelector(
              '.moyen-download-options'
            );
            const rings = entry.target.querySelectorAll('.moyen-ring');
            const digitalRings = entry.target.querySelectorAll(
              '.moyen-digital-ring'
            );
            const coupleRings = entry.target.querySelector(
              '.moyen-couple-rings'
            );
            const mockups = entry.target.querySelectorAll('.moyen-mockup');

            if (title) title.classList.add('animate');
            if (logo) logo.classList.add('animate');
            if (downloadContent) downloadContent.classList.add('animate');
            if (downloadOptions) downloadOptions.classList.add('animate');

            // Delayed animations
            setTimeout(() => {
              rings.forEach((ring) => {
                ring.classList.add('animate');
                setTimeout(() => ring.classList.add('animate-pulse'), 1000);
              });

              digitalRings.forEach((ring) => {
                ring.classList.add('animate');
                setTimeout(() => {
                  ring.classList.add('animate-spin');
                  ring.classList.add('animate-pulse');
                }, 1000);
              });

              if (coupleRings) {
                coupleRings.classList.add('animate');
                setTimeout(
                  () => coupleRings.classList.add('animate-move'),
                  1000
                );
              }

              mockups.forEach((mockup, index) => {
                setTimeout(() => {
                  mockup.classList.add('animate');
                  setTimeout(() => mockup.classList.add('animate-float'), 800);
                }, 200 * index);
              });
            }, 300);

            // Only run once
            animateOnScroll.unobserve(entry.target);
          }
        });
      }, observerOptionsnew);

      // Start observing the section
      animateOnScroll.observe(moyenAppSection);
    </script>

    <script>
      // Generate more dynamic particletheees
      function createDynamicparticletheees() {
        const background = document.querySelector('.animated-backgroundtheee');
        for (let i = 0; i < 20; i++) {
          const particletheee = document.createElement('div');
          particletheee.className = 'particletheee';

          // Random positioning and timing
          const size = Math.random() * 3 + 2;
          particletheee.style.width = size + 'px';
          particletheee.style.height = size + 'px';
          particletheee.style.top = Math.random() * 100 + '%';
          particletheee.style.left = Math.random() * 100 + '%';
          particletheee.style.animationDuration = Math.random() * 15 + 10 + 's';
          particletheee.style.animationDelay = Math.random() * 10 + 's';
          particletheee.style.opacity = Math.random() * 0.5 + 0.1;

          background.appendChild(particletheee);
        }
      }

      // Animation when elements enter viewport
      document.addEventListener('DOMContentLoaded', function () {
        // Create dynamic background elements
        createDynamicparticletheees();

        const observerOptions = {
          root: null,
          rootMargin: '0px',
          threshold: 0.1,
        };

        const observer = new IntersectionObserver((entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.style.visibility = 'visible';
              if (entry.target.classList.contains('slide-uptheee')) {
                entry.target.style.animation =
                  'slideUptheee 0.8s ease forwards';
              } else if (entry.target.classList.contains('bounce-intheee')) {
                entry.target.style.animation = 'bounceIntheee 1s ease forwards';
              } else if (entry.target.classList.contains('fade-intheee')) {
                entry.target.style.animation = 'fadeIntheee 1s ease forwards';
              }
              observer.unobserve(entry.target);
            }
          });
        }, observerOptions);

        document.querySelectorAll('.help-boxtheee').forEach((box) => {
          box.style.visibility = 'hidden';
          observer.observe(box);
        });

        // Sequential animation for list items
        document
          .querySelectorAll('.text-contenttheee ul li')
          .forEach((item, index) => {
            item.style.opacity = '0';
            setTimeout(() => {
              item.style.opacity = '1';
              item.style.animation = 'slideUptheee 0.5s ease forwards';
            }, 800 + index * 200);
          });

        // Enhanced hover effects
        document.querySelectorAll('.help-boxtheee').forEach((box) => {
          box.addEventListener('mouseenter', function () {
            this.style.transform = 'translateY(-10px)';
            this.style.boxShadow = '0 15px 35px rgba(43, 11, 144, 0.25)';

            const image = this.querySelector('img');

            if (image) {
              if (image.classList.contains('help-image01theee')) {
                image.style.transform = 'translateY(-15px) scale(1.05)';
              } else if (image.classList.contains('help-image02theee')) {
                image.style.transform = 'rotate(5deg) scale(1.08)';
              } else if (image.classList.contains('help-image04theee')) {
                image.style.transform = 'scale(1.08)';
              }
            }
          });

          box.addEventListener('mouseleave', function () {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 10px 30px rgba(43, 11, 144, 0.1)';

            const image = this.querySelector('img');
            if (image) {
              image.style.transform = '';
            }
          });
        });
      });

      // poputheeep functionality
      function openpoputheeep() {
        const overlay = document.createElement('div');
        overlay.className = 'poputheeep-overlaytheee';
        overlay.style.display = 'flex';

        const poputheeep = document.createElement('div');
        poputheeep.className = 'poputheeep';

        poputheeep.innerHTML = `
      <div class="poputheeep-header">
        <h2>Limited Edition Tether Rings</h2>
        <button class="poputheeep-close" onclick="closepoputheeep(this)">&times;</button>
      </div>
      <div class="poputheeep-search-containerheee">
        <input type="text" class="poputheeep-search" placeholder="Search special offers...">
        <button class="poputheeep-search-button">Search</button>
      </div>
      <div class="poputheeep-content">
        <div class="poputheeep-item">
          <img src="/api/placeholder/40/40" alt="Valentine's Special">
          <div>Valentine's Special Edition Ring - 20% Off</div>
        </div>
        <div class="poputheeep-item">
          <img src="/api/placeholder/40/40" alt="Anniversary Edition">
          <div>Anniversary Edition - Free Engraving</div>
        </div>
        <div class="poputheeep-item">
          <img src="/api/placeholder/40/40" alt="Couple's Bundle">
          <div>Couple's Bundle - Buy One Get One 50% Off</div>
        </div>
        <div class="poputheeep-item">
          <img src="/api/placeholder/40/40" alt="Premium Tier">
          <div>Premium Tier - 3 Months Free Subscription</div>
        </div>
        <div class="poputheeep-item">
          <img src="/api/placeholder/40/40" alt="Custom Design">
          <div>Custom Design Service - Limited Availability</div>
        </div>
        <div class="poputheeep-item">
          <img src="/api/placeholder/40/40" alt="Referral Bonus">
          <div>Referral Bonus - Get $25 Credit Per Friend</div>
        </div>
      </div>
    `;

        overlay.appendChild(poputheeep);
        document.body.appendChild(overlay);
      }

      function openVideopoputheeep() {
        const overlay = document.createElement('div');
        overlay.className = 'poputheeep-overlaytheee';
        overlay.style.display = 'flex';

        const poputheeep = document.createElement('div');
        poputheeep.className = 'poputheeep';

        poputheeep.innerHTML = `
      <div class="poputheeep-header">
        <h2>Tether Heart Ring Collection</h2>
        <button class="poputheeep-close" onclick="closepoputheeep(this)">&times;</button>
      </div>
      <div class="poputheeep-content" style="text-align: center;">
        <p>Our digital rings use cutting-edge technology to keep couples connected across any distance.</p>
        <div style="margin: 20px 0;">
          <img src="/api/placeholder/400/225" alt="Product Video" style="width: 100%; border-radius: 8px;">
        </div>
        <button class="ask-questiontheee" style="margin: 0 auto;">Shop Now</button>
      </div>
    `;

        overlay.appendChild(poputheeep);
        document.body.appendChild(overlay);
      }

      function closepoputheeep(element) {
        const overlay = element.closest('.poputheeep-overlaytheee');
        overlay.style.animation = 'fadeOut 0.3s forwards';
        setTimeout(() => {
          document.body.removeChild(overlay);
        }, 300);
      }
    </script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <script>
      // Gift Experience JavaScript
      class GiftExperience {
        constructor() {
          this.modal = document.getElementById('giftModalOverlay');
          this.packageSection = document.getElementById('giftPackageSection');
          this.formSection = document.getElementById('giftFormSection');
          this.selectedPackage = null;

          this.init();
        }

        init() {
          this.bindEvents();
          this.createFloatingElements();
        }

        bindEvents() {
          // Send Gift Button

          document.querySelectorAll('#giftSendButton').forEach((button) => {
            button.addEventListener('click', () => {
              this.openModal();
            });
          });

          // Close Modal
          document
            .getElementById('giftModalClose')
            .addEventListener('click', () => {
              this.closeModal();
            });

          // Close modal when clicking overlay
          this.modal.addEventListener('click', (e) => {
            if (e.target === this.modal) {
              this.closeModal();
            }
          });

          // Package Selection
          document.querySelectorAll('.giftPackage-card').forEach((card) => {
            card.addEventListener('click', () => {
              this.selectPackage(card.dataset.package);
            });
          });

          // Back Button
          document
            .getElementById('giftFormBack')
            .addEventListener('click', () => {
              this.showPackageSelection();
            });

          // Form Submission
          document
            .getElementById('giftForm')
            .addEventListener('submit', (e) => {
              this.handleFormSubmit(e);
            });

          // Escape key to close modal
          document.addEventListener('keydown', (e) => {
            if (
              e.key === 'Escape' &&
              this.modal.classList.contains('giftModal-active')
            ) {
              this.closeModal();
            }
          });

          // Add ripple effect to buttons
          this.addRippleEffect();
        }

        openModal() {
          this.modal.classList.add('giftModal-active');
          document.body.style.overflow = 'hidden';
          this.showPackageSelection();

          // Add entrance animation
          setTimeout(() => {
            this.animatePackageCards();
          }, 100);
        }

        closeModal() {
          this.modal.classList.remove('giftModal-active');
          document.body.style.overflow = '';
          this.selectedPackage = null;
          this.resetForm();

          // Remove selected state from all cards
          document.querySelectorAll('.giftPackage-card').forEach((card) => {
            card.classList.remove('giftPackage-selected');
          });
        }

        selectPackage(packageType) {
          this.selectedPackage = packageType;

          // Update selected state
          document.querySelectorAll('.giftPackage-card').forEach((card) => {
            card.classList.remove('giftPackage-selected');
          });

          document
            .querySelector(`[data-package="${packageType}"]`)
            .classList.add('giftPackage-selected');

          // Show form after a short delay
          setTimeout(() => {
            this.showForm(packageType);
          }, 500);
        }

        showPackageSelection() {
          this.packageSection.style.display = 'block';
          this.formSection.style.display = 'none';

          // Animate package cards
          this.animatePackageCards();
        }

        showForm(packageType) {
          this.packageSection.style.display = 'none';
          this.formSection.style.display = 'block';

          // Update form title
          const packageNames = {
            quarterly: 'Quarterly Rhythm',
            seasonal: 'Seasonal Sync',
            annual: 'Annual Harmony',
            connected: 'Connected Six',
          };

          document.getElementById(
            'giftFormTitle'
          ).textContent = `${packageNames[packageType]} Details`;

          // Animate form sections
          this.animateFormSections();
        }

        animatePackageCards() {
          const cards = document.querySelectorAll('.giftPackage-card');
          cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';

            setTimeout(() => {
              card.style.transition = 'all 0.5s ease';
              card.style.opacity = '1';
              card.style.transform = 'translateY(0)';
            }, index * 100);
          });
        }

        animateFormSections() {
          const sections = document.querySelectorAll('.giftForm-section');
          sections.forEach((section, index) => {
            section.style.opacity = '0';
            section.style.transform = 'translateX(-30px)';

            setTimeout(() => {
              section.style.transition = 'all 0.5s ease';
              section.style.opacity = '1';
              section.style.transform = 'translateX(0)';
            }, index * 150);
          });
        }

        handleFormSubmit(e) {
          e.preventDefault();

          const formData = new FormData(e.target);
          const giftData = {
            package: this.selectedPackage,
            recipientName: formData.get('recipientName'),
            recipientEmail: formData.get('recipientEmail'),
            recipientPhone: formData.get('recipientPhone'),
            deliveryDate: formData.get('deliveryDate'),
            senderName: formData.get('senderName'),
            senderEmail: formData.get('senderEmail'),
            message: formData.get('message'),
            billingAddress: formData.get('billingAddress'),
          };

          // Simulate form submission
          this.showSuccessMessage(giftData);
        }

        showSuccessMessage(giftData) {
          // Create success overlay
          const successOverlay = document.createElement('div');
          successOverlay.className = 'giftSuccess-overlay';
          successOverlay.innerHTML = `
                          <div class="giftSuccess-container">
                              <div class="giftSuccess-icon">
                                  <i class="fas fa-check-circle"></i>
                              </div>
                              <h3 class="giftSuccess-title">Gift Sent Successfully!</h3>
                              <p class="giftSuccess-message">
                                  Your ${this.getPackageName(
                                    giftData.package
                                  )} gift package has been sent to ${
            giftData.recipientName
          }.
                                  They will receive it on ${
                                    giftData.deliveryDate
                                  }.
                              </p>
                              <button class="giftSuccess-button" onclick="this.parentElement.parentElement.remove()">
                                  <i class="fas fa-heart"></i>
                                  Continue
                              </button>
                          </div>
                      `;

          // Add success styles
          const successStyles = `
                          <style>
                              .giftSuccess-overlay {
                                  position: fixed;
                                  top: 0;
                                  left: 0;
                                  width: 100%;
                                  height: 100%;
                                  background: rgba(0, 0, 0, 0.9);
                                  display: flex;
                                  align-items: center;
                                  justify-content: center;
                                  z-index: 2000;
                                  animation: giftSuccess-fadeIn 0.5s ease;
                              }

                              .giftSuccess-container {
                                  background: white;
                                  border-radius: 25px;
                                  padding: 3rem;
                                  text-align: center;
                                  max-width: 500px;
                                  margin: 1rem;
                                  animation: giftSuccess-slideUp 0.5s ease;
                              }

                              .giftSuccess-icon {
                                  width: 100px;
                                  height: 100px;
                                  background: linear-gradient(135deg, #4caf50, #45a049);
                                  border-radius: 50%;
                                  display: flex;
                                  align-items: center;
                                  justify-content: center;
                                  margin: 0 auto 2rem;
                                  animation: giftSuccess-bounce 1s ease;
                              }

                              .giftSuccess-icon i {
                                  font-size: 3rem;
                                  color: white;
                              }

                              .giftSuccess-title {
                                  font-size: 2rem;
                                  font-weight: 700;
                                  color: #333;
                                  margin-bottom: 1rem;
                              }

                              .giftSuccess-message {
                                  font-size: 1.1rem;
                                  color: #666;
                                  line-height: 1.6;
                                  margin-bottom: 2rem;
                              }

                              .giftSuccess-button {
                                  padding: 1rem 2rem;
                                  font-size: 1.1rem;
                                  font-weight: 600;
                                  color: white;
                                  background: linear-gradient(135deg, #2d077e, #851e8b);
                                  border: none;
                                  border-radius: 50px;
                                  cursor: pointer;
                                  transition: all 0.3s ease;
                                  display: flex;
                                  align-items: center;
                                  gap: 0.5rem;
                                  margin: 0 auto;
                              }

                              .giftSuccess-button:hover {
                                  transform: translateY(-2px);
                                  box-shadow: 0 10px 25px rgba(45, 7, 126, 0.4);
                              }

                              @keyframes giftSuccess-fadeIn {
                                  from { opacity: 0; }
                                  to { opacity: 1; }
                              }

                              @keyframes giftSuccess-slideUp {
                                  from { transform: translateY(50px); opacity: 0; }
                                  to { transform: translateY(0); opacity: 1; }
                              }

                              @keyframes giftSuccess-bounce {
                                  0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
                                  40% { transform: translateY(-10px); }
                                  60% { transform: translateY(-5px); }
                              }
                          </style>
                      `;

          document.head.insertAdjacentHTML('beforeend', successStyles);
          document.body.appendChild(successOverlay);

          // Close modal after showing success
          setTimeout(() => {
            this.closeModal();
          }, 100);

          console.log('Gift Data:', giftData);
        }

        getPackageName(packageType) {
          const names = {
            quarterly: 'Quarterly Rhythm',
            seasonal: 'Seasonal Sync',
            annual: 'Annual Harmony',
            connected: 'Connected Six',
          };
          return names[packageType] || packageType;
        }

        resetForm() {
          document.getElementById('giftForm').reset();
        }

        addRippleEffect() {
          const buttons = document.querySelectorAll(
            '.giftBanner-sendButton, .giftForm-submitButton'
          );

          buttons.forEach((button) => {
            button.addEventListener('click', function (e) {
              const ripple = this.querySelector(
                '.giftButton-ripple, .giftSubmit-ripple'
              );
              if (ripple) {
                ripple.style.width = '0';
                ripple.style.height = '0';

                setTimeout(() => {
                  ripple.style.width = '300px';
                  ripple.style.height = '300px';
                }, 10);

                setTimeout(() => {
                  ripple.style.width = '0';
                  ripple.style.height = '0';
                }, 600);
              }
            });
          });
        }

        createFloatingElements() {
          // Create additional floating elements for enhanced visual appeal
          const banner = document.querySelector('.giftBanner-masterSection');

          for (let i = 0; i < 10; i++) {
            const element = document.createElement('div');
            element.className = `giftFloat-extra giftFloat-extra-${i}`;
            element.style.cssText = `
                              position: absolute;
                              width: ${Math.random() * 6 + 2}px;
                              height: ${Math.random() * 6 + 2}px;
                              background: rgba(255, 255, 255, ${
                                Math.random() * 0.3 + 0.1
                              });
                              border-radius: 50%;
                              top: ${Math.random() * 100}%;
                              left: ${Math.random() * 100}%;
                              animation: giftFloat-drift ${
                                Math.random() * 10 + 10
                              }s infinite linear;
                              pointer-events: none;
                              z-index: 3;
                          `;

            banner.appendChild(element);
          }

          // Add drift animation
          const driftStyle = document.createElement('style');
          driftStyle.textContent = `
                          @keyframes giftFloat-drift {
                              0% {
                                  transform: translateY(0px) translateX(0px) rotate(0deg);
                                  opacity: 0;
                              }
                              10% {
                                  opacity: 1;
                              }
                              90% {
                                  opacity: 1;
                              }
                              100% {
                                  transform: translateY(-100vh) translateX(50px) rotate(360deg);
                                  opacity: 0;
                              }
                          }
                      `;
          document.head.appendChild(driftStyle);
        }
      }

      // Initialize the gift experience when DOM is loaded
      document.addEventListener('DOMContentLoaded', () => {
        new GiftExperience();

        // Add smooth scrolling for better UX
        document.documentElement.style.scrollBehavior = 'smooth';

        // Add loading animation
        document.body.style.opacity = '0';
        setTimeout(() => {
          document.body.style.transition = 'opacity 1s ease';
          document.body.style.opacity = '1';
        }, 100);
      });

      // Add intersection observer for scroll animations
      const observerOptionsallnewest = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px',
      };

      const observerallnewest = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.style.animation =
              'giftElement-slideInUp 0.8s ease forwards';
          }
        });
      }, observerOptionsallnewest);

      // Observe elements for scroll animations
      document.addEventListener('DOMContentLoaded', () => {
        const animatedElements = document.querySelectorAll(
          '.giftBanner-titleSection, .giftBanner-ctaSection'
        );
        animatedElements.forEach((el) => observerallnewest.observe(el));
      });

      // Add slide in animation
      const slideInStyle = document.createElement('style');
      slideInStyle.textContent = `
                  @keyframes giftElement-slideInUp {
                      from {
                          opacity: 0;
                          transform: translateY(30px);
                      }
                      to {
                          opacity: 1;
                          transform: translateY(0);
                      }
                  }
              `;
      document.head.appendChild(slideInStyle);
    </script>

    <script>
      // Initialize variables
      const xchatFixedContainer = document.getElementById(
        'xchatFixedContainer'
      );
      const xchatMainBtn = document.getElementById('xchatMainBtn');
      const xchatWindow = document.getElementById('xchatWindow');
      const xchatMessages = document.getElementById('xchatMessages');
      const xchatInput = document.getElementById('xchatInput');
      const xchatSendBtn = document.getElementById('xchatSendBtn');
      const xchatNotification = document.getElementById('xchatNotification');
      const xchatClose = document.getElementById('xchatClose');

      let xchatIsOpen = false;
      let xchatMessageCount = 0;

      // Predefined bot responses
      const xchatBotResponses = [
        "That's a great question! Let me help you with that. 🤔",
        "I understand what you're looking for. Here's what I can tell you... 💡",
        "Thanks for reaching out! I'm here to assist you. 😊",
        'Let me provide you with the information you need. 📋',
        "I'd be happy to help you with that! Here's my suggestion... ✨",
        "That's an interesting point. Let me explain... 🎯",
        "I see what you mean. Here's how we can solve this... 🔧",
        'Great choice! This is definitely something I can help with. 🌟',
        "I'm glad you asked! This is one of my favorite topics. 💬",
        'Perfect timing! I have just the right information for you. ⏰',
      ];

      // Show/hide chatbot on scroll
      let xchatScrollTimeout;
      window.addEventListener('scroll', () => {
        clearTimeout(xchatScrollTimeout);

        if (window.scrollY > 200) {
          xchatFixedContainer.classList.add('xchat-visible');
        }

        xchatScrollTimeout = setTimeout(() => {
          if (window.scrollY <= 200 && !xchatIsOpen) {
            xchatFixedContainer.classList.remove('xchat-visible');
          }
        }, 100);
      });

      // Toggle chat window
      xchatMainBtn.addEventListener('click', () => {
        xchatToggleChat();
      });

      xchatClose.addEventListener('click', () => {
        xchatToggleChat();
      });

      function xchatToggleChat() {
        xchatIsOpen = !xchatIsOpen;

        if (xchatIsOpen) {
          xchatWindow.classList.add('xchat-open');
          xchatNotification.style.display = 'none';
          xchatInput.focus();
          xchatScrollToBottom();
        } else {
          xchatWindow.classList.remove('xchat-open');
        }
      }

      // Send message functionality
      function xchatSendMessage() {
        const message = xchatInput.value.trim();
        if (!message) return;

        // Add user message
        xchatAddMessage(message, 'user');
        xchatInput.value = '';
        xchatResizeInput();

        // Show typing indicator
        xchatShowTyping();

        // Simulate bot response
        setTimeout(() => {
          xchatHideTyping();
          const response =
            xchatBotResponses[
              Math.floor(Math.random() * xchatBotResponses.length)
            ];
          xchatAddMessage(response, 'bot');
        }, 1500 + Math.random() * 2000);
      }

      // Add message to chat
      function xchatAddMessage(text, sender) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `xchat-message xchat-${sender}`;

        const currentTime = new Date().toLocaleTimeString([], {
          hour: '2-digit',
          minute: '2-digit',
        });

        messageDiv.innerHTML = `
                                <div class="xchat-message-bubble">
                                    ${text}
                                    <div class="xchat-message-time">${currentTime}</div>
                                </div>
                            `;

        xchatMessages.appendChild(messageDiv);
        xchatScrollToBottom();
        xchatMessageCount++;

        // Update notification if chat is closed
        if (!xchatIsOpen && sender === 'bot') {
          xchatNotification.textContent = xchatMessageCount;
          xchatNotification.style.display = 'flex';
        }
      }

      // Show typing indicator
      function xchatShowTyping() {
        const typingDiv = document.createElement('div');
        typingDiv.className = 'xchat-message xchat-bot';
        typingDiv.id = 'xchatTypingIndicator';
        typingDiv.innerHTML = `
                                <div class="xchat-typing">
                                    <div class="xchat-typing-dots">
                                        <div class="xchat-typing-dot"></div>
                                        <div class="xchat-typing-dot"></div>
                                        <div class="xchat-typing-dot"></div>
                                    </div>
                                    <span style="font-size: 12px; color: #666;">AI is typing...</span>
                                </div>
                            `;
        xchatMessages.appendChild(typingDiv);
        xchatScrollToBottom();
      }

      // Hide typing indicator
      function xchatHideTyping() {
        const typingIndicator = document.getElementById('xchatTypingIndicator');
        if (typingIndicator) {
          typingIndicator.remove();
        }
      }

      // Scroll to bottom
      function xchatScrollToBottom() {
        setTimeout(() => {
          xchatMessages.scrollTop = xchatMessages.scrollHeight;
        }, 100);
      }

      // Auto-resize input
      function xchatResizeInput() {
        xchatInput.style.height = 'auto';
        xchatInput.style.height = Math.min(xchatInput.scrollHeight, 120) + 'px';
      }

      // Event listeners
      xchatSendBtn.addEventListener('click', xchatSendMessage);

      xchatInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter' && !e.shiftKey) {
          e.preventDefault();
          xchatSendMessage();
        }
      });

      xchatInput.addEventListener('input', xchatResizeInput);

      // Quick reply function
      function xchatSendQuickReply(message) {
        xchatAddMessage(message, 'user');

        // Remove quick replies after use
        const quickReplies = document.querySelector('.xchat-quick-replies');
        if (quickReplies) {
          quickReplies.style.opacity = '0';
          quickReplies.style.transform = 'translateY(-10px)';
          setTimeout(() => quickReplies.remove(), 300);
        }

        // Show typing and respond
        setTimeout(() => {
          xchatShowTyping();
          setTimeout(() => {
            xchatHideTyping();
            let response;
            if (message.includes('services')) {
              response =
                'We offer a wide range of services including web development, mobile apps, AI solutions, and digital marketing. Would you like to know more about any specific service? 🚀';
            } else if (message.includes('help')) {
              response =
                "I'm here to help! You can ask me about our services, pricing, support, or anything else. What specific information are you looking for? 🤝";
            } else if (message.includes('support')) {
              response =
                'Our support team is available 24/7! You can reach us via email at support@company.com or call us at +1-234-567-8900. How can we assist you today? 📞';
            } else {
              response =
                xchatBotResponses[
                  Math.floor(Math.random() * xchatBotResponses.length)
                ];
            }
            xchatAddMessage(response, 'bot');
          }, 1500);
        }, 500);
      }

      // Simulate new messages when chat is closed
      setInterval(() => {
        if (!xchatIsOpen && Math.random() < 0.3) {
          const proactiveMessages = [
            "Hi! I noticed you're browsing our site. Need any help? 😊",
            "Got questions? I'm here to help! 💬",
            'Looking for something specific? Let me know! 🔍',
            'New features available! Want to learn more? ✨',
          ];
          const message =
            proactiveMessages[
              Math.floor(Math.random() * proactiveMessages.length)
            ];
          xchatAddMessage(message, 'bot');
        }
      }, 30000); // Every 30 seconds

      // Close chat when clicking outside
      document.addEventListener('click', (e) => {
        if (
          xchatIsOpen &&
          !xchatWindow.contains(e.target) &&
          !xchatMainBtn.contains(e.target)
        ) {
          xchatToggleChat();
        }
      });

      // Initial bot messages
      setTimeout(() => {
        xchatAddMessage(
          "I see you're exploring our platform! Feel free to ask me anything. 🌟",
          'bot'
        );
      }, 3000);

      setTimeout(() => {
        xchatAddMessage(
          'Pro tip: I can help you with product info, pricing, support, and more! 💡',
          'bot'
        );
      }, 8000);
    </script>
    <script>
      // Initialize variables
      const xpurpleFixedBtn = document.getElementById('xpurpleFixedBtn');
      const xpurpleMainBtn = document.getElementById('xpurpleMainBtn');
      const xpurpleDropdown = document.getElementById('xpurpleDropdown');
      const xpurpleSignupBtn = document.getElementById('xpurpleSignupBtn');
      const xpurpleLoginBtn = document.getElementById('xpurpleLoginBtn');
      const xpurpleSignupModal = document.getElementById('xpurpleSignupModal');
      const xpurpleLoginModal = document.getElementById('xpurpleLoginModal');

      // Show/hide fixed button on scroll
      let xpurpleScrollTimeout;
      window.addEventListener('scroll', () => {
        clearTimeout(xpurpleScrollTimeout);

        if (window.scrollY > 200) {
          xpurpleFixedBtn.classList.add('xpurple-visible');
        }

        xpurpleScrollTimeout = setTimeout(() => {
          if (window.scrollY <= 200) {
            xpurpleFixedBtn.classList.remove('xpurple-visible');
            xpurpleDropdown.classList.remove('xpurple-show');
          }
        }, 100);
      });

      // Toggle dropdown on hover
      xpurpleFixedBtn.addEventListener('mouseenter', () => {
        xpurpleDropdown.classList.add('xpurple-show');
      });

      xpurpleFixedBtn.addEventListener('mouseleave', () => {
        setTimeout(() => {
          if (!xpurpleDropdown.matches(':hover')) {
            xpurpleDropdown.classList.remove('xpurple-show');
          }
        }, 100);
      });

      // Modal functions
      function xpurpleOpenModal(modal) {
        modal.classList.add('xpurple-active');
        document.body.style.overflow = 'hidden';
        xpurpleDropdown.classList.remove('xpurple-show');
      }

      function xpurpleCloseModal(modal) {
        modal.classList.remove('xpurple-active');
        document.body.style.overflow = '';
      }

      function xpurpleSwitchModal(from, to) {
        xpurpleCloseModal(from);
        setTimeout(() => xpurpleOpenModal(to), 200);
      }

      // Event listeners for modal controls
      xpurpleSignupBtn.addEventListener('click', () =>
        xpurpleOpenModal(xpurpleSignupModal)
      );
      xpurpleLoginBtn.addEventListener('click', () =>
        xpurpleOpenModal(xpurpleLoginModal)
      );

      // Close buttons
      document
        .getElementById('xpurpleSignupClose')
        .addEventListener('click', () => xpurpleCloseModal(xpurpleSignupModal));
      document
        .getElementById('xpurpleLoginClose')
        .addEventListener('click', () => xpurpleCloseModal(xpurpleLoginModal));

      // Switch between modals
      document
        .getElementById('xpurpleToLogin')
        .addEventListener('click', (e) => {
          e.preventDefault();
          xpurpleSwitchModal(xpurpleSignupModal, xpurpleLoginModal);
        });

      document
        .getElementById('xpurpleToSignup')
        .addEventListener('click', (e) => {
          e.preventDefault();
          xpurpleSwitchModal(xpurpleLoginModal, xpurpleSignupModal);
        });

      // Close modals on overlay click
      [xpurpleSignupModal, xpurpleLoginModal].forEach((modal) => {
        modal.addEventListener('click', (e) => {
          if (e.target === modal) {
            xpurpleCloseModal(modal);
          }
        });
      });

      // Close modals on Escape key
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
          xpurpleCloseModal(xpurpleSignupModal);
          xpurpleCloseModal(xpurpleLoginModal);
        }
      });

    //   // Form submissions (demo)
    //   document
    //     .getElementById('xpurpleSignupForm')
    //     .addEventListener('submit', (e) => {
    //       e.preventDefault();
    //       alert('Sign up form submitted! (Demo)');
    //       xpurpleCloseModal(xpurpleSignupModal);
    //     });

    //   document
    //     .getElementById('xpurpleLoginForm')
    //     .addEventListener('submit', (e) => {
    //       e.preventDefault();
    //       alert('Login form submitted! (Demo)');
    //       xpurpleCloseModal(xpurpleLoginModal);
    //     });


      // Enhanced touch support for mobile
      let xpurpleTouchTimeout;
      xpurpleMainBtn.addEventListener('touchstart', () => {
        xpurpleTouchTimeout = setTimeout(() => {
          xpurpleDropdown.classList.add('xpurple-show');
        }, 200);
      });

      xpurpleMainBtn.addEventListener('touchend', () => {
        clearTimeout(xpurpleTouchTimeout);
      });

      // Auto-hide dropdown on mobile after selection
      [xpurpleSignupBtn, xpurpleLoginBtn].forEach((btn) => {
        btn.addEventListener('click', () => {
          xpurpleDropdown.classList.remove('xpurple-show');
        });
      });
      </script>

@endsection

