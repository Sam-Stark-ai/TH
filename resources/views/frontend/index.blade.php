@extends('layouts.frontend.master')


@section('css')
@endsection

@section('content')




<!--============= Banner Section Starts Here =============-->
    <section class="banner-1 bg_img oh" data-background="{{asset('FrontendAssets/images/banner/banner-bg-1.jpg')}}">
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

      <div class="banner-1-shape d-none d-lg-block">
        <img src="{{asset('FrontendAssets/css/img/banner1-shape.png')}}" alt="css" />
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="banner-content-1 cl-white">
              <h1 class="title">
                {{ $herosection->hero_heading }}
              </h1>
              <p>
              {{ $herosection->hero_subheading }}
              </p>
              <div class="banner-button-group">
                <a href="{{ $herosection->hero_button1_link }}" class="button-4">{{ $herosection->hero_button1_text }}</a>
                <a href="{{ $herosection->hero_button2_link }}" class="button-4 active">{{ $herosection->hero_button2_text }}</a>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="banner-1-slider-wrapper">
              <div class="banner-1-slider owl-carousel owl-theme">
                <div class="banner-thumb">
                  <img
                  src="{{ asset($herosection->hero_image) }}"

                    alt="banner"
                    class="animation-mob"
                  />
                </div>
                <div class="banner-thumb">
                  <img
                    src="{{asset('FrontendAssets/images/mockups-02.png')}}"
                    alt="banner"
                    class="animation-mob"
                  />
                </div>
                <div class="banner-thumb">
                  <img
                    src="{{asset('FrontendAssets/images/mockups-03.png')}}"
                    alt="banner"
                    class="animation-mob"
                  />
                </div>
                <div class="banner-thumb">
                  <img
                    src="{{asset('FrontendAssets/images/mockups-04.png')}}"
                    alt="banner"
                    class="animation-mob"
                  />
                </div>
              </div>
              <div class="ban-click">
                <div class="thumb">
                  <img src="{{asset('FrontendAssets/images/banner/click.png')}}" alt="banner" />
                </div>
                <span class="cl-white">Click Me</span>
              </div>
              <div class="arrow">
                <img src="{{asset('FrontendAssets/images/banner/arrow.png')}}" alt="banner" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============= Banner Section Ends Here =============-->

    <!--============= Exclusive Section Starts Here =============-->

    <section class="exclusive-section padding-bottom-2 padding-top oh" id="featurewatch">
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
              <h5 class="cate">{{ $features->feature_badge }}</h5>
              <h2 class="title">{{ $features->feature_heading }}</h2>
                <p>
                  {{ $features->feature_subheading }}
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
              <!-- <div class="glow"></div> -->
              <img
                src="{{ asset($features->feature_image) }}"
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
          data-background="{{asset('FrontendAssets/images/bg/amazing-feature-bg.jpg')}}"
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
                <h5 class="cate">{{ $tetherheart->tetherheart_title_badge }}</h5>
                <h2 class="title">
                  {{ $tetherheart->tetherheart_heading }}
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
                        delay="1000"
                        colors="primary:#3b319e,secondary:#0f0033"
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



    <section class="how-section" id="how">
      <!-- Background animation container -->
      <div class="animated-background" id="animatedBg">
        <!-- Hearts and bursts will be created dynamically with JS -->
      </div>

      <div class="container">
        <div class="section-header">
          <h5 class="cate">Discover the Power of Connection</h5>
          <h2 class="title">How Tether Heart Rings Work</h2>
          <p>
            Experience real-time emotional and health syncing with your partner
            in just 3 simple steps.
          </p>
        </div>
        <div class="row" id="justify-set">
          @foreach ($tetherwork as $item)
          <div class="col-lg-4 col-sm-6 col-xl-3">
            <div class="how-item">
              <div class="particles">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
              </div>
              <div class="how-thumb" data-count="{{ $loop->iteration }}">
                <img
                src="{{ asset('storage/' . $item->image) }}"

                  alt="Create Account"
                />
              </div>
              <div class="how-content">
                <a href="" class="button-3">{{ $item->button_text }}</a>
                <div class="download-indicator"></div>
                <ul class="download-options">
                  <li>
                    <a href="{{ $item->windows_link }}"><i class="fab fa-windows"></i></a>
                  </li>
                  <li>
                    <a href="{{ $item->apple_link }}" class="active"><i class="fab fa-apple"></i></a>
                  </li>
                  <li>
                    <a href="{{ $item->android_link }}"><i class="fab fa-android"></i></a>
                  </li>
                </ul>
                <p>
                  {{ $item->text }}
                </p>
              </div>
            </div>
          </div>
    @endforeach
        </div>
      </div>
    </section>


    <section class="moyen-app-section">
      <!-- Digital rings with orbital animations -->
      <div class="moyen-digital-ring moyen-digital-ring-1">
        <div class="moyen-digital-ring-inner"></div>
        <div class="moyen-digital-ring-middle"></div>
        <div class="moyen-digital-ring-center"></div>
        <div class="moyen-orbit-particle moyen-orbit-1"></div>
        <div class="moyen-orbit-particle moyen-orbit-2"></div>
        <div class="moyen-orbit-particle moyen-orbit-3"></div>
      </div>

      <div class="moyen-digital-ring moyen-digital-ring-2">
        <div class="moyen-digital-ring-inner"></div>
        <div class="moyen-digital-ring-middle"></div>
        <div class="moyen-digital-ring-center"></div>
        <div class="moyen-orbit-particle moyen-orbit-1"></div>
        <div class="moyen-orbit-particle moyen-orbit-2"></div>
      </div>

      <!-- Decorative rings -->
      <div class="moyen-ring moyen-ring-1"></div>
      <div class="moyen-ring moyen-ring-2"></div>

      <!-- Animated couple rings -->
      <div class="moyen-couple-rings">
        <div class="moyen-couple-ring-left"></div>
        <div class="moyen-couple-ring-right"></div>
      </div>

      <div class="moyen-container">
        <div class="moyen-flex-container">
          <div class="moyen-col-left">
            <div class="moyen-download-content">
              <img
                class="moyen-logo"
                src="{{asset('FrontendAssets/images/tethar-image/fav icon.png')}}"
                alt="Moyen Logo"
              />

              <div class="moyen-heading-wrapper">
                <h1 class="moyen-title">{{ $download->download_heading }}</h1>
                <h2 class="moyen-subtitle">{{ $download->download_subject }}</h2>
              </div>

              <div class="moyen-download-options">
                <!-- <img
                  class="moyen-qr-code"
                  src="/api/placeholder/150/150"
                  alt="QR Code"
                /> -->
                <div class="th-app-download">
                  <a href="{{ $download->app_store_link }}" class="th-app-btn">
                    <i class="fab fa-apple"></i>
                    <div class="th-app-btn-text">
                      <span>Download on the</span>
                      <span>App Store</span>
                    </div>
                  </a>
                  <a href="{{ $download->play_store_link }}" class="th-app-btn">
                    <i class="fab fa-google-play"></i>
                    <div class="th-app-btn-text">
                      <span>Get it on</span>
                      <span>Google Play</span>
                    </div>
                  </a>
                </div>

                <!-- <div class="moyen-store-buttons">

                  <div class="moyen-store-btn">
                    <div class="moyen-store-icon">
                      <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M17.5646 12.7603C17.594 15.2645 19.7249 16.3541 19.7543 16.3689C19.7358 16.4282 19.429 17.3742 18.7555 18.3499C18.1859 19.1781 17.5868 20.0023 16.6455 20.0172C15.7227 20.0321 15.4067 19.4576 14.346 19.4576C13.2868 19.4576 12.9399 20.0023 12.0756 20.0321C11.1678 20.0618 10.4737 19.1336 9.8968 18.3054C8.7239 16.6207 7.8147 13.5719 9.0199 11.5222C9.6172 10.4993 10.6857 9.85632 11.8418 9.84142C12.7267 9.82653 13.5616 10.4624 14.1018 10.4624C14.642 10.4624 15.675 9.68524 16.756 9.81164C17.0906 9.82653 18.2319 9.94304 18.9582 10.9631C18.8899 11.006 17.5414 11.7684 17.5646 12.7603ZM15.7403 8.33071C16.2148 7.744 16.53 6.9158 16.4171 6.08761C15.7079 6.11736 14.8245 6.5553 14.3354 7.1272C13.9035 7.63189 13.5175 8.4896 13.6449 9.29318C14.4316 9.35267 15.2643 8.91706 15.7403 8.33071Z"
                          fill="#000"
                        />
                      </svg>
                    </div>
                    <div class="moyen-store-text">
                      <span class="moyen-store-small">Download on the</span>
                      <span class="moyen-store-large">App Store</span>
                    </div>
                  </div>


                  <div class="moyen-store-btn">
                    <div class="moyen-store-icon">
                      <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M4.17746 21.9217C4.23166 21.9948 4.30048 22.0561 4.38057 22.1022C4.46066 22.1483 4.54997 22.1783 4.64246 22.1907C4.73496 22.2032 4.82926 22.1979 4.91982 22.1751C5.01038 22.1524 5.09521 22.1127 5.16946 22.0582L13.1695 17.2797L5.79346 12.6662L4.17746 21.9217Z"
                          fill="#EA4335"
                        />
                        <path
                          d="M17.4735 14.0087L21.7485 11.5087C22.125 11.2877 22.3125 10.9642 22.3125 10.6142C22.3125 10.2642 22.125 9.94072 21.7485 9.71972L17.475 7.21972L13.1695 9.94822L17.4735 14.0087Z"
                          fill="#FBBC04"
                        />
                        <path
                          d="M4.17746 1.30573C4.17446 1.37773 4.17896 1.44973 4.18946 1.52098C4.20146 1.60023 4.22046 1.67873 4.24496 1.75348L5.86046 11.0085L13.1695 6.41748L5.16946 1.63948C5.09521 1.58498 5.01038 1.54521 4.91982 1.52248C4.82926 1.49974 4.73496 1.49448 4.64246 1.50691C4.54997 1.51935 4.46066 1.54938 4.38057 1.59548C4.30048 1.64157 4.23166 1.70284 4.17746 1.77598V1.30573Z"
                          fill="#4285F4"
                        />
                        <path
                          d="M13.1695 6.41699L19.1985 10.0005L13.1695 13.582V6.41699Z"
                          fill="#34A853"
                        />
                      </svg>
                    </div>
                    <div class="moyen-store-text">
                      <span class="moyen-store-small">GET IT ON</span>
                      <span class="moyen-store-large">Google Play</span>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>

          <div class="moyen-col-right">
            <div class="moyen-mockups-wrapper">
              <img
                class="moyen-mockup moyen-mockup-1"
                src="{{ asset($download->download_image_1) }}"
                alt="App Screenshot 1"
              />
              <img
                class="moyen-mockup moyen-mockup-2"
                src="{{ asset($download->download_image_2) }}"
                alt="App Screenshot 2"
              />
              <img
                class="moyen-mockup moyen-mockup-3"
                src="{{ asset($download->download_image_3) }}"
                alt="App Screenshot 3"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--============= Feature Section Starts Here =============-->
    <section class="feature-section padding-top padding-bottom oh pos-rel" id="background-texture-new">
      <div class="feature-shapes d-none d-lg-block">
        <img src="{{asset('FrontendAssets/images/feature/feature-shape.png')}}" alt="feature" />
      </div>
      <div class="container">
        <div class="section-header mw-725">
          <h5 class="cate">{{ $productivity->productivity_tab_title }}</h5>
          <h2 class="title">{{ $productivity->productivity_heading }}</h2>
          <p>
            {{ $productivity->productivity_subheading }}
          </p>
        </div>
        <div class="row">
          <div class="col-lg-5 rtl">
            <div class="feature--thumb pr-xl-4 ltr">
              <div
                class="feat-slider owl-carousel owl-theme"
                data-slider-id="1"
              >
                <div class="main-thumb">
                  <img
                    src="{{ asset($productivity->productivity_image) }}"
                    alt="feature"
                  />
                </div>
                <div class="main-thumb">
                  <img
                    src="{{asset('FrontendAssets/images/tethar-image/pro-main-2.png')}}"
                    alt="feature"
                  />
                </div>
                <div class="main-thumb">
                  <img
                    src="{{asset('FrontendAssets/images/tethar-image/pro-main-4.png')}}"
                    alt="feature"
                  />
                </div>
                <div class="main-thumb">
                  <img
                    src="{{asset('FrontendAssets/images/tethar-image/pro-main-1.png')}}"
                    alt="feature"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div
              class="feature-wrapper mb-30-none owl-thumbs"
              data-slider-id="1"
            >
              <div class="feature-item">
                <div class="feature-thumb">
                  <div class="thumb">
                    <img src="{{asset('FrontendAssets/images/feature/pro1.png')}}" alt="feature" />
                  </div>
                </div>
                <div class="feature-content">
                  <h4 class="title">{{ $productivity->productivity_k_heading_1 }}</h4>
                  <p>
                    {{ $productivity->productivity_k_description_1 }}
                  </p>
                </div>
              </div>
              <div class="feature-item">
                <div class="feature-thumb">
                  <div class="thumb">
                    <img src="{{asset('FrontendAssets/images/feature/pro2.png')}}" alt="feature" />
                  </div>
                </div>
                <div class="feature-content">
                  <h4 class="title">{{ $productivity->productivity_k_heading_2 }}</h4>
                  <p>
                    {{ $productivity->productivity_k_description_2 }}
                  </p>
                </div>
              </div>
              <div class="feature-item">
                <div class="feature-thumb">
                  <div class="thumb">
                    <img src="{{asset('FrontendAssets/images/feature/pro3.png')}}" alt="feature" />
                  </div>
                </div>
                <div class="feature-content">
                  <h4 class="title">{{ $productivity->productivity_k_heading_3 }}</h4>
                  <p>
                    {{ $productivity->productivity_k_description_3 }}
                  </p>
                </div>
              </div>
              <div class="feature-item">
                <div class="feature-thumb">
                  <div class="thumb">
                    <img src="{{asset('FrontendAssets/images/feature/pro4.png')}}" alt="feature" />
                  </div>
                </div>
                <div class="feature-content">
                  <h4 class="title">{{ $productivity->productivity_k_heading_4 }}</h4>
                  <p>
                    {{ $productivity->productivity_k_description_4 }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="hero-section-romantic">
      <!-- Added Background Rings -->
      <div class="background-rings-containerromantic">
        <div class="bg-ring bg-ring-1" style="top: 15%; left: 20%"></div>
        <div class="bg-ring bg-ring-2" style="top: 65%; left: 10%"></div>
        <div class="bg-ring bg-ring-3" style="top: 40%; left: 60%"></div>
        <div class="bg-ring bg-ring-4" style="top: 30%; left: 35%"></div>
        <div class="bg-ring bg-ring-5" style="top: 75%; left: 80%"></div>
        <div class="bg-ring bg-ring-6" style="top: 10%; left: 70%"></div>
        <div class="bg-ring bg-ring-gold-1" style="top: 20%; left: 50%"></div>
        <div class="bg-ring bg-ring-gold-2" style="top: 50%; left: 25%"></div>
      </div>

      <!-- Added Interlinked Rings Animation -->
      <div class="dual-ring-container">
        <div class="interlinked-rings">
          <div class="ring-outer"></div>
          <div class="ring-inner"></div>
        </div>
      </div>

      <!-- Diamond Sparkles -->
      <div id="sparkles-container"></div>

      <div class="heartromantic-pulseromantic">
        <div class="heartromantic animate-pulseromantic"></div>
      </div>

      <div class="tech-particles" id="tech-particles"></div>

      <!-- <div class="rings-containerromantic">
        <div class="ring ring-1"></div>
        <div class="ring ring-2"></div>
      </div> -->

      <div class="container hero-containerromantic">
        <div class="hero-contentromantic">
          <div class="image-cardromantic left-imageromantic"></div>

          <div class="text-contentromantic">
            <div class="leaf-iconromantic">
              <!-- <lord-icon
                src="https://cdn.lordicon.com/dqhmanhc.json"
                trigger="loop"
                delay="1000"
                colors="primary:#f24c00,secondary:#ebe6ef,tertiary:#f24c00,quaternary:#f24c00,quinary:#f24c00"
                style="width: 40px; height: 40px"
              >
              </lord-icon> -->
              <img
                src="./assets/images/tethar-image/dil dil pakistan.png')}}"
                alt=""
              />
            </div>
            <div class="taglineromantic">{{ $heartring->heart_ring_tab_title }}</div>
            <h1 class="main-headingromantic">
              {{ $heartring->heart_ring_heading }}
            </h1>
            <p class="descriptionromantic">
              {!! $heartring->heart_ring_description !!}
            </p>
            <button class="cta-buttonromantic mt-3">{{ $heartring->heart_ring_button }}</button>
          </div>

          <div class="image-cardromantic right-imageromantic"></div>
        </div>
      </div>
    </section>

    <section class="newslettersectionSpace animateelementSpace" id="newsparticalletter">
      <!-- Decorative circles -->
      <div class="circledecorationSpace circle1Space"></div>
      <div class="circledecorationSpace circle2Space"></div>

      <!-- Floating decorative elements -->
      <div
        class="floating-element delay-1 animateelementSpace"
        style="position: absolute; top: 15%; right: 10%"
      >
        <i
          class="fas fa-envelope-open-text fa-3x"
          style="color: rgba(255, 255, 255, 0.2)"
        ></i>
      </div>
      <div
        class="floating-element delay-2 animateelementSpace"
        style="position: absolute; bottom: 20%; left: 8%"
      >
        <i
          class="fas fa-paper-plane fa-2x"
          style="color: rgba(255, 255, 255, 0.2)"
        ></i>
      </div>
      <div
        class="floating-element delay-3 animateelementSpace"
        style="position: absolute; top: 30%; left: 15%"
      >
        <i
          class="fas fa-bell fa-2x"
          style="color: rgba(255, 255, 255, 0.2)"
        ></i>
      </div>

      <div class="container containerSpace">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="newsletter-content animateelementSpace fade-in-up">
              <h5
                class="sectionsubtitleSpace animateelementSpace slide-left delay-1"
              >
                {{$contactSection->contact_sections_tab_title}}
              </h5>
              <h2
                class="section-titleSpace animateelementSpace slide-left delay-2"
              >
                {{$contactSection->contact_sections_heading}}
              </h2>
              <p
                class="sectiondescriptionSpace animateelementSpace slide-left delay-3"
              >
                {!! $contactSection->contact_sections_description !!}
              </p>

              <div class="benefitslistSpace">
                <div
                  class="benefititemSpace animateelementSpace slide-left delay-4"
                >
                  <div class="benefiticonSpace">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="benefit-text">
                {{$contactSection->contact_sections_point1}}
                  </div>
                </div>
                <div
                  class="benefititemSpace animateelementSpace slide-left delay-5"
                >
                  <div class="benefiticonSpace">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="benefit-text">
                {{$contactSection->contact_sections_point2}}
                  </div>
                </div>
                <div
                  class="benefititemSpace animateelementSpace slide-left delay-6"
                >
                  <div class="benefiticonSpace">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="benefit-text">
                {{$contactSection->contact_sections_point3}}
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="contactboxSpace animateelementSpace zoom-in delay-4">
              <!-- <div class="title-area animateelementSpace pop-in delay-5">
                <h3>Contact Us</h3>
              </div> -->

              <form class="contactformSpace" id="contact-form" method="POST" action="{{ route('contact.store') }}">
                      @csrf
                <div class="mb-3 animateelementSpace slide-right delay-6">
                  <input
                    type="text"
                    class="form-control"
                     name="full_name"
                      value="{{ old('full_name') }}"
                    placeholder="Your Name"
                    required
                  />
                   @error('full_name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 animateelementSpace slide-right delay-7">
                  <input
                    type="email"
                    class="form-control"
                      name="email"
                    value="{{ old('email') }}"
                    placeholder="Your Email Address"
                    required
                  />
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 animateelementSpace slide-right delay-8">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Subject"
                      name="subject"
                    value="{{ old('subject') }}"
                    required
                  />
    @error('subject')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-4 animateelementSpace slide-right delay-9">
                  <textarea
                    class="form-control"
                    rows="4"
                    placeholder="Your Message"
                    required
                      name="message"
                  >{{ old('message') }}</textarea>
                  @error('message')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="d-grid animateelementSpace slide-right delay-10">
                  <button type="submit" class="pulsebuttonSpace">
                    <span class="btn-text">SEND MESSAGE</span> <i class="fas fa-paper-plane ms-2"></i>
                    <span class="btn-loader" style="display:none;margin-left:8px;"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></span>
                  </button>
                </div>
              </form>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const form = e.target;
    const submitBtn = form.querySelector('button[type="submit"]');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoader = submitBtn.querySelector('.btn-loader');
    btnText.style.display = 'none';
    btnLoader.style.display = 'inline-block';
    submitBtn.disabled = true;

    const formData = new FormData(form);
    fetch(form.action, {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        },
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        btnText.style.display = '';
        btnLoader.style.display = 'none';
        submitBtn.disabled = false;
        if (data.success || data.status === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Message Sent!',
                text: data.message || 'Thank you for your message! We will get back to you soon.',
                confirmButtonColor: '#6C63FF'
            });
            form.reset();
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.message || 'Something went wrong. Please try again.',
                confirmButtonColor: '#6C63FF'
            });
        }
    })
    .catch(error => {
        btnText.style.display = '';
        btnLoader.style.display = 'none';
        submitBtn.disabled = false;
        console.error(error);
        Swal.fire('Error', 'Server error occurred', 'error');
    });
});
</script>

              <div class="socialiconSpaces">
                <a
                  href="{{$contactSection->contact_sections_social1}}"
                  class="socialiconSpace animateelementSpace pop-in delay-4"
                >
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a
                  href="{{$contactSection->contact_sections_social2}}"
                  class="socialiconSpace animateelementSpace pop-in delay-5"
                >
                  <i class="fab fa-twitter"></i>
                </a>
                <a
                  href="{{$contactSection->contact_sections_social3}}"
                  class="socialiconSpace animateelementSpace pop-in delay-6"
                >
                  <i class="fab fa-instagram"></i>
                </a>
                <a
                  href="{{$contactSection->contact_sections_social4}}"
                  class="socialiconSpace animateelementSpace pop-in delay-7"
                >
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Particle background -->
      <div class="particles-js" id="particles-js"></div>
    </section>




    <!--============= Feature Section Ends Here =============-->

    <section class="container containerheee profile-margin22">
      <div class="animated-backgroundtheee">
        <!-- floattheeeingtheee bubbletheees -->

        <div
          class="bubbletheee"
          style="
            width: 150px;
            height: 150px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
          "
        ></div>
        <div
          class="bubbletheee"
          style="
            width: 100px;
            height: 100px;
            top: 50%;
            left: 85%;
            animation-delay: 4s;
          "
        ></div>
        <div
          class="bubbletheee"
          style="
            width: 200px;
            height: 200px;
            top: 80%;
            left: 25%;
            animation-delay: 2s;
          "
        ></div>
        <div
          class="bubbletheee"
          style="
            width: 120px;
            height: 120px;
            top: 20%;
            left: 70%;
            animation-delay: 6s;
          "
        ></div>
        <div
          class="bubbletheee"
          style="
            width: 180px;
            height: 180px;
            top: 65%;
            left: 50%;
            animation-delay: 1s;
          "
        ></div>

        <!-- floattheeeingtheee particletheees -->
        <div
          class="particletheee"
          style="top: 20%; left: 10%; animation-delay: 0s"
        ></div>
        <div
          class="particletheee"
          style="top: 30%; left: 20%; animation-delay: 3s"
        ></div>
        <div
          class="particletheee"
          style="top: 50%; left: 30%; animation-delay: 6s"
        ></div>
        <div
          class="particletheee"
          style="top: 70%; left: 40%; animation-delay: 9s"
        ></div>
        <div
          class="particletheee"
          style="top: 80%; left: 60%; animation-delay: 12s"
        ></div>
        <div
          class="particletheee"
          style="top: 40%; left: 70%; animation-delay: 15s"
        ></div>
        <div
          class="particletheee"
          style="top: 60%; left: 80%; animation-delay: 18s"
        ></div>
        <div
          class="particletheee"
          style="top: 90%; left: 90%; animation-delay: 21s"
        ></div>

        <!-- Animated wavetheees -->
        <div
          class="wavetheee"
          style="
            bottom: 10%;
            height: 200px;
            opacity: 0.1;
            animation-duration: 20s;
          "
        ></div>
        <div
          class="wavetheee"
          style="
            bottom: 15%;
            height: 150px;
            opacity: 0.08;
            animation-duration: 15s;
            animation-delay: 2s;
          "
        ></div>
        <div
          class="wavetheee"
          style="
            bottom: 20%;
            height: 100px;
            opacity: 0.05;
            animation-duration: 25s;
            animation-delay: 5s;
          "
        ></div>

        <!-- Heart pulsetheee animations -->
        <div
          class="heart-pulsetheeeheee"
          style="top: 30%; left: 15%; animation-delay: 1s"
        ></div>
        <div
          class="heart-pulsetheeeheee"
          style="top: 60%; left: 75%; animation-delay: 0s"
        ></div>
        <div
          class="heart-pulsetheeeheee"
          style="top: 75%; left: 30%; animation-delay: 1.5s"
        ></div>
      </div>
      <h2 class="section-titleheee">
        {{ $connection->connection_heading }}
      </h2>
      <div class="parentheee">
        <!-- Shop Rings -->
        <div class="help-boxtheee help-sectiontheee glowtheee slide-uptheee">
          <div class="help-firsttheee">
            <div class="healping-paratheee">
              <h3>{{ $connection->connection_card_1_h }}</h3>
              <p>{{ $connection->connection_card_1_p }}</p>
            </div>
            <div>
              <img
                src="{{asset('FrontendAssets/images/tethar-image/tethar-heart02-removebg-preview.png')}}"
                alt="Browse Smart Rings"
                class="help-image01theee floattheeeingtheee"
              />
            </div>
          </div>
        </div>

        <!-- Special Offers -->
        <div
          class="help-boxtheee help-sectiontheee2 glowtheee bounce-intheee"
          style="animation-delay: 0.2s"
        >
          <div class="inner-help-sectheee">
            <div class="healping-paratheee">
            <h3>{{ $connection->connection_card_2_h }}</h3>
            <p>{{ $connection->connection_card_2_p }}</p>
            </div>
            <div class="second-image-help">
              <img
                src="{{asset('FrontendAssets/images/tethar-image/tethar-heart04-removebg-preview.png')}}"
                alt="Special Offers"
                class="help-image02theee pulsetheee"
              />
            </div>
          </div>
        </div>

        <!-- Core Connection Feature -->
        <div
          class="help-boxtheee help-sectiontheee3 glowtheee fade-intheee"
          style="animation-delay: 0.4s"
        >
          <div class="inner-help-sectheee">
            <div class="text-contenttheee">
              <div class="set-contant">
                <h2>{{ $connection->connection_main_card_h }}</h2>
                <ul>
                  <li>{{ $connection->connection_main_card_p1 }}</li>
                  <!-- <li>Send gentle touches with a tap on your ring</li> -->
                  <li>{{ $connection->connection_main_card_p2 }}</li>
                </ul>
              </div>
              <div class="buttons-bottom-sectheee">
                <a href="#">
                  <button class="view-questionstheee">Explore Features</button>
                </a>
                <button class="ask-questiontheee">Start Connecting</button>
              </div>
            </div>
            <div class="bottom-avatar">
              <img
                src="{{asset('FrontendAssets/images/tethar-image/tethar-heart01-removebg-preview.png')}}"
                alt="Connected Couple"
                class="help-image04theee"
              />
            </div>
          </div>
        </div>

        <!-- Health & Wellness -->
        <div
          class="help-boxtheee help-sectiontheee4 glowtheee slide-uptheee"
          style="animation-delay: 0.6s"
        >
          <div class="inner-help-sectheee">
            <div class="healping-paratheee">
            <h3>{{ $connection->connection_card_3_h }}</h3>
            <p>{{ $connection->connection_card_3_p }}</p>
            </div>
            <div class="third-image-help">
              <img
                src="{{asset('FrontendAssets/images/tethar-image/tethar-heart03-removebg-preview.png')}}"
                alt="Wellness Tracking"
                class="help-image02theee floattheeeingtheee"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="giftExperience-container">
      <!-- Main Gift Banner Section -->
      <section class="giftBanner-masterSection">
        <!-- Animated Background Particles -->
        <div class="giftBanner-particles">
          <div class="giftParticle-1"></div>
          <div class="giftParticle-2"></div>
          <div class="giftParticle-3"></div>
          <div class="giftParticle-4"></div>
          <div class="giftParticle-5"></div>
          <div class="giftParticle-6"></div>
        </div>

        <!-- Background Image with Overlay -->
        <div class="giftBanner-backgroundImage"></div>
        <!-- <div class="giftBanner-gradientOverlay"></div>-->

        <!-- Main Content -->
        <div class="container giftBanner-contentWrapper">
          <!-- Floating Gift Icons -->
          <div class="giftBanner-floatingIcons">
            <div class="giftIcon-container giftIcon-1">
              <div class="th-logo">
                <a href="#0" contenteditable="false" style="cursor: pointer">
                  <img
                    src="{{asset('FrontendAssets/images/tethar-image/tether gif.gif')}}"
                    alt="Tether Heart Logo"
                  />
                </a>
              </div>
            </div>
          </div>

          <!-- Main Title Section -->
          <div class="giftBanner-titleSection">
            <p class="giftBanner-subtitle">
              {{ $blend->blend_tab_title }}
            </p>
            <h1 class="giftBanner-mainTitle">
              <span class="giftTitle-word giftTitle-word1">Send</span>
              <span class="giftTitle-word giftTitle-word2">tether</span>
              <span class="giftTitle-word giftTitle-word3">heart</span>
              <span class="giftTitle-word giftTitle-word1">Send to</span>
              <span class="giftTitle-word giftTitle-word2">your love</span>
              <span class="giftTitle-word giftTitle-word3">ones</span>
            </h1>
          </div>

          <div class="giftBanner-floatingIcons">
            <div class="giftIcon-container giftIcon-1">
              <i class="fas fa-gift"></i>
            </div>
            <div class="giftIcon-container giftIcon-2">
              <i class="fas fa-heart"></i>
            </div>
            <div class="giftIcon-container giftIcon-3">
              <i class="fas fa-star"></i>
            </div>
            <div class="giftIcon-container giftIcon-4">
              <i class="fas fa-magic"></i>
            </div>
          </div>

          <!-- Call to Action Button -->
          <div class="giftBanner-ctaSection">
            <!-- <button class="giftBanner-sendButton" id="giftSendButton">
              <span class="giftButton-iconWrapper">
                <i class="fas fa-gift"></i>
              </span>
              <span class="giftButton-text">Send Perfect Gift</span>
              <div class="giftButton-ripple"></div>
            </button> -->
            <button class="cta-buttonromantic" id="giftSendButton">
            {{ $blend->blend_button_title }}
            </button>
          </div>

          <!-- Decorative Elements -->
          <div class="giftBanner-decorativeElements">
            <div class="giftDecor-circle giftDecor-1"></div>
            <div class="giftDecor-circle giftDecor-2"></div>
            <div class="giftDecor-circle giftDecor-3"></div>
          </div>
        </div>

        <div class="container giftBanner-contentWrappernew">
          <img
            src="{{ asset($blend->blend_image) }}"
            alt="Tether Heart Logo"
          />
        </div>
      </section>


    </div>

    <section class="fitness-relationships-wrapper">
      <!-- Animated Background Particles -->
      <div class="fitness-relationships-particles" id="particles"></div>

      <!-- Geometric Background Shapes -->
      <div class="fitness-relationships-bg-shapes">
        <div
          class="fitness-relationships-shape fitness-relationships-shape-1"
        ></div>
        <div
          class="fitness-relationships-shape fitness-relationships-shape-2"
        ></div>
        <div
          class="fitness-relationships-shape fitness-relationships-shape-3"
        ></div>
      </div>

      <!-- Floating Elements -->
      <div class="fitness-relationships-floating-elements">
        <i class="fas fa-heart fitness-relationships-floating-heart"></i>
        <i class="fas fa-heart fitness-relationships-floating-heart"></i>
        <i class="fas fa-heart fitness-relationships-floating-heart"></i>
      </div>

      <div class="fitness-relationships-container">
        <header
          class="fitness-relationships-header fitness-relationships-scroll-trigger"
        >
          <div class="fitness-relationships-badge">
            <i class="fas fa-heart"></i> {{ $wellness->wellness_tab_title }}
          </div>
          <h1 class="fitness-relationships-main-title">
            {{ $wellness->wellness_heading }}
          </h1>
          <p class="fitness-relationships-subtitle">
            {{ $wellness->wellness_subheading }}
          </p>
        </header>

        <div
          class="fitness-relationships-intro fitness-relationships-scroll-trigger"
        >
          <div class="fitness-relationships-intro-icon">
            <i
              class="fas fa-infinity"
              style="color: white; font-size: 2.5rem"
            ></i>
          </div>
          <p class="fitness-relationships-intro-text">
            {!! $wellness->wellness_card_text !!}
          </p>
        </div>

        <div class="fitness-relationships-grid">

        @foreach ($wellness_cards as $item)

          <div
            class="fitness-relationships-card fitness-relationships-scroll-trigger"
          >
            <div class="fitness-relationships-card-header">
              <div class="fitness-relationships-card-number">{{ $loop->iteration }}</div>
              <div class="fitness-relationships-card-icon">
                <i class="{{ $item->icon }}"></i>
              </div>
            </div>
            <h3 class="fitness-relationships-card-title">
              {{ $item->title }}
            </h3>
            <p class="fitness-relationships-card-description">
              {!! $item->description !!}

            </p>
          </div>
        @endforeach


        </div>

        <div
          class="fitness-relationships-highlight fitness-relationships-scroll-trigger"
        >
          <div class="fitness-relationships-highlight-content">
            <h3>
              <i class="fas fa-heart" style="margin-right: 15px"></i>{{ $tethercard->tether_card_heading }}
            </h3>
            <p>
              {{ $tethercard->tether_card_subheading }}
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="newslater-section oh bg_img pos-rel" data-background="{{asset('FrontendAssets/images/bg/newslater2.jpg')}}">
      <!-- Animated particlenewesoletters -->
      <div class="particlenewesoletters"></div>

      <!-- Top and bottom shapes -->
      <div class="top-shape d-none d-lg-block">
        <img src="{{asset('FrontendAssets/css/img/top-shape2.png')}}" alt="css" />
      </div>
      <div class="bottom-shape d-none d-lg-block">
        <img src="{{asset('FrontendAssets/css/img/bottom-shape2.png')}}" alt="css" />
      </div>
      <div class="container" style="z-index:999;">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="newslater-area padding-bottom padding-top">
              <div class="section-header left-style cl-white">
                <h5 class="cate">{{$newfeature->new_feature_title_badge}}</h5>
                <h2 class="title">{{$newfeature->new_feature_heading}}</h2>
                <p>
                {{$newfeature->new_feature_subheading}}
                </p>
              </div>
             <form class="subscribe-form" id="newsletterForm" action="{{ route('newsletter.subscribe') }}" method="POST">
  @csrf
  <input type="email" name="email" id="newsletterEmail" placeholder="Enter Your Email" required />
  <button type="submit" id="newsletterSubmitBtn">
    <span class="btn-text">Subscribe</span>
    <span class="btn-loader" style="display:none;margin-left:8px;"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></span>
  </button>
