@extends('layouts.frontend.master')


@section('css')
@endsection

@section('content')


    <section
      class="page-header bg_img pricing-banner"
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
          <h2 class="title">Pricing</h2>
          <ul class="breadcrumb">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="#0">Pages</a>
            </li>
            <li>Pricing</li>
          </ul>
        </div>
      </div>
    </section>

    <!--============= Header Section Ends Here =============-->

    <!--============= Pricing Section Ends Here =============-->

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

        <!-- <div class="apps-download-screen-20">
          <div class="apps-download-bg">
            <img src="/api/placeholder/800/500" alt="Device mockup" />
          </div>
          <div class="apps-download-thumb">
            <img src="/api/placeholder/560/350" alt="App screenshot" />
          </div>
        </div> -->
      </div>
      <div class="plane-lottie">
        <lottie-player
          src="https://lottie.host/0bd62bd4-2f03-486c-b443-cc279eec475f/bl1NrxlqIF.json"
          background="transparent"
          speed="1"
          style="width: 50%; height: auto"
          loop=""
          autoplay=""
        >
        </lottie-player>
      </div>
    </section>

    <!-- <section
      class="page-header single-header bg_img oh"
      data-background="{{asset('FrontendAssets/images/page-header.png')}}"
    >
      <div class="bottom-shape d-none d-md-block">
        <img src="{{asset('FrontendAssets/css/img/page-header2.png')}}" alt="css" />
      </div>
    </section> -->
    <!--============= Header Section Ends Here =============-->

    <!--============= Pricing Section Starts Here =============-->
    <!-- <section class="pricing-section oh padding-bottom-2 single-pricing">
      <div class="container">
        <div class="section-header cl-white mw-100 mb-4">
          <h2 class="title mt-0">Mosto Plans for Everyone</h2>
          <p>Start for free, buy it when you <i class="fas fa-heart"></i> it</p>
        </div>
        <div class="tab-up">
          <ul class="tab-menu pricing-menu">
            <li class="active">Monthly</li>
            <li>Yearly</li>
          </ul>
          <div class="tab-area">
            <div class="tab-item active">
              <div class="pricing-slider-wrapper">
                <div class="pricing-slider owl-theme owl-carousel">
                  <div class="pricing-item-2">
                    <h5 class="cate">Startup</h5>
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/pricing/pricing1.png')}}"
                        alt="pricing"
                      />
                    </div>
                    <h2 class="title"><sup>$</sup>5.0</h2>
                    <span class="info">Per Month</span>
                    <ul class="pricing-content-3">
                      <li>3 Users 10 GB Storage</li>
                      <li>Monthly Updates</li>
                      <li>eCommerce Integration</li>
                      <li>Interface Customization</li>
                      <li>24/7 Support</li>
                    </ul>
                    <a href="#0" class="get-button"
                      >Select Plan<i class="flaticon-right"></i
                    ></a>
                  </div>
                  <div class="pricing-item-2">
                    <h5 class="cate">Standard</h5>
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/pricing/pricing2.png')}}"
                        alt="pricing"
                      />
                    </div>
                    <h2 class="title"><sup>$</sup>10</h2>
                    <span class="info">Per Month</span>
                    <ul class="pricing-content-3">
                      <li>5 Users 20 GB Storage</li>
                      <li>Weekly Updates</li>
                      <li>eCommerce Integration</li>
                      <li>Interface Customization</li>
                      <li>24/7 Support</li>
                    </ul>
                    <a href="#0" class="get-button"
                      >Select Plan<i class="flaticon-right"></i
                    ></a>
                  </div>
                  <div class="pricing-item-2">
                    <h5 class="cate">Business</h5>
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/pricing/pricing3.png')}}"
                        alt="pricing"
                      />
                    </div>
                    <h2 class="title"><sup>$</sup>20</h2>
                    <span class="info">Per Month</span>
                    <ul class="pricing-content-3">
                      <li>10 Users 40 GB Storage</li>
                      <li>Daily Updates</li>
                      <li>eCommerce Integration</li>
                      <li>Interface Customization</li>
                      <li>24/7 Support</li>
                    </ul>
                    <a href="#0" class="get-button"
                      >Select Plan<i class="flaticon-right"></i
                    ></a>
                  </div>
                  <div class="pricing-item-2">
                    <h5 class="cate">Premium</h5>
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/pricing/pricing4.png')}}"
                        alt="pricing"
                      />
                    </div>
                    <h2 class="title"><sup>$</sup>30</h2>
                    <span class="info">Per Month</span>
                    <ul class="pricing-content-3">
                      <li>15 Users 60 GB Storage</li>
                      <li>Free Updates</li>
                      <li>eCommerce Integration</li>
                      <li>Interface Customization</li>
                      <li>24/7 Support</li>
                    </ul>
                    <a href="#0" class="get-button"
                      >Select Plan<i class="flaticon-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-item">
              <div class="pricing-slider-wrapper">
                <div class="pricing-slider owl-theme owl-carousel">
                  <div class="pricing-item-2">
                    <h5 class="cate">Startup</h5>
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/pricing/pricing1.png')}}"
                        alt="pricing"
                      />
                    </div>
                    <h2 class="title"><sup>$</sup>60</h2>
                    <span class="info">Per Month</span>
                    <ul class="pricing-content-3">
                      <li>3 Users 10 GB Storage</li>
                      <li>Monthly Updates</li>
                      <li>eCommerce Integration</li>
                      <li>Interface Customization</li>
                      <li>24/7 Support</li>
                    </ul>
                    <a href="#0" class="get-button"
                      >Select Plan<i class="flaticon-right"></i
                    ></a>
                  </div>
                  <div class="pricing-item-2">
                    <h5 class="cate">Standard</h5>
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/pricing/pricing2.png')}}"
                        alt="pricing"
                      />
                    </div>
                    <h2 class="title"><sup>$</sup>120</h2>
                    <span class="info">Per Month</span>
                    <ul class="pricing-content-3">
                      <li>5 Users 20 GB Storage</li>
                      <li>Weekly Updates</li>
                      <li>eCommerce Integration</li>
                      <li>Interface Customization</li>
                      <li>24/7 Support</li>
                    </ul>
                    <a href="#0" class="get-button"
                      >Select Plan<i class="flaticon-right"></i
                    ></a>
                  </div>
                  <div class="pricing-item-2">
                    <h5 class="cate">Business</h5>
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/pricing/pricing3.png')}}"
                        alt="pricing"
                      />
                    </div>
                    <h2 class="title"><sup>$</sup>180</h2>
                    <span class="info">Per Month</span>
                    <ul class="pricing-content-3">
                      <li>10 Users 40 GB Storage</li>
                      <li>Daily Updates</li>
                      <li>eCommerce Integration</li>
                      <li>Interface Customization</li>
                      <li>24/7 Support</li>
                    </ul>
                    <a href="#0" class="get-button"
                      >Select Plan<i class="flaticon-right"></i
                    ></a>
                  </div>
                  <div class="pricing-item-2">
                    <h5 class="cate">Premium</h5>
                    <div class="thumb">
                      <img
                        src="{{asset('FrontendAssets/images/pricing/pricing4.png')}}"
                        alt="pricing"
                      />
                    </div>
                    <h2 class="title"><sup>$</sup>270</h2>
                    <span class="info">Per Month</span>
                    <ul class="pricing-content-3">
                      <li>15 Users 60 GB Storage</li>
                      <li>Free Updates</li>
                      <li>eCommerce Integration</li>
                      <li>Interface Customization</li>
                      <li>24/7 Support</li>
                    </ul>
                    <a href="#0" class="get-button"
                      >Select Plan<i class="flaticon-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-70">
          <a href="#0" class="show-feature">Show all features</a>
        </div>
      </div>
    </section> -->
    <!--============= Pricing Section Ends Here =============-->

    <!--============= Pricing Section Starts Here =============-->
    <!-- <section class="estimate-plan padding-top-2 padding-bottom">
      <div class="container">
        <div class="section-header mw-100">
          <h5 class="cate">Estimate My Plan</h5>
          <h2 class="title">Get the whole team on board!</h2>
          <p>
            Mosto offers everything that your team needs to collaborate at a
            great price
          </p>
        </div>
        <div class="invest-range-area">
          <div class="main-amount">
            <input
              type="text"
              class="calculator-invest"
              id="usd-amount"
              readonly
            />
          </div>
          <div class="user-range-area">
            <div class="min-user">
              <h5 class="title">1</h5>
              <span class="info">user</span>
            </div>
            <div
              class="invest-amount"
              data-min="1.00 users"
              data-max="500 users"
            >
              <div id="usd-range" class="invest-range-slider"></div>
            </div>
            <div class="max-user">
              <h5 class="title">500+</h5>
              <span class="info">user</span>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--============= Pricing Section Ends Here =============-->

    <!--============= Comunity Section Starts Here =============-->
    <!-- <section class="comunity-section padding-top padding-bottom oh pos-rel">
      <div
        class="comunity-bg bg_img"
        data-background="{{asset('FrontendAssets/images/client/mosto-client.jpg')}}"
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
    </section> -->
    <!--============= Comunity Section Ends Here =============-->

    <!--============= Faq Section Starts Here =============-->
    <section class="pt-5 faq-section padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="faq-header">
              <div class="cate">
                <img src="{{asset('FrontendAssets/images/cate.png')}}" alt="cate" />
              </div>
              <h2 class="title">Frequently Asked Questions</h2>
              <a href="#0">More Questions <i class="flaticon-right"></i></a>
              <div>
                <lottie-player
                  src="https://assets4.lottiefiles.com/packages/lf20_7fy2yzzs.json"
                  background="transparent"
                  speed="1"
                  style="width: 75%; height: 380px"
                  loop=""
                  autoplay=""
                ></lottie-player>
                <script src="
                  https://cdn.jsdelivr.net/npm/@lottiefiles/lottie-player@2.0.12/dist/lottie-player.min.js
                  "></script>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="faq-wrapper mb--38">
        @foreach ($faqs as $faq)
<div class="faq-item">
                <div class="faq-thumb">
                  <i class="flaticon-pdf"></i>
                </div>
                <div class="faq-content">
                  <h4 class="title">
                    {{ $faq->title }}
                  </h4>
                  <p>
                    {!! $faq->description !!}
                  </p>
                </div>
              </div>
        @endforeach


            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============= Faq Section Ends Here =============-->



     @endsection


@section('script')





@endsection