</form>
            </div>
          </div>
          <div class="col-lg-6 d-none d-lg-block">
            <div class="subscribe-thumb-2">
              <img
                src="{{asset('FrontendAssets/images/newslater/newslater2.png')}}"
                alt="newslater"
              />
            </div>
          </div>
        </div>
      </div>
    </section>



    <!--============= Pricing Section Ends Here =============-->

  <!--<section class="pricing-section" id="pricing">
      <div class="top-shape d-none d-md-block">
        <img src="{{asset('FrontendAssets/css/img/top-shape.png')}}" alt="css" />
      </div>
      <div class="bottom-shape d-none d-md-block">
        <img src="{{asset('FrontendAssets/css/img/bottom-shape.png')}}" alt="css" />
      <script>
      document.getElementById('newsletterForm').addEventListener('submit', function(e) {
          e.preventDefault();
          const form = e.target;
          const submitBtn = form.querySelector('button[type="submit"]');
          const btnText = submitBtn.querySelector('.btn-text');
          const btnLoader = submitBtn.querySelector('.btn-loader');
          btnText.style.display = 'none';
          btnLoader.style.display = 'inline-block';
          submitBtn.disabled = true;

          const email = document.getElementById('newsletterEmail').value;
          fetch(form.action, {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json',
                  'Accept': 'application/json',
                  'X-Requested-With': 'XMLHttpRequest',
                  'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
              },
              body: JSON.stringify({ email })
          })
          .then(res => res.json())
          .then(data => {
              btnText.style.display = '';
              btnLoader.style.display = 'none';
              submitBtn.disabled = false;
              if (data.status === 'success' || data.success) {
                  Swal.fire({
                      icon: 'success',
                      title: 'Subscribed!',
                      text: data.message || 'You have been subscribed to our newsletter.',
                      confirmButtonColor: '#6C63FF'
                  });
                  form.reset();
              } else {
                  Swal.fire({
                      icon: 'error',
                      title: 'Error',
                      text: data.message || 'Subscription failed. Please try again.',
                      confirmButtonColor: '#6C63FF'
                  });
              }
          })
          .catch(error => {
              btnText.style.display = '';
              btnLoader.style.display = 'none';
              submitBtn.disabled = false;
              console.error(error);
              Swal.fire('Error', 'Server error occurred', 'error');
          });
      });
      </script>
      </div>
      <div
        class="ball-2"
        data-paroller-factor="-0.30"
        data-paroller-factor-lg="0.60"
        data-paroller-type="foreground"
        data-paroller-direction="horizontal"
      >
        <img src="{{asset('FrontendAssets/images/balls/1.png')}}" alt="balls" />
      </div>
      <div
        class="ball-3"
        data-paroller-factor="0.30"
        data-paroller-factor-lg="-0.30"
        data-paroller-type="foreground"
        data-paroller-direction="horizontal"
      >
        <img src="{{asset('FrontendAssets/images/balls/2.png')}}" alt="balls" />
      </div>
      <div
        class="ball-4"
        data-paroller-factor="0.30"
        data-paroller-factor-lg="-0.30"
        data-paroller-type="foreground"
        data-paroller-direction="horizontal"
      >
        <img src="{{asset('FrontendAssets/images/balls/3.png')}}" alt="balls" />
      </div>
      <div
        class="ball-5"
        data-paroller-factor="0.30"
        data-paroller-factor-lg="-0.30"
        data-paroller-type="foreground"
        data-paroller-direction="vertical"
      >
        <img src="{{asset('FrontendAssets/images/balls/4.png')}}" alt="balls" />
      </div>
      <div
        class="ball-6"
        data-paroller-factor="-0.30"
        data-paroller-factor-lg="0.60"
        data-paroller-type="foreground"
        data-paroller-direction="horizontal"
      >
        <img src="{{asset('FrontendAssets/images/balls/5.png')}}" alt="balls" />
      </div>
      <div
        class="ball-7"
        data-paroller-factor="-0.30"
        data-paroller-factor-lg="0.60"
        data-paroller-type="foreground"
        data-paroller-direction="vertical"
      >
        <img src="{{asset('FrontendAssets/images/balls/6.png')}}" alt="balls" />
      </div>
      
      <div class="particlespricing" id="particlespricing"></div>
      <div class="shapepricing shapepricing-1"></div>
      <div class="shapepricing shapepricing-2"></div>
      <div class="shapepricing shapepricing-3"></div>
      <div class="shapepricing shapepricing-4"></div>
      <div class="shapepricing shapepricing-5"></div>

      <div class="container containerpricing">
        <div class="section-headerpricing" data-aos="fade-up">
          <span class="catepricing"
            >Find the Perfect Ring for Your Connection</span
          >
          <h2 class="titlepricing">
            Smart Couple Rings – Simple, Stylish, Powerful
          </h2>
          <p>
            Tethar Heart brings beautifully crafted smart rings that help
            couples stay emotionally and physically connected. Choose a ring
            plan that suits your love story.
          </p>
        </div>

      <section class="prisectionnew" >
          <div id="particlespricing"></div>
          <div class="pricingrangepricing">
          


          <div class="pricingrangepricing-top">
              <div class="tags-area" data-aos="fade-up" data-aos-delay="300">
                  <h3 class="tags">Choose Your Ring</h3>
              </div>

              <div class="pricing-header" data-aos="fade-up" data-aos-delay="400">
                  <span class="catepricing">Available Ring Packages</span>
                  <div class="select-containerpricing">
                      <select class="select-bar" id="planselectornew">
                          <option value="basic">Package 01</option>
                          <option value="standard">Package 02</option>
                          <option value="premium">Package 03</option>
                          <option value="pro">Package 04</option>
                          <option value="pronew">Package 05</option>
                      </select>
                  </div>
              </div>

              <div class="amount-area" data-aos="fade-up" data-aos-delay="500">
                  <div class="item active" id="monthly">
                      <h2 class="titlepricing">
                          <sup>$</sup><span id="monthlypricenew">15.00</span>
                      </h2>
                      <span class="info" id="monthlyringinfonew">Per Ring</span>
                  </div>
                  <div class="item" id="yearly">
                      <h2 class="titlepricing">
                          <sup>$</sup><span id="yearlypricenew">179.00</span>
                      </h2>
                      <span class="info" id="yearlyringinfonew">12 Rings</span>
                  </div>
              </div>
          </div>

          <div class="pricingrangepricing-bottom" data-aos="fade-up" data-aos-delay="700">
              <div class="left">
                  <span class="catepricing">Happy Couples Connected</span>
                  <h2 class="titlepricing" id="counter">0</h2>
              </div>
              <div class="right">
                  <a href="#0" class="custom-button" id="downloadbtnnew">
                      <i class="fas fa-shopping-cart"></i>
                      Shop Now
                  </a>
                  <ul class="download-options" id="downloadoptionslist">
                      <li>
                          <a href="#0" class="active" id="windowsdownloadlink">
                              <i class="fab fa-windows"></i>
                          </a>
                      </li>
                      <li>
                          <a href="#0" id="appledownloadlink">
                              <i class="fab fa-apple"></i>
                          </a>
                      </li>
                      <li>
                          <a href="#0" id="androiddownloadlink">
                              <i class="fab fa-android"></i>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
          </div>
      </section>
      </div>
    </section> -->

      @include('partials.frontend._ringpackages')


    <section class="appsdownloadsectionmob">
      <div
        class="floatingelementsdownloadsec"
        id="floatingelementsdownloadsec"
      ></div>
      <div class="containerdownalodappsec">
        <div class="sectionheaderDownloadappsec">
          <h5 class="cateDownloadappsec">
           {{$relation->relationship_tab_title}}
          </h5>
          <h2 class="titleDownloadappsec">
          {{$relation->relationship_heading}}
          </h2>
          <p>
          {{$relation->relationship_subheading}}
          </p>
        </div>

        <div class="apps-download-buttons-20">
          <h6 class="titleDownloadappsec">Ready to get started?</h6>
          <ul class="downloadoptionslidownload-app">
            <li class="glowbuttonDownloadappsec">
              <a href="{{$relation->relationship_ios_link}}" class="active"><i class="fab fa-apple"></i></a>
              <span>iOS</span>
            </li>
            <li class="glowbuttonDownloadappsec">
              <a href="{{$relation->relationship_android_link}}"><i class="fab fa-android"></i></a>
              <span>Android</span>
            </li>
          </ul>
        </div>

      </div>
    </section>

    <!--============= Coverage Section Starts Here =============-->
    <section class="coverage-section padding-top padding-bottom" id="coverage">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="section-header left-style coverage-header">
              <h5 class="cate">
              {{$border->border_tab_title}}
              </h5>
              <h2 class="title">{{$border->border_heading}}</h2>
              <p>
              {{$border->border_subheading}}
              </p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="coverage-right-area text-lg-end">
              <div class="rating-area">
                <div class="ratings">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <span class="average">5.0 / 5.0</span>
              </div>
              <h2 class="amount">312,921+</h2>
              <a href="#0"
                >Total User Reviews <i class="fas fa-paper-plane"></i
              ></a>
            </div>
          </div>
        </div>
        <div
          class="coverage-wrapper bg_img bg_auto"
          data-background="{{asset('FrontendAssets/images/bg/world-map.png')}}"
        >
          <div class="border-item-1">
            <span class="name">North America</span>
            <h2 class="title">{{$border->border_north_america}}</h2>
          </div>
          <div class="border-item-2">
            <span class="name">Asia</span>
            <h2 class="title">{{$border->border_asia}}</h2>
          </div>
          <div class="border-item-3">
            <span class="name">North Europe</span>
            <h2 class="title">{{$border->border_north_europe}}</h2>
          </div>
          <div class="border-item-4">
            <span class="name">South America</span>
            <h2 class="title">{{$border->border_south_america}}</h2>
          </div>
          <div class="border-item-5">
            <span class="name">Africa</span>
            <h2 class="title">{{$border->border_africa}}</h2>
          </div>
          <div class="border-item-6">
            <span class="name">Australia</span>
            <h2 class="title">{{$border->border_australia}}</h2>
          </div>
        </div>
      </div>
    </section>
    <!--============= Coverage Section Ends Here =============-->



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

    <script>
      // Gift Experience JavaScript
      class GiftExperience {
        constructor() {
          this.modal = document.getElementById('giftModalOverlay');
          this.modaltwo = document.getElementById('giftModalOverlaytwo');
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

          document.querySelectorAll('#giftSendButtontwo').forEach((button) => {
            button.addEventListener('click', () => {
              this.openModaltwo();
            });
          });

          // Close Modal
          document
            .getElementById('giftModalClose')
            .addEventListener('click', () => {
              this.closeModal();
            });

          document
            .getElementById('giftModalClosetwo')
            .addEventListener('click', () => {
              this.closeModaltwo();
            });

          // Close modal when clicking overlay
          this.modal.addEventListener('click', (e) => {
            if (e.target === this.modal) {
              this.closeModal();
            }
          });

          this.modaltwo.addEventListener('click', (e) => {
            if (e.target === this.modaltwo) {
              this.closeModaltwo();
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

        openModaltwo() {
          this.modaltwo.classList.add('giftModal-active');
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

        closeModaltwo() {
          this.modaltwo.classList.remove('giftModal-active');
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
      // Scroll-triggered animations
      const observerOptionswestimagecontent = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px',
      };

      const observerOptionsallnewestimagecontent = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add('fitness-relationships-animate');
            }
          });
        },
        observerOptionswestimagecontent
      );

      // Observe all scroll trigger elements
      document
        .querySelectorAll('.fitness-relationships-scroll-trigger')
        .forEach((el) => {
          observerOptionsallnewestimagecontent.observe(el);
        });

      // Animated particles
      function createParticle() {
        const particle = document.createElement('div');
        particle.className = 'fitness-relationships-particle';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 8 + 's';
        particle.style.animationDuration = Math.random() * 3 + 8 + 's';

        document.getElementById('particles').appendChild(particle);

        setTimeout(() => {
          particle.remove();
        }, 11000);
      }

      // Create particles on scroll
      let particleInterval;
      window.addEventListener('scroll', () => {
        if (!particleInterval) {
          particleInterval = setInterval(createParticle, 300);
          setTimeout(() => {
            clearInterval(particleInterval);
            particleInterval = null;
          }, 3000);
        }
      });

      // Parallax effect for floating elements
      window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll(
          '.fitness-relationships-floating-heart'
        );

        parallaxElements.forEach((element, index) => {
          const speed = 0.5 + index * 0.1;
          element.style.transform = `translateY(${scrolled * speed}px)`;
        });
      });

      // Enhanced card hover effects
      document
        .querySelectorAll('.fitness-relationships-card')
        .forEach((card) => {
          card.addEventListener('mouseenter', () => {
            card.style.transform =
              'translateY(-15px) scale(1.02) rotateX(5deg)';
          });

          card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0) scale(1) rotateX(0deg)';
          });
        });

      // Advanced scroll-based background color transitions
      window.addEventListener('scroll', () => {
        const scrollPercentage =
          window.scrollY /
          (document.documentElement.scrollHeight - window.innerHeight);
        const wrapper = document.querySelector(
          '.fitness-relationships-wrapper'
        );

        // Create dynamic background color based on scroll
        const hue1 = 260 + scrollPercentage * 20; // Purple to magenta range
        const hue2 = 300 + scrollPercentage * 15;
        wrapper.style.background = `linear-gradient(135deg, hsl(${hue1}, 85%, 98%) 0%, hsl(${hue2}, 70%, 96%) 100%)`;
      });

      // Magnetic hover effect for cards
      document
        .querySelectorAll('.fitness-relationships-card')
        .forEach((card) => {
          card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;

            card.style.transform = `translateY(-15px) scale(1.02) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
          });
        });

      // Intersection Observer for staggered animations
      const staggerObserver = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
              setTimeout(() => {
                entry.target.classList.add('fitness-relationships-animate');
              }, index * 100); // Stagger by 100ms
            }
          });
        },
        { threshold: 0.1 }
      );

      // Apply staggered animation to grid cards
      document
        .querySelectorAll(
          '.fitness-relationships-grid .fitness-relationships-card'
        )
        .forEach((card) => {
          staggerObserver.observe(card);
        });

      // Dynamic particle colors based on scroll position
      function createEnhancedParticle() {
        const particle = document.createElement('div');
        particle.className = 'fitness-relationships-particle';

        const scrollPercentage =
          window.scrollY /
          (document.documentElement.scrollHeight - window.innerHeight);
        const hue = 260 + scrollPercentage * 40;

        particle.style.left = Math.random() * 100 + '%';
        particle.style.background = `hsl(${hue}, 80%, 60%)`;
        particle.style.animationDelay = Math.random() * 8 + 's';
        particle.style.animationDuration = Math.random() * 3 + 8 + 's';
        particle.style.boxShadow = `0 0 20px hsl(${hue}, 80%, 60%)`;

        document.getElementById('particles').appendChild(particle);

        setTimeout(() => {
          particle.remove();
        }, 11000);
      }

      // Enhanced scroll-triggered particle creation
      let lastScrollTime = 0;
      window.addEventListener('scroll', () => {
        const now = Date.now();
        if (now - lastScrollTime > 200) {
          // Throttle to every 200ms
          createEnhancedParticle();
          lastScrollTime = now;
        }
      });

      // Smooth reveal animation for elements
      const revealObserver = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.style.opacity = '1';
              entry.target.style.transform = 'translateY(0) scale(1)';
            }
          });
        },
        {
          threshold: 0.1,
          rootMargin: '0px 0px -100px 0px',
        }
      );

      // Apply reveal animation to all major sections
      document
        .querySelectorAll(
          '.fitness-relationships-intro, .fitness-relationships-highlight, .fitness-relationships-cta'
        )
        .forEach((el) => {
          el.style.opacity = '0';
          el.style.transform = 'translateY(50px) scale(0.95)';
          el.style.transition = 'all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
          revealObserver.observe(el);
        });

      // Add glow effect to buttons on scroll
      window.addEventListener('scroll', () => {
        const button = document.querySelector('.fitness-relationships-btn');
        const scrolled = window.scrollY;
        const glowIntensity = Math.min(scrolled / 1000, 1);

        button.style.boxShadow = `0 ${15 + glowIntensity * 25}px ${
          40 + glowIntensity * 40
        }px rgba(45, 7, 126, ${0.3 + glowIntensity * 0.3})`;
      });

      // Create floating number animations
      function createFloatingNumber() {
        const numbers = ['1', '2', '3', '4', '5', '6', '7'];
        const number = document.createElement('div');
        number.textContent =
          numbers[Math.floor(Math.random() * numbers.length)];
        number.style.position = 'absolute';
        number.style.fontSize = '1.5rem';
        number.style.fontWeight = '800';
        number.style.color = 'rgba(133, 30, 139, 0.1)';
        number.style.left = Math.random() * 100 + '%';
        number.style.top = '100%';
        number.style.pointerEvents = 'none';
        number.style.animation = 'float-up 10s linear forwards';
        number.style.zIndex = '1';

        document
          .querySelector('.fitness-relationships-wrapper')
          .appendChild(number);

        setTimeout(() => {
          number.remove();
        }, 10000);
      }

      // Add floating numbers CSS animation
      const style = document.createElement('style');
      style.textContent = `
            @keyframes float-up {
                0% {
                    transform: translateY(0) rotate(0deg);
                    opacity: 0;
                }
                10% {
                    opacity: 1;
                }
                90% {
                    opacity: 1;
                }
                100% {
                    transform: translateY(-100vh) rotate(360deg);
                    opacity: 0;
                }
            }
        `;
      document.head.appendChild(style);

      // Trigger floating numbers on specific scroll positions
      let numberCreated = false;
      window.addEventListener('scroll', () => {
        const scrollPercentage =
          window.scrollY /
          (document.documentElement.scrollHeight - window.innerHeight);

        if (scrollPercentage > 0.3 && !numberCreated) {
          setInterval(createFloatingNumber, 2000);
          numberCreated = true;
        }
      });

      // Enhanced card interaction with sound effect simulation
      document
        .querySelectorAll('.fitness-relationships-card')
        .forEach((card) => {
          card.addEventListener('click', () => {
            // Create ripple effect
            const ripple = document.createElement('div');
            ripple.style.position = 'absolute';
            ripple.style.borderRadius = '50%';
            ripple.style.background = 'rgba(133, 30, 139, 0.3)';
            ripple.style.width = '20px';
            ripple.style.height = '20px';
            ripple.style.left = '50%';
            ripple.style.top = '50%';
            ripple.style.transform = 'translate(-50%, -50%) scale(0)';
            ripple.style.animation = 'ripple-effect 0.6s linear';
            ripple.style.pointerEvents = 'none';

            card.appendChild(ripple);

            setTimeout(() => {
              ripple.remove();
            }, 600);
          });
        });

      // Add ripple effect CSS
      const rippleStyle = document.createElement('style');
      rippleStyle.textContent = `
            @keyframes ripple-effect {
                to {
                    transform: translate(-50%, -50%) scale(20);
                    opacity: 0;
                }
            }
        `;
      document.head.appendChild(rippleStyle);
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

    <script>
      class ElegantNewsBar {
        constructor() {
          this.container = document.getElementById('elegnews-main');
          this.ticker = document.getElementById('elegnews-ticker');
          this.pauseBtn = document.getElementById('elegnews-pause-btn');
          this.speedBtn = document.getElementById('elegnews-speed-btn');
          this.isPaused = false;
          this.currentSpeed = 1;
          this.speeds = [0.5, 1, 1.5, 2];
          this.speedIndex = 1;

          this.init();
        }

        init() {
          this.setupEventListeners();
        }

        setupEventListeners() {
          this.pauseBtn.addEventListener('click', () => this.togglePause());
          this.speedBtn.addEventListener('click', () => this.changeSpeed());

          // Pause on hover
          this.container.addEventListener('mouseenter', () =>
            this.pauseOnHover()
          );
          this.container.addEventListener('mouseleave', () =>
            this.resumeOnLeave()
          );
        }

        togglePause() {
          this.isPaused = !this.isPaused;

          if (this.isPaused) {
            this.container.classList.add('elegnews-paused');
            this.pauseBtn.innerHTML = '▶';
            this.pauseBtn.title = 'Resume';
          } else {
            this.container.classList.remove('elegnews-paused');
            this.pauseBtn.innerHTML = '⏸';
            this.pauseBtn.title = 'Pause';
          }
        }

        changeSpeed() {
          this.speedIndex = (this.speedIndex + 1) % this.speeds.length;
          this.currentSpeed = this.speeds[this.speedIndex];

          this.ticker.style.animationDuration = `${60 / this.currentSpeed}s`;
          this.speedBtn.textContent = `${this.currentSpeed}x`;
        }

        pauseOnHover() {
          // Removed auto-pause on hover for continuous play
        }

        resumeOnLeave() {
          // Removed auto-resume on leave for continuous play
        }

        updateNews(newsItems) {
          const newsHTML = newsItems
            .map(
              (item) => `
                    <span class="elegnews-news-item">
                        <span class="elegnews-news-time">${item.time}</span>
                        ${item.content}
                    </span>
                `
            )
            .join('');

          this.ticker.innerHTML = newsHTML;
        }
      }

      // Initialize the news bar
      document.addEventListener('DOMContentLoaded', () => {
        const newsBar = new ElegantNewsBar();

        // Example of how to update news programmatically
        // newsBar.updateNews([
        //     { time: '3:00 PM', content: 'New headline here...' },
        //     { time: '2:45 PM', content: 'Another news item...' }
        // ]);
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
document.getElementById('newsletterForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const form = e.target;
    const submitBtn = form.querySelector('button[type="submit"]');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoader = submitBtn.querySelector('.btn-loader');
    btnText.style.display = 'none';
    btnLoader.style.display = 'inline-block';
    submitBtn.disabled = true;

    const email = document.getElementById('newsletterEmail').value;
    fetch(form.action, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        },
        body: JSON.stringify({ email })
    })
    .then(res => res.json())
    .then(data => {
        btnText.style.display = '';
        btnLoader.style.display = 'none';
        submitBtn.disabled = false;
        if (data.status === 'success' || data.success) {
            Swal.fire({
                icon: 'success',
                title: 'Subscribed!',
                text: data.message || 'You have been subscribed to our newsletter.',
                confirmButtonColor: '#6C63FF'
            });
            form.reset();
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.message || 'Subscription failed. Please try again.',
                confirmButtonColor: '#6C63FF'
            });
        }
    })
    .catch(error => {
        btnText.style.display = '';
        btnLoader.style.display = 'none';
        submitBtn.disabled = false;
        console.error(error);
        Swal.fire('Error', 'Server error occurred', 'error');
    });
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>




@endsection
