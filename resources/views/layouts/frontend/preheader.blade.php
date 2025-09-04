<!--============= ScrollToTop Section Starts Here =============-->
<div class="preloader">
      <div class="preloader-inner">
        <div class="preloader-icon">
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>

    <a href="#0" id="show-whatssapp">
      <img src="{{asset('FrontendAssets/images/tethar-image/whats-app-logo.svg')}}" alt="" />
    </a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->

    <!-- Fixed Chatbot Container -->
    <div class="xchat-fixed-container" id="xchatFixedContainer">
      <!-- Chatbot Button -->
      <button class="xchat-main-btn" id="xchatMainBtn">
        <svg class="xchat-btn-icon" viewBox="0 0 24 24">
          <path
            d="M12,3C17.5,3 22,6.58 22,11C22,15.42 17.5,19 12,19C10.76,19 9.57,18.82 8.47,18.5C5.55,21 2,21 2,21C4.33,18.67 4.7,17.1 4.75,16.5C3.05,15.07 2,13.13 2,11C2,6.58 6.5,3 12,3Z"
          />
        </svg>
        <div class="xchat-notification" id="xchatNotification">3</div>
      </button>

      <!-- Chat Window -->
      <div class="xchat-window" id="xchatWindow">
        <!-- Chat Header -->
        <div class="xchat-header">
          <div class="xchat-header-info">
            <div class="xchat-avatar">
              <svg viewBox="0 0 24 24">
                <path
                  d="M12,2A2,2 0 0,1 14,4C14,5.5 13.5,6.5 13,7H15A1,1 0 0,1 16,8V10A1,1 0 0,1 15,11H13.5C13.8,11.8 14,12.4 14,13A4,4 0 0,1 10,17H8A2,2 0 0,1 6,15V13C6,12.4 6.2,11.8 6.5,11H5A1,1 0 0,1 4,10V8A1,1 0 0,1 5,7H7C6.5,6.5 6,5.5 6,4A2,2 0 0,1 8,2H12M12,4H8C8,5 8.5,5.5 9,6H11C11.5,5.5 12,5 12,4Z"
                />
              </svg>
            </div>
            <div class="xchat-header-text">
              <h3>AI Assistant</h3>
              <div class="xchat-status">
                <div class="xchat-status-dot"></div>
                Online
              </div>
            </div>
          </div>
          <button class="xchat-close" id="xchatClose">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"
              />
            </svg>
          </button>
        </div>

        <!-- Chat Messages -->
        <div class="xchat-messages" id="xchatMessages">
          <div class="xchat-message xchat-bot">
            <div class="xchat-message-bubble">
              👋 Hello! I'm your AI assistant. How can I help you today?
              <div class="xchat-message-time">Just now</div>
            </div>
          </div>

          <div class="xchat-quick-replies">
            <button
              class="xchat-quick-reply"
              onclick="xchatSendQuickReply('Tell me about your services')"
            >
              Services
            </button>
            <button
              class="xchat-quick-reply"
              onclick="xchatSendQuickReply('I need help')"
            >
              Help
            </button>
            <button
              class="xchat-quick-reply"
              onclick="xchatSendQuickReply('Contact support')"
            >
              Support
            </button>
          </div>
        </div>

        <!-- Chat Input -->
        <div class="xchat-input-area">
          <div class="xchat-input-container">
            <textarea
              class="xchat-input"
              id="xchatInput"
              placeholder="Type your message..."
              rows="1"
            ></textarea>
            <button class="xchat-send-btn" id="xchatSendBtn">
              <svg viewBox="0 0 24 24">
                <path d="M2,21L23,12L2,3V10L17,12L2,14V21Z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Fixed Button Container -->
    <div class="xpurple-fixed-btn-container" id="xpurpleFixedBtn">
      <!-- Main Button -->
      <button class="xpurple-main-btn" id="xpurpleMainBtn">
        <svg
          class="xpurple-btn-icon"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
          fill="#ffffff"
        >
          <path
            d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 2.02 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5zm3 2h2v2h-2v2h-2v-2h-2v-2h2v-2h2v2z"
          />
        </svg>
      </button>

      <!-- Dropdown Menu -->
      <div class="xpurple-dropdown" id="xpurpleDropdown">
    @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="xpurple-dropdown-btn">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z"
                    />
                </svg>
                Logout
            </button>
        </form>
    @else
        <button class="xpurple-dropdown-btn" id="xpurpleSignupBtn">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M15,14C12.33,14 7,15.33 7,18V20H23V18C23,15.33 17.67,14 15,14M6,10V7H4V10H1V12H4V15H6V12H9V10M15,12A4,4 0 0,0 19,8A4,4 0 0,0 15,4A4,4 0 0,0 11,8A4,4 0 0,0 15,12Z"
            />
          </svg>
            Sign Up
        </button>
        <button class="xpurple-dropdown-btn" id="xpurpleLoginBtn">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z"
            />
          </svg>
          Login
        </button>
    @endauth
      </div>

    </div>

    <!-- Sign Up Modal -->
    <div class="xpurple-modal-overlay" id="xpurpleSignupModal">
      <div class="xpurple-modal">
        <button class="xpurple-modal-close" id="xpurpleSignupClose">
          &times;
        </button>
        <h2 class="xpurple-modal-title">Create Account</h2>
        <form class="xpurple-signup-form" id="xpurpleSignupForm" method="POST" action="{{ route('register.attempt')}}">
            @csrf
          <div class="xpurple-form-group">
            <label class="xpurple-form-label" for="xpurpleSignupName"
              >Full Name</label
            >
            <input
              type="text"
              class="xpurple-form-input"
              id="xpurpleSignupName"
              required name="name"
            />
          </div>
          <div class="xpurple-form-group">
            <label class="xpurple-form-label" for="xpurpleSignupEmail"
              >Email Address</label
            >
            <input
              type="email"
              class="xpurple-form-input"
              id="xpurpleSignupEmail"
              required name="email"
            />
          </div>
          <div class="xpurple-form-group">
            <label class="xpurple-form-label" for="xpurpleSignupPassword"
              >Password</label
            >
            <input
              type="password"
              class="xpurple-form-input"
              id="xpurpleSignupPassword"
              required name="password"
            />
          </div>
          <div class="xpurple-form-group">
  <label class="xpurple-form-label" for="xpurpleSignupConfirm">
    Confirm Password
  </label>
            <input
              type="password"
              class="xpurple-form-input"
              id="xpurpleSignupConfirm"
    name="password_confirmation"
              required
            />
          </div>

          <button type="submit" class="xpurple-form-submit">
            Create Account
          </button>
          <div class="xpurple-form-link">
            Already have an account? <a href="#" id="xpurpleToLogin">Sign In</a>
          </div>
        </form>
      </div>
    </div>

    <!-- Login Modal -->
    <div class="xpurple-modal-overlay" id="xpurpleLoginModal">
      <div class="xpurple-modal">
        <button class="xpurple-modal-close" id="xpurpleLoginClose">
          &times;
        </button>
        <h2 class="xpurple-modal-title">Welcome Back</h2>
        <form class="xpurple-login-form" id="xpurpleLoginForm" method="POST" action="{{ route('login.attempt')}}">
            @csrf
          <div class="xpurple-form-group">
            <label class="xpurple-form-label" for="xpurpleLoginEmail"
              >Email Address</label
            >
            <input
              type="email"
              class="xpurple-form-input"
              id="xpurpleLoginEmail"
              required name="email_username"
            />
          </div>
          <div class="xpurple-form-group">
            <label class="xpurple-form-label" for="xpurpleLoginPassword"
              >Password</label
            >
            <input
              type="password"
              class="xpurple-form-input"
              id="xpurpleLoginPassword"
              required name="password"
            />
          </div>
          <button type="submit" class="xpurple-form-submit">Sign In</button>
          <div class="xpurple-form-link">
            Don't have an account?
            <a href="#" id="xpurpleToSignup">Create Account</a>
          </div>
        </form>
      </div>
    </div>

       <!-- Gift Modal -->
      <div class="giftModal-overlay" id="giftModalOverlay">
        <div class="giftModal-container">
          <!-- Modal Header -->
          <div class="giftModal-header">
            <button class="giftModal-closeButton" id="giftModalClose">
              <i class="fas fa-times"></i>
            </button>
            <div class="giftModal-headerContent">
              <div class="giftModal-headerIcon">
                <i class="fas fa-gift"></i>
              </div>
              <h2 class="giftModal-title">Your Perfect Ring, Just a Click Away</h2>
              <p class="giftModal-subtitle">
                Select the perfect rings for your thoughtful gesture
                
              </p>
            </div>
          </div>

          <!-- Package Selection -->
          <div class="giftModal-packageSection" >
            <div class="giftPackages-grid">

                @foreach ($gifts as $gift)
                <div class="giftPackage-card" onclick="openGiftForm({{ $gift->id }}, '{{ $gift->title }}', {{ $gift->price }}, {{ $gift->rings_count }})" data-package="quarterly" data-gift-id="{{ $gift->id }}" data-gift-price="{{ $gift->price }}">
                <div class="giftPackage-iconWrapper giftPackage-quarterly">
                  <i class="{{$gift->icon}}"></i>
                </div>
                <h3 class="giftPackage-name">{{$gift->title}}</h3>
                <p class="giftPackage-duration">{{$gift->rings_count}}</p>
                <p class="giftPackage-description">
                  {!! $gift->description !!}
                </p>
                <br>
                  @php
      $includes = json_decode($gift->includes, true);
    @endphp
                <div class="giftPackage-features">
                     @if (!empty($includes))
            @foreach ($includes as $item)
          <span class="giftFeature-item">
            <i class="fas fa-check"></i> {{ $item }}
          </span>
        @endforeach
        @endif

                </div>

                <button type="btn" class="giftForm-submitButton">
                  <span class="giftSubmit-icon">
                    <i class="fas fa-gift"></i>
                  </span>
                  <span class="giftSubmit-text">buy</span>
                  <div class="giftSubmit-ripple"></div>
                </button>
                


              </div>
                @endforeach

            </div>
          </div>

          <!-- Gift Form -->
          <div class="giftModal-formSection" id="giftFormSection" style="display: none">
            <div class="giftForm-header">
              <button class="giftForm-backButton" id="giftFormBack">
                <i class="fas fa-arrow-left"></i>
                <span>Change Package</span>
              </button>
              <h3 class="giftForm-title" id="giftFormTitle">
                Complete Your Gift
              </h3>
            </div>

<meta name="csrf-token" content="{{ csrf_token() }}">
            <form class="giftForm-container" id="giftForm">
@csrf
<input type="hidden" name="gift_id" id="gift_id">
<input type="hidden" name="payment_intent_id" id="payment_intent_id">

              <!-- Recipient Information -->
              <div class="giftForm-section">
                <h4 class="giftForm-sectionTitle">
                  <i class="fas fa-user"></i>
                  Recipient Information
                </h4>
                <div class="giftForm-row">
                  <div class="giftForm-field">
                    <label class="giftForm-label">Full Name</label>
                    <input
                      type="text"
                      class="giftForm-input"
                      name="recipientName"
                      placeholder="Recipient's full name"
                      required
                    />
                  </div>
                  <div class="giftForm-field">
                    <label class="giftForm-label">Email Address</label>
                    <input
                      type="email"
                      class="giftForm-input"
                      name="recipientEmail"
                      placeholder="recipient@email.com"
                      required
                    />
                  </div>
                </div>
                <div class="giftForm-row">
                  <div class="giftForm-field">
                    <label class="giftForm-label">Phone Number</label>
                    <input
                      type="tel"
                      class="giftForm-input"
                      name="recipientPhone"
                      placeholder="+1 (555) 123-4567"
                    />
                  </div>
                  <div class="giftForm-field">
                    <label class="giftForm-label">Delivery Date</label>
                    <input
                      type="date"
                      class="giftForm-input"
                      name="deliveryDate"
                      required
                    />
                  </div>
                </div>
              </div>

              <!-- Sender Information -->
              <div class="giftForm-section">
                <h4 class="giftForm-sectionTitle">
                  <i class="fas fa-credit-card"></i>
                  Your Information
                </h4>
                <div class="giftForm-row">
                  <div class="giftForm-field">
                    <label class="giftForm-label">Your Name</label>
                    <input
                      type="text"
                      class="giftForm-input"
                      name="senderName"
                      placeholder="Your full name"
                      required
                    />
                  </div>
                  <div class="giftForm-field">
                    <label class="giftForm-label">Your Email</label>
                    <input
                      type="email"
                      class="giftForm-input"
                      name="senderEmail"
                      placeholder="your@email.com"
                      required
                    />
                  </div>
                </div>
              </div>

              <!-- Message and Address -->
              <div class="giftForm-section">
                <h4 class="giftForm-sectionTitle">
                  <i class="fas fa-envelope"></i>
                  Additional Details
                </h4>
                <div class="giftForm-field">
                  <label class="giftForm-label">Personal Message</label>
                  <textarea
                    class="giftForm-textarea"
                    name="message"
                    placeholder="Write a heartfelt message..."
                    rows="3"
                  ></textarea>
                </div>
                <div class="giftForm-field">
                  <label class="giftForm-label">Billing Address</label>
                  <textarea
                    class="giftForm-textarea"
                    name="billingAddress"
                    placeholder="Your complete billing address"
                    rows="2"
                    required
                  ></textarea>
                </div>
              </div>

              <!-- Submit Button -->
              <div class="giftForm-submitSection">

                <div class="giftForm-field">
                  <label class="giftForm-label">Card Details</label>
                  <div id="card-element" class="giftForm-input"></div>
                </div>

                <div id="stripePaymentSection" style="display: block;">
                  <!-- <p style="margin-bottom: 10px; color: #666; font-size: 14px;">Click the button below to complete your card payment:</p> -->
                  <button type="button" class="giftForm-submitButton" id="stripeSubmitButton" onclick="processGiftStripePayment()">
                    <span class="giftSubmit-icon">
                      <i class="fas fa-gift"></i>
                    </span>
                    <span class="giftSubmit-text">Complete Gift Purchase</span>
                    <div class="giftSubmit-ripple"></div>
                  </button>
                </div>
                
                <!-- Google Pay Button Widget -->
                <div class="giftForm-field" style="margin-top: 16px;">
                  <label class="giftForm-label">Or pay with Google Pay</label>
                  <div id="google-pay-widget"></div>
                </div>
                
                <!-- Apple Pay Button Widget -->
                <div class="giftForm-field" style="margin-top: 16px;">
                  <label class="giftForm-label">Or pay with Apple Pay</label>
                  <div id="apple-pay-widget">
                    <!-- Stripe Payment Request Button will be mounted here -->
                    <div id="payment-request-button"></div>
                  </div>
                </div>
                
                <!-- PayPal Button Widget -->
                <div class="giftForm-field" style="margin-top: 16px;">
                  <label class="giftForm-label">Or pay with PayPal</label>
                  <div id="paypal-button-container"></div>
                </div>
                <!-- Required hidden input -->
                <input type="hidden" id="gift_id" name="gift_id" />

              </div>
            </form>
          </div>
        </div>
      </div>

             <!-- second popup -->
      <div class="giftModal-overlay" id="giftModalOverlaytwo">
        <div class="giftModal-container">
          <!-- Modal Header -->
          <div class="giftModal-header">
            <button class="giftModal-closeButton" id="giftModalClosetwo">
              <i class="fas fa-times"></i>
            </button>
            <div class="giftModal-headerContent">
              <div class="giftModal-headerIcon">
                <i class="fas fa-gift"></i>
              </div>
              <h2 class="giftModal-title">Your Perfect Ring,</h2>
              <p class="giftModal-subtitle">
                Select the perfect rings for your thoughtful gesture
                
              </p>
            </div>
          </div>

          <!-- Package Selection -->
          <div class="giftModal-packageSection" >
            <div class="giftPackages-grid">

   
@foreach ($gifts as $gift)
                <div class="giftPackage-card" onclick="openGiftForm({{ $gift->id }}, '{{ $gift->title }}', {{ $gift->price }}, {{ $gift->rings_count }})" data-package="quarterly" data-gift-id="{{ $gift->id }}" data-gift-price="{{ $gift->price }}">
                <div class="giftPackage-iconWrapper giftPackage-quarterly">
                  <i class="{{$gift->icon}}"></i>
                </div>
                <h3 class="giftPackage-name">{{$gift->title}}</h3>
                <p class="giftPackage-duration">{{$gift->rings_count}}</p>
                <p class="giftPackage-description">
                  {!! $gift->description !!}
                </p>
                <br>
                  @php
                $includes = json_decode($gift->includes, true);
              @endphp
                          <div class="giftPackage-features">
                              @if (!empty($includes))
                      @foreach ($includes as $item)
                    <span class="giftFeature-item">
                      <i class="fas fa-check"></i> {{ $item }}
                    </span>
                  @endforeach
                  @endif

                </div>

                <button type="btn" class="giftForm-submitButton" onclick="openRingOrderModalFromGift({{ $gift->id }}, '{{ $gift->title }}', {{ $gift->price }}, {{ $gift->rings_count }})">
                  <span class="giftSubmit-icon">
                    <i class="fas fa-gift"></i>
                  </span>
                  <span class="giftSubmit-text">buy</span>
                  <div class="giftSubmit-ripple"></div>
                </button>
                


              </div>
                @endforeach

                
              

            </div>
          </div>

          <!-- Gift Form -->
          <div class="giftModal-formSection" id="giftFormSection" style="display: none">
            <div class="giftForm-header">
              <button class="giftForm-backButton" id="giftFormBack">
                <i class="fas fa-arrow-left"></i>
                <span>Change Package</span>
              </button>
              <h3 class="giftForm-title" id="giftFormTitle">
                Complete Your Gift
              </h3>
            </div>

            <meta name="csrf-token" content="{{ csrf_token() }}">
                        <form class="giftForm-container" id="giftForm">
            @csrf
            <input type="hidden" name="gift_id" id="gift_id">
            <input type="hidden" name="payment_intent_id" id="payment_intent_id">

              <!-- Recipient Information -->
              <div class="giftForm-section">
                <h4 class="giftForm-sectionTitle">
                  <i class="fas fa-user"></i>
                  Recipient Information
                </h4>
                <div class="giftForm-row">
                  <div class="giftForm-field">
                    <label class="giftForm-label">Full Name</label>
                    <input
                      type="text"
                      class="giftForm-input"
                      name="recipientName"
                      placeholder="Recipient's full name"
                      required
                    />
                  </div>
                  <div class="giftForm-field">
                    <label class="giftForm-label">Email Address</label>
                    <input
                      type="email"
                      class="giftForm-input"
                      name="recipientEmail"
                      placeholder="recipient@email.com"
                      required
                    />
                  </div>
                </div>
                <div class="giftForm-row">
                  <div class="giftForm-field">
                    <label class="giftForm-label">Phone Number</label>
                    <input
                      type="tel"
                      class="giftForm-input"
                      name="recipientPhone"
                      placeholder="+1 (555) 123-4567"
                    />
                  </div>
                  <div class="giftForm-field">
                    <label class="giftForm-label">Delivery Date</label>
                    <input
                      type="date"
                      class="giftForm-input"
                      name="deliveryDate"
                      required
                    />
                  </div>
                </div>
              </div>

              <!-- Sender Information -->
              <div class="giftForm-section">
                <h4 class="giftForm-sectionTitle">
                  <i class="fas fa-credit-card"></i>
                  Your Information
                </h4>
                <div class="giftForm-row">
                  <div class="giftForm-field">
                    <label class="giftForm-label">Your Name</label>
                    <input
                      type="text"
                      class="giftForm-input"
                      name="senderName"
                      placeholder="Your full name"
                      required
                    />
                  </div>
                  <div class="giftForm-field">
                    <label class="giftForm-label">Your Email</label>
                    <input
                      type="email"
                      class="giftForm-input"
                      name="senderEmail"
                      placeholder="your@email.com"
                      required
                    />
                  </div>
                </div>
              </div>

              <!-- Message and Address -->
              <div class="giftForm-section">
                <h4 class="giftForm-sectionTitle">
                  <i class="fas fa-envelope"></i>
                  Additional Details
                </h4>
                <div class="giftForm-field">
                  <label class="giftForm-label">Personal Message</label>
                  <textarea
                    class="giftForm-textarea"
                    name="message"
                    placeholder="Write a heartfelt message..."
                    rows="3"
                  ></textarea>
                </div>
                <div class="giftForm-field">
                  <label class="giftForm-label">Billing Address</label>
                  <textarea
                    class="giftForm-textarea"
                    name="billingAddress"
                    placeholder="Your complete billing address"
                    rows="2"
                    required
                  ></textarea>
                </div>
              </div>

              <!-- Submit Button -->
              <div class="giftForm-submitSection">

                <div class="giftForm-field">
                  <label class="giftForm-label">Card Details</label>
                  <div id="card-element" class="giftForm-input"></div>
                </div>

                <div id="stripePaymentSection" style="display: block;">
                  <!-- <p style="margin-bottom: 10px; color: #666; font-size: 14px;">Click the button below to complete your card payment:</p> -->
                  <button type="button" class="giftForm-submitButton" id="stripeSubmitButton" onclick="processGiftStripePayment()">
                  <span class="giftSubmit-icon">
                    <i class="fas fa-gift"></i>
                  </span>
                  <span class="giftSubmit-text">Complete Gift Purchase</span>
                  <div class="giftSubmit-ripple"></div>
                </button>
                </div>
                
                <!-- Google Pay Button Widget -->
                <div class="giftForm-field" style="margin-top: 16px;">
                  <label class="giftForm-label">Or pay with Google Pay</label>
                  <div id="google-pay-widget"></div>
                </div>
                
                <!-- Apple Pay Button Widget -->
                <div class="giftForm-field" style="margin-top: 16px;">
                  <label class="giftForm-label">Or pay with Apple Pay</label>
                  <div id="apple-pay-widget">
                    <!-- Stripe Payment Request Button will be mounted here -->
                    <div id="payment-request-button"></div>
                  </div>
                </div>
                
                <!-- PayPal Button Widget -->
                <div class="giftForm-field" style="margin-top: 16px;">
                  <label class="giftForm-label">Or pay with PayPal</label>
                  <div id="paypal-button-container"></div>
                </div>
                <!-- Required hidden input -->
                <input type="hidden" id="gift_id" name="gift_id" />

              </div>
            </form>
          </div>
        </div>
      </div>

<style>
.swal-high-z-index {
  z-index: 999999 !important;
}
</style>
<script src="https://js.stripe.com/v3/"></script>
<script src="https://pay.google.com/gp/p/js/pay.js"></script>
<!-- PayPal JS SDK -->
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

<!-- Make gift data available to JavaScript -->
<script>
window.tetherprisingnewGiftData = @json($gifts);
</script>

<script>
document.addEventListener("DOMContentLoaded", async function () {
  // Function to close the gift modal
  function closeGiftModal() {
    const modal = document.getElementById('giftModalOverlay');
    if (modal) {
      modal.style.display = 'none';
    }
  }

      // Function to show success and close modal
    function showSuccessAndCloseModal() {
        // Close the modal first
        closeGiftModal();

        // Then show SweetAlert after a short delay to ensure modal is closed
        setTimeout(() => {
            showSweetAlert({
                title: 'Gift Order Successful!',
                text: 'Your gift order has been placed successfully.',
                icon: 'success',
                confirmButtonText: 'OK',
                didClose: () => {
                    window.location.href = "{{ route('home') }}";
                }
            });
        }, 100);
    }

  // Helper function to show SweetAlert with proper z-index
  function showSweetAlert(options) {
    // Close modal first if it's open
    closeGiftModal();

    // Add custom z-index to ensure SweetAlert appears on top
    const defaultOptions = {
      customClass: {
        popup: 'swal-high-z-index'
      },
      ...options
    };

    setTimeout(() => {
      Swal.fire(defaultOptions);
    }, 100);
  }

    // Gift-specific Stripe payment processing function (renamed to avoid conflicts)
  window.processGiftStripePayment = async function() {
    console.log('🎁 GIFT processGiftStripePayment called - sending to ring.checkout route!');
    
    const form = document.getElementById("giftForm");
    if (!form) {
      showSweetAlert({
        title: 'Error',
        text: 'Form not found. Please try again.',
        icon: 'error',
        confirmButtonText: 'OK'
      });
      return;
    }

    // Gift-specific validation
    console.log('🎁 Validating GIFT form fields...');
    const requiredFields = [
      form.querySelector('[name="recipientName"]'),
      form.querySelector('[name="recipientEmail"]'),
      form.querySelector('[name="deliveryDate"]'),
      form.querySelector('[name="senderName"]'),
      form.querySelector('[name="senderEmail"]'),
      form.querySelector('[name="billingAddress"]'),
    ];
    let missing = false;
    requiredFields.forEach(field => {
      if (!field || !field.value.trim()) {
        missing = true;
        if (field && field.style) field.style.borderColor = 'red';
        console.log('🎁 Missing gift field:', field?.name);
      } else {
        if (field && field.style) field.style.borderColor = '';
      }
    });
    if (missing) {
      showSweetAlert({
        title: 'Missing Information',
        text: 'Please fill in all required fields.',
        icon: 'warning',
        confirmButtonText: 'OK'
      });
      return;
    }

    // Build FormData with ring order format
    const formData = new FormData();
    const giftIdValue = document.querySelector("#giftFormSection input[name='gift_id']").value || selectedGiftId;
    const priceValue = selectedGiftPrice || form.querySelector("#giftFormSection input[name='price']")?.value;
    
    // Get the gift details to build package information
    const gift = window.tetherprisingnewGiftData ? window.tetherprisingnewGiftData.find(g => g.id == giftIdValue) : null;
    
    // Convert gift order to ring order format
    formData.append("package_id", giftIdValue);
    formData.append("package_name", gift ? gift.title : 'Gift Package');
    formData.append("package_price", priceValue);
    formData.append("rings_count", gift ? gift.rings_count : 2);
    formData.append("subscription_plan_id", "1"); // Default subscription plan
    formData.append("subscription_detail", JSON.stringify({
      "id": 1,
      "title": "Basic Plan",
      "amount": 0,
      "duration": "monthly"
    }));
    formData.append("female_rings", 0);
    formData.append("male_rings", 0);
    formData.append("female_ring_size", "");
    formData.append("male_ring_size", "");
    formData.append("fullname", form.querySelector('[name="senderName"]').value);
    formData.append("email", form.querySelector('[name="senderEmail"]').value);
    formData.append("phone", form.querySelector('[name="recipientPhone"]').value);
    formData.append("partner_name", form.querySelector('[name="recipientName"]').value);
    formData.append("address", form.querySelector('[name="billingAddress"]').value);
    formData.append("is_gift", "1"); // Mark as gift order
    formData.append("gift_details", JSON.stringify({
      "recipientName": form.querySelector('[name="recipientName"]').value,
      "recipientEmail": form.querySelector('[name="recipientEmail"]').value,
      "recipientPhone": form.querySelector('[name="recipientPhone"]').value,
      "deliveryDate": form.querySelector('[name="deliveryDate"]').value,
      "message": form.querySelector('[name="message"]').value
    }));
    formData.append("payment_method", "card");

    try {
      const { paymentMethod, error } = await stripe.createPaymentMethod({
        type: "card",
        card: cardElement,
        billing_details: {
          name: form.querySelector('[name="senderName"]').value,
          email: form.querySelector('[name="senderEmail"]').value,
        },
      });

      if (error) {
        console.error("Stripe createPaymentMethod error", error);
        showSweetAlert({
          title: 'Card Error',
          text: error.message,
          icon: 'error',
          confirmButtonText: 'OK'
        });
        return;
      }

      formData.append("payment_method_id", paymentMethod.id);
      console.log("🎁 Sending GIFT payment request to ring.checkout route", { paymentMethodId: paymentMethod.id });

      const response = await fetch("{{ route('ring.checkout') }}", {
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
        },
        body: formData,
      });

      let data;
      try {
        data = await response.json();
      } catch (err) {
        showSweetAlert({
          title: 'Server Error',
          text: 'Could not parse server response.',
          icon: 'error',
          confirmButtonText: 'OK'
        });
        return;
      }
      console.log("🎁 GIFT payment response from gift.checkout route:", data);

      if (data.errors) {
        let errorMsg = '';
        for (const key in data.errors) {
          errorMsg += data.errors[key].join(' ') + '\n';
        }
        showSweetAlert({
          title: 'Validation Error',
          text: errorMsg,
          icon: 'error',
          confirmButtonText: 'OK'
        });
        return;
      }

      if (data.requires_action) {
        const result = await stripe.confirmCardPayment(data.payment_intent_client_secret);
        if (result.error) {
          console.error("Stripe confirmCardPayment error", result.error);
          showSweetAlert({
            title: 'Payment Error',
            text: result.error.message,
            icon: 'error',
            confirmButtonText: 'OK'
          });
          return;
        }
      }

      if (data.success) {
        showSuccessAndCloseModal();
      } else {
        showSweetAlert({
          title: 'Payment Failed',
          text: data.message || 'Payment failed.',
          icon: 'error',
          confirmButtonText: 'OK'
        });
      }

    } catch (err) {
      console.error("🎁 GIFT Payment Error:", err);
      showSweetAlert({
        title: 'Payment Error',
        text: err.message || 'Payment processing failed.',
        icon: 'error',
        confirmButtonText: 'OK'
      });
    }
  };

  // Render PayPal button
  if (window.paypal && document.getElementById('paypal-button-container')) {
    paypal.Buttons({
      style: {
        layout: 'horizontal',
        color: 'gold',
        shape: 'rect',
        label: 'paypal'
      },
      createOrder: function(data, actions) {
        // Placeholder: set up the transaction
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: selectedGiftPrice || '10.00' // Default/fallback value
            }
          }]
        });
      },
      onApprove: function(data, actions) {
        // Capture the payment and send to backend
        return actions.order.capture().then(function(details) {
          // Get form data and send to backend
          const form = document.getElementById("giftForm");
          if (!form) {
            showSweetAlert({
              title: 'Error',
              text: 'Form not found. Please try again.',
              icon: 'error',
              confirmButtonText: 'OK'
            });
            return;
          }

          // Validate required fields
          const requiredFields = [
            form.querySelector('[name="recipientName"]'),
            form.querySelector('[name="recipientEmail"]'),
            form.querySelector('[name="deliveryDate"]'),
            form.querySelector('[name="senderName"]'),
            form.querySelector('[name="senderEmail"]'),
            form.querySelector('[name="billingAddress"]'),
          ];
          let missing = false;
          requiredFields.forEach(field => {
            if (!field || !field.value.trim()) {
              missing = true;
              if (field && field.style) field.style.borderColor = 'red';
            } else {
              if (field && field.style) field.style.borderColor = '';
            }
          });
          if (missing) {
            showSweetAlert({
              title: 'Missing Information',
              text: 'Please fill in all required fields.',
              icon: 'warning',
              confirmButtonText: 'OK'
            });
            return;
          }

          // Send order data to backend
          const formData = new FormData();
          
          // Get the gift details to build package information
          const gift = window.tetherprisingnewGiftData ? window.tetherprisingnewGiftData.find(g => g.id == selectedGiftId) : null;
          
          // Convert gift order to ring order format
          formData.append("package_id", selectedGiftId);
          formData.append("package_name", gift ? gift.title : 'Gift Package');
          formData.append("package_price", selectedGiftPrice);
          formData.append("rings_count", gift ? gift.rings_count : 2);
          formData.append("subscription_plan_id", "1"); // Default subscription plan
          formData.append("subscription_detail", JSON.stringify({
            "id": 1,
            "title": "Basic Plan",
            "amount": 0,
            "duration": "monthly"
          }));
          formData.append("female_rings", 0);
          formData.append("male_rings", 0);
          formData.append("female_ring_size", "");
          formData.append("male_ring_size", "");
          formData.append("fullname", form.querySelector('[name="senderName"]').value);
          formData.append("email", form.querySelector('[name="senderEmail"]').value);
          formData.append("phone", form.querySelector('[name="recipientPhone"]').value);
          formData.append("partner_name", form.querySelector('[name="recipientName"]').value);
          formData.append("address", form.querySelector('[name="billingAddress"]').value);
          formData.append("is_gift", "1"); // Mark as gift order
          formData.append("gift_details", JSON.stringify({
            "recipientName": form.querySelector('[name="recipientName"]').value,
            "recipientEmail": form.querySelector('[name="recipientEmail"]').value,
            "recipientPhone": form.querySelector('[name="recipientPhone"]').value,
            "deliveryDate": form.querySelector('[name="deliveryDate"]').value,
            "message": form.querySelector('[name="message"]').value
          }));
          formData.append("payment_method", "paypal");
          formData.append("paypal_order_id", details.id);

          fetch("{{ route('ring.checkout') }}", {
            method: "POST",
            headers: {
              "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
            },
            body: formData,
          })
          .then(res => res.json())
          .then(data => {
            if (data.errors) {
              // Laravel validation errors
              let errorMsg = '';
              for (const key in data.errors) {
                errorMsg += data.errors[key].join(' ') + '\n';
              }
              showSweetAlert({
                title: 'Validation Error',
                text: errorMsg,
                icon: 'error',
                confirmButtonText: 'OK'
              });
              return;
            }
            if (data.success) {
              showSuccessAndCloseModal();
            } else {
              showSweetAlert({
                title: 'Payment Failed',
                text: data.message || 'Payment failed.',
                icon: 'error',
                confirmButtonText: 'OK'
              });
            }
          })
          .catch(err => {
            showSweetAlert({
              title: 'Payment Error',
              text: err.message || 'Payment error.',
              icon: 'error',
              confirmButtonText: 'OK'
            });
          });
        });
      },
      onError: function(err) {
        showSweetAlert({
          title: 'PayPal Payment Failed',
          text: err.message || 'PayPal payment failed.',
          icon: 'error',
          confirmButtonText: 'OK'
        });
      }
    }).render('#paypal-button-container');
  }
    console.log("Gift payment script loaded");
    
    // Function to open ring order modal from preheader
    window.openRingOrderModal = function(giftId, giftTitle, giftPrice, giftRingsCount) {
        console.log('Opening ring order modal from preheader:', { giftId, giftTitle, giftPrice, giftRingsCount });
        
        // Close the gift modal if it's open
        const giftModal = document.getElementById('giftModalOverlay');
        if (giftModal) {
            giftModal.style.display = 'none';
        }
        
        // Open the ring order modal
        const ringModal = document.getElementById('tetherprisingnewModal');
        console.log('Ring modal element found:', ringModal);
        
        if (ringModal) {
            // Ensure modal is visible and on top
            ringModal.style.display = 'block';
            ringModal.style.zIndex = '99999';
            ringModal.style.position = 'fixed';
            document.body.style.overflow = 'hidden';
            
            console.log('Ring modal opened successfully');
            
            // Update the package selector dropdown to match the selected gift
            const packageSelect = document.getElementById('tetherprisingnewPackageSelectNEW');
            if (packageSelect) {
                packageSelect.value = giftId;
                // Trigger change event to update the UI
                packageSelect.dispatchEvent(new Event('change'));
            }
            
            // Force update the form fields with the selected package data
            setTimeout(() => {
                console.log('Updating form fields...');
                
                // Update hidden fields for package information
                const packageIdEl = document.getElementById('ring_package_id');
                const packageNameEl = document.getElementById('ring_package_name');
                const packagePriceEl = document.getElementById('ring_package_price');
                const ringsCountEl = document.getElementById('ring_rings_count');
                
                console.log('Form elements found:', {
                    packageIdEl: !!packageIdEl,
                    packageNameEl: !!packageNameEl,
                    packagePriceEl: !!packagePriceEl,
                    ringsCountEl: !!ringsCountEl
                });
                
                if (packageIdEl) packageIdEl.value = giftId;
                if (packageNameEl) packageNameEl.value = giftTitle;
                if (packagePriceEl) packagePriceEl.value = giftPrice;
                if (ringsCountEl) ringsCountEl.value = giftRingsCount;
                
                // Update form fields
                const totalEl = document.getElementById('tetherprisingnewTotalRings');
                const femaleEl = document.getElementById('tetherprisingnewFemaleRings');
                const maleEl = document.getElementById('tetherprisingnewMaleRings');
                
                console.log('Ring count elements found:', {
                    totalEl: !!totalEl,
                    femaleEl: !!femaleEl,
                    maleEl: !!maleEl
                });
                
                if (totalEl && femaleEl && maleEl) {
                    const ringsCount = parseInt(giftRingsCount) || 2;
                    totalEl.value = ringsCount;
                    femaleEl.value = Math.floor(ringsCount / 2);
                    maleEl.value = ringsCount - Math.floor(ringsCount / 2);
                    
                    console.log('Ring counts updated:', {
                        total: ringsCount,
                        female: Math.floor(ringsCount / 2),
                        male: ringsCount - Math.floor(ringsCount / 2)
                    });
                }
                
                // Update display fields
                const selectedPackageNameEl = document.getElementById('tetherprisingnewSelectedPackageName');
                const packagePriceDisplayEl = document.getElementById('tetherprisingnewPackagePrice');
                const packageRingsDisplayEl = document.getElementById('tetherprisingnewPackageRingsDisplay');
                
                console.log('Display elements found:', {
                    selectedPackageNameEl: !!selectedPackageNameEl,
                    packagePriceDisplayEl: !!packagePriceDisplayEl,
                    packageRingsDisplayEl: !!packageRingsDisplayEl
                });
                
                if (selectedPackageNameEl) selectedPackageNameEl.value = giftTitle;
                if (packagePriceDisplayEl) packagePriceDisplayEl.value = '$' + parseFloat(giftPrice).toFixed(2);
                if (packageRingsDisplayEl) packageRingsDisplayEl.value = giftRingsCount + ' Rings';
                
                // Update package summary
                if (typeof window.tetherprisingnewUpdatePackageSummary === 'function') {
                    window.tetherprisingnewUpdatePackageSummary();
                }
                
                // Initialize payment methods
                if (typeof window.initializePaymentMethods === 'function') {
                    // Reset initialization flags
                    window.paymentMethodsInitialized = false;
                    window.applePayButtonCreated = false;
                    
                    // Wait a bit then initialize
                    setTimeout(() => {
                        window.initializePaymentMethods();
                    }, 500);
                }
                
                console.log('Ring order modal initialized with package:', { giftId, giftTitle, giftPrice, giftRingsCount });
            }, 300);
        } else {
            console.error('Ring modal not found');
            // Fallback: try to find the modal by scrolling to the ring packages section
            const ringSection = document.getElementById('pricing');
            if (ringSection) {
                ringSection.scrollIntoView({ behavior: 'smooth' });
                // Try to open the modal after scrolling
                setTimeout(() => {
                    const ringModal = document.getElementById('tetherprisingnewModal');
                    if (ringModal) {
                        ringModal.style.display = 'block';
                        document.body.style.overflow = 'hidden';
                        console.log('Ring modal found after scrolling');
                    } else {
                        console.error('Ring modal still not found after scrolling');
                    }
                }, 1000);
            }
        }
          };

    // Function to open ring order modal from "Your Perfect Ring" modal
    window.openRingOrderModalFromGift = function(giftId, giftTitle, giftPrice, giftRingsCount) {
        console.log('Opening ring order modal from "Your Perfect Ring" modal:', { giftId, giftTitle, giftPrice, giftRingsCount });
        
        // Close the gift modal if it's open
        const giftModal = document.getElementById('giftModalOverlaytwo');
        if (giftModal) {
            giftModal.style.display = 'none';
        }
        
        // Open the ring order modal
        const ringModal = document.getElementById('tetherprisingnewModal');
        console.log('Ring modal element found:', ringModal);
        
        if (ringModal) {
            // Ensure modal is visible and on top
            ringModal.style.display = 'block';
            ringModal.style.zIndex = '99999';
            ringModal.style.position = 'fixed';
            document.body.style.overflow = 'hidden';
            
            console.log('Ring modal opened successfully');
            
            // Update the package selector dropdown to match the selected gift
            const packageSelect = document.getElementById('tetherprisingnewPackageSelectNEW');
            if (packageSelect) {
                packageSelect.value = giftId;
                // Trigger change event to update the UI
                packageSelect.dispatchEvent(new Event('change'));
            }
            
            // Force update the form fields with the selected package data
            setTimeout(() => {
                console.log('Updating form fields...');
                
                // Update hidden fields for package information
                const packageIdEl = document.getElementById('ring_package_id');
                const packageNameEl = document.getElementById('ring_package_name');
                const packagePriceEl = document.getElementById('ring_package_price');
                const ringsCountEl = document.getElementById('ring_rings_count');
                
                console.log('Form elements found:', {
                    packageIdEl: !!packageIdEl,
                    packageNameEl: !!packageNameEl,
                    packagePriceEl: !!packagePriceEl,
                    ringsCountEl: !!ringsCountEl
                });
                
                if (packageIdEl) packageIdEl.value = giftId;
                if (packageNameEl) packageNameEl.value = giftTitle;
                if (packagePriceEl) packagePriceEl.value = giftPrice;
                if (ringsCountEl) ringsCountEl.value = giftRingsCount;
                
                // Mark this order as a gift order 
                window.ringOrderIsGift = true;
                window.ringOrderGiftData = {
                    id: giftId,
                    title: giftTitle,
                    price: giftPrice,
                    rings_count: giftRingsCount
                };
                
                // Update form fields
                const totalEl = document.getElementById('tetherprisingnewTotalRings');
                const femaleEl = document.getElementById('tetherprisingnewFemaleRings');
                const maleEl = document.getElementById('tetherprisingnewMaleRings');
                
                console.log('Ring count elements found:', {
                    totalEl: !!totalEl,
                    femaleEl: !!femaleEl,
                    maleEl: !!maleEl
                });
                
                if (totalEl && femaleEl && maleEl) {
                    const ringsCount = parseInt(giftRingsCount) || 2;
                    totalEl.value = ringsCount;
                    femaleEl.value = Math.floor(ringsCount / 2);
                    maleEl.value = ringsCount - Math.floor(ringsCount / 2);
                    
                    console.log('Ring counts updated:', {
                        total: ringsCount,
                        female: Math.floor(ringsCount / 2),
                        male: ringsCount - Math.floor(ringsCount / 2)
                    });
                }
                
                // Update display fields
                const selectedPackageNameEl = document.getElementById('tetherprisingnewSelectedPackageName');
                const packagePriceDisplayEl = document.getElementById('tetherprisingnewPackagePrice');
                const packageRingsDisplayEl = document.getElementById('tetherprisingnewPackageRingsDisplay');
                
                console.log('Display elements found:', {
                    selectedPackageNameEl: !!selectedPackageNameEl,
                    packagePriceDisplayEl: !!packagePriceDisplayEl,
                    packageRingsDisplayEl: !!packageRingsDisplayEl
                });
                
                if (selectedPackageNameEl) selectedPackageNameEl.value = giftTitle;
                if (packagePriceDisplayEl) packagePriceDisplayEl.value = '$' + parseFloat(giftPrice).toFixed(2);
                if (packageRingsDisplayEl) packageRingsDisplayEl.value = giftRingsCount + ' Rings';
                
                // Update package summary
                if (typeof window.tetherprisingnewUpdatePackageSummary === 'function') {
                    window.tetherprisingnewUpdatePackageSummary();
                }
                
                // Initialize payment methods
                if (typeof window.initializePaymentMethods === 'function') {
                    // Reset initialization flags
                    window.paymentMethodsInitialized = false;
                    window.applePayButtonCreated = false;
                    
                    // Wait a bit then initialize
                    setTimeout(() => {
                        window.initializePaymentMethods();
                    }, 500);
                }
                
                console.log('Form fields updated successfully');
            }, 300);
        } else {
            console.error('Ring modal not found');
        }
    };
    
    // Function to open gift form from preheader (for gift orders)
    window.openGiftForm = function(giftId, giftTitle, giftPrice, giftRingsCount) {
        console.log('Opening gift form from preheader:', { giftId, giftTitle, giftPrice, giftRingsCount });
        
        // Set the selected gift data
        window.selectedGiftId = giftId;
        window.selectedGiftPrice = giftPrice;
        
        // Update the gift form title and hidden fields
        const giftFormTitle = document.getElementById('giftFormTitle');
        const giftIdInput = document.getElementById('gift_id');
        
        if (giftFormTitle) {
            giftFormTitle.textContent = `Complete Your Gift - ${giftTitle}`;
        }
        
        if (giftIdInput) {
            giftIdInput.value = giftId;
        }
        
        // Show the gift form section
        const giftFormSection = document.getElementById('giftFormSection');
        if (giftFormSection) {
            giftFormSection.style.display = 'block';
        }
        
        // Hide the package selection section
        const packageSection = document.querySelector('.giftModal-packageSection');
        if (packageSection) {
            packageSection.style.display = 'none';
        }
        
        console.log('Gift form opened successfully');
    };

    // Add back button functionality
    document.addEventListener('DOMContentLoaded', function() {
        const giftFormBack = document.getElementById('giftFormBack');
        if (giftFormBack) {
            giftFormBack.addEventListener('click', function() {
                // Show package selection section
                const packageSection = document.querySelector('.giftModal-packageSection');
                if (packageSection) {
                    packageSection.style.display = 'block';
                }
                
                // Hide gift form section
                const giftFormSection = document.getElementById('giftFormSection');
                if (giftFormSection) {
                    giftFormSection.style.display = 'none';
                }
                
                console.log('Returned to package selection');
            });
        }

        // Add event listener for giftSendButton to open gift modal
        const giftSendButtons = document.querySelectorAll('#giftSendButton');
        giftSendButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                console.log('Gift send button clicked, opening gift modal');
                
                // Open the gift modal overlay
                const giftModal = document.getElementById('giftModalOverlay');
                if (giftModal) {
                    giftModal.style.display = 'block';
                    document.body.style.overflow = 'hidden';
                    console.log('Gift modal opened successfully');
                } else {
                    console.error('Gift modal not found');
                }
            });
        });

        // Add event listener for gift modal close button
        const giftModalClose = document.getElementById('giftModalClose');
        if (giftModalClose) {
            giftModalClose.addEventListener('click', function() {
                console.log('Gift modal close button clicked');
                
                // Close the gift modal
                const giftModal = document.getElementById('giftModalOverlay');
                if (giftModal) {
                    giftModal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                    
                    // Reset to package selection view
                    const packageSection = document.querySelector('.giftModal-packageSection');
                    const giftFormSection = document.getElementById('giftFormSection');
                    
                    if (packageSection) packageSection.style.display = 'block';
                    if (giftFormSection) giftFormSection.style.display = 'none';
                    
                    console.log('Gift modal closed and reset');
                }
            });
        }

        // Close gift modal when clicking outside
        const giftModal = document.getElementById('giftModalOverlay');
        if (giftModal) {
            giftModal.addEventListener('click', function(e) {
                if (e.target === giftModal) {
                    console.log('Clicked outside gift modal, closing');
                    giftModal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                    
                    // Reset to package selection view
                    const packageSection = document.querySelector('.giftModal-packageSection');
                    const giftFormSection = document.getElementById('giftFormSection');
                    
                    if (packageSection) packageSection.style.display = 'block';
                    if (giftFormSection) giftFormSection.style.display = 'none';
                }
            });
        }
    });
    
    const stripe = Stripe("{{ config('services.stripe.key') }}");
    const elements = stripe.elements();
    const cardElement = elements.create("card");
    cardElement.mount("#card-element");



    // Hide other payment buttons when Stripe is selected
    function hideOtherPaymentButtons() {
        const paypalContainer = document.getElementById('paypal-button-container');
        const googlePayWidget = document.getElementById('google-pay-widget');
        const applePayWidget = document.getElementById('apple-pay-widget');

        if (paypalContainer) paypalContainer.style.display = 'none';
        if (googlePayWidget) googlePayWidget.style.display = 'none';
        if (applePayWidget) applePayWidget.style.display = 'none';
    }

    // Show all payment buttons
    function showAllPaymentButtons() {
        const paypalContainer = document.getElementById('paypal-button-container');
        const googlePayWidget = document.getElementById('google-pay-widget');
        const applePayWidget = document.getElementById('apple-pay-widget');

        if (paypalContainer) paypalContainer.style.display = 'block';
        if (googlePayWidget) googlePayWidget.style.display = 'block';
        if (applePayWidget) applePayWidget.style.display = 'block';
    }

    let selectedGiftId = null;
    let selectedGiftPrice = null;

   /* const giftCards = document.querySelectorAll(".giftPackage-card");
    giftCards.forEach(card => {
        card.addEventListener("click", () => {
            selectedGiftId = card.dataset.giftId;
            selectedGiftPrice = card.dataset.giftPrice;
            console.log("Gift selected", { selectedGiftId, selectedGiftPrice });
            
            document.querySelector("#gift_id").value = selectedGiftId;
            document.querySelector("#giftFormSection input[name='gift_id']").value = selectedGiftId;
            document.querySelector("#giftPackageSection").style.display = "none";
            document.querySelector("#giftFormSection").style.display = "block";

            
            if (window.google && window.google.payments) {
                const paymentsClient = new google.payments.api.PaymentsClient({environment: 'TEST'});
                const button = paymentsClient.createButton({
                    onClick: function() {
                        const paymentDataRequest = {
                            apiVersion: 2,
                            apiVersionMinor: 0,
                            allowedPaymentMethods: [{
                                type: 'CARD',
                                parameters: {
                                    allowedAuthMethods: ['PAN_ONLY', 'CRYPTOGRAM_3DS'],
                                    allowedCardNetworks: ['MASTERCARD', 'VISA'],
                                },
                                tokenizationSpecification: {
                                    type: 'PAYMENT_GATEWAY',
                                    parameters: {
                                        gateway: 'stripe',
                                        'stripe:version': '2020-08-27',
                                        'stripe:publishableKey': "{{ config('services.stripe.key') }}"
                                    }
                                }
                            }],
                            merchantInfo: {
                                merchantName: 'TetherHeart',
                            },
                            transactionInfo: {
                                totalPriceStatus: 'FINAL',
                                totalPrice: selectedGiftPrice,
                                currencyCode: 'USD',
                            },
                        };
                        paymentsClient.loadPaymentData(paymentDataRequest)
                            .then(function(paymentData) {
                                // Send token and form data to backend
                                const form = document.getElementById("giftForm");
                                // Validate required fields before submitting
                                const requiredFields = [
                                    form.querySelector('[name="recipientName"]'),
                                    form.querySelector('[name="recipientEmail"]'),
                                    form.querySelector('[name="deliveryDate"]'),
                                    form.querySelector('[name="senderName"]'),
                                    form.querySelector('[name="senderEmail"]'),
                                    form.querySelector('[name="billingAddress"]'),
                                ];
                                let missing = false;
                                requiredFields.forEach(field => {
                                    if (!field || !field.value.trim()) {
                                        missing = true;
                                        if (field && field.style) field.style.borderColor = 'red';
                                    } else {
                                        if (field && field.style) field.style.borderColor = '';
                                    }
                                });
                                if (missing) {
                                    showSweetAlert({
                                        title: 'Missing Information',
                                        text: 'Please fill in all required fields.',
                                        icon: 'warning',
                                        confirmButtonText: 'OK'
                                    });
                                    return;
                                }

                                // Map frontend field names to backend field names
                                const formData = new FormData();
                                formData.append("gift_id", selectedGiftId);
                                formData.append("price", selectedGiftPrice);
                                formData.append("payment_method", "google_pay");
                                let tokenRaw = paymentData.paymentMethodData.tokenizationData.token;
                                let tokenId = tokenRaw;
                                try {
                                    // If tokenRaw is a JSON string, parse and extract id
                                    const parsed = JSON.parse(tokenRaw);
                                    if (parsed && parsed.id) {
                                        tokenId = parsed.id;
                                    }
                                } catch (e) {
                                    // If not JSON, use as is
                                }
                                formData.append("payment_method_id", tokenId);
                                formData.append("recipientName", form.querySelector('[name="recipientName"]').value);
                                formData.append("recipientEmail", form.querySelector('[name="recipientEmail"]').value);
                                formData.append("recipientPhone", form.querySelector('[name="recipientPhone"]').value);
                                formData.append("deliveryDate", form.querySelector('[name="deliveryDate"]').value);
                                formData.append("senderName", form.querySelector('[name="senderName"]').value);
                                formData.append("senderEmail", form.querySelector('[name="senderEmail"]').value);
                                formData.append("message", form.querySelector('[name="message"]').value);
                                formData.append("billingAddress", form.querySelector('[name="billingAddress"]').value);

                                fetch("{{ route('gift.checkout') }}", {
                                    method: "POST",
                                    headers: {
                                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                                    },
                                    body: formData,
                                })
                                .then(res => res.json())
                                .then(data => {
                                    if (data.errors) {
                                        // Laravel validation errors
                                        let errorMsg = '';
                                        for (const key in data.errors) {
                                            errorMsg += data.errors[key].join(' ') + '\n';
                                        }
                                        showSweetAlert({
                                            title: 'Validation Error',
                                            text: errorMsg,
                                            icon: 'error',
                                            confirmButtonText: 'OK'
                                        });
                                        return;
                                    }
                                    if (data.success) {
                                        showSuccessAndCloseModal();
                                    } else {
                                        showSweetAlert({
                                            title: 'Payment Failed',
                                            text: data.message || 'Payment failed.',
                                            icon: 'error',
                                            confirmButtonText: 'OK'
                                        });
                                    }
                                })
                                .catch(err => {
                                    showSweetAlert({
                                        title: 'Payment Error',
                                        text: err.message || 'Payment error.',
                                        icon: 'error',
                                        confirmButtonText: 'OK'
                                    });
                                });
                            })
                            .catch(function(err) {
                                console.error('Google Pay Error:', err);
                                showSweetAlert({
                                    title: 'Google Pay Failed',
                                    text: err.statusMessage || 'Google Pay failed.',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            });
                    },
                    buttonColor: 'black',
                    buttonType: 'long',
                });
                const gpayWidgetContainer = document.getElementById('google-pay-widget');
                if (gpayWidgetContainer) {
                    gpayWidgetContainer.innerHTML = '';
                    gpayWidgetContainer.appendChild(button);
                }
            }
        });
    }); */

    // --- Payment Request Button (Google Pay / Apple Pay)
    const paymentRequest = stripe.paymentRequest({
        country: "US",
        currency: "usd",
        total: {
            label: "Gift Package",
            amount: 0, // Updated dynamically later
        },
        requestPayerName: true,
        requestPayerEmail: true,
    });

    const prButton = elements.create("paymentRequestButton", {
        paymentRequest: paymentRequest,
    });

    paymentRequest.canMakePayment().then(function (result) {
        console.log('Stripe canMakePayment() result:', result);
        const applePayWidget = document.getElementById('apple-pay-widget');
        if (result && (result.applePay || result.googlePay)) {
            prButton.mount("#payment-request-button");
            if (applePayWidget) {
                applePayWidget.style.display = 'block';
            }
        } else {
            if (applePayWidget) {
                applePayWidget.innerHTML = '<div style="color: #888; padding: 8px 0;">Apple Pay/Google Pay is not available on this device/browser. Please use Safari on an Apple device with Apple Pay set up, or Chrome with Google Pay.</div>';
            }
        }
    });

    paymentRequest.on("paymentmethod", async (ev) => {
        const priceInCents = Math.round(parseFloat(selectedGiftPrice) * 100);
        console.log("Google/Apple Pay initiated", { selectedGiftId, selectedGiftPrice, paymentMethodId: ev.paymentMethod.id });

        // Validate required fields before submitting
        const form = document.getElementById("giftForm");
        const requiredFields = [
            form.querySelector('[name="recipientName"]'),
            form.querySelector('[name="recipientEmail"]'),
            form.querySelector('[name="deliveryDate"]'),
            form.querySelector('[name="senderName"]'),
            form.querySelector('[name="senderEmail"]'),
            form.querySelector('[name="billingAddress"]'),
        ];
        let missing = false;
        requiredFields.forEach(field => {
            if (!field || !field.value.trim()) {
                missing = true;
                if (field && field.style) field.style.borderColor = 'red';
            } else {
                if (field && field.style) field.style.borderColor = '';
            }
        });
        if (missing) {
            showSweetAlert({
                title: 'Missing Information',
                text: 'Please fill in all required fields.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
            ev.complete("fail");
            return;
        }

        // Map frontend field names to backend field names
        const formData = new FormData();
        formData.append("gift_id", selectedGiftId);
        formData.append("price", selectedGiftPrice);
        formData.append("payment_method", "google_apple_pay");
        formData.append("payment_method_id", ev.paymentMethod.id);
        formData.append("recipientName", form.querySelector('[name="recipientName"]').value);
        formData.append("recipientEmail", form.querySelector('[name="recipientEmail"]').value);
        formData.append("recipientPhone", form.querySelector('[name="recipientPhone"]').value);
        formData.append("deliveryDate", form.querySelector('[name="deliveryDate"]').value);
        formData.append("senderName", form.querySelector('[name="senderName"]').value);
        formData.append("senderEmail", form.querySelector('[name="senderEmail"]').value);
        formData.append("message", form.querySelector('[name="message"]').value);
        formData.append("billingAddress", form.querySelector('[name="billingAddress"]').value);

        try {
            const res = await fetch("{{ route('gift.checkout') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                },
                body: formData,
            });

            let data;
            try {
                data = await res.json();
            } catch (err) {
                Swal.fire({
                    title: 'Server Error',
                    text: 'Could not parse server response.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                ev.complete("fail");
                return;
            }
            console.log("Payment response", data);

            if (data.errors) {
                // Laravel validation errors
                let errorMsg = '';
                for (const key in data.errors) {
                    errorMsg += data.errors[key].join(' ') + '\n';
                }
                showSweetAlert({
                    title: 'Validation Error',
                    text: errorMsg,
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                ev.complete("fail");
                return;
            }

            if (data.requires_action) {
                const result = await stripe.confirmCardPayment(data.payment_intent_client_secret);
                if (result.error) {
                    ev.complete("fail");
                    alert(result.error.message);
                    return;
                }
            }

            if (data.success) {
                ev.complete("success");
                showSuccessAndCloseModal();
            } else {
                ev.complete("fail");
                showSweetAlert({
                    title: 'Payment Failed',
                    text: data.message || 'Payment failed.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        } catch (err) {
            console.error("Payment Request Error:", err);
            ev.complete("fail");
            showSweetAlert({
                title: 'Payment Error',
                text: err.message || 'Payment processing failed.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }
    });

    // Remove duplicate Google Pay code - only keep the one in the gift card click handler
    // The Google Pay button will be rendered when a gift is selected
    
    // Add event listeners for payment method selection
    // Show Stripe button when card element is focused or clicked
    cardElement.on('focus', function() {
        document.getElementById('stripePaymentSection').style.display = 'block';
        hideOtherPaymentButtons();
    });

    // Hide Stripe button when other payment methods are clicked
    document.addEventListener('click', function(e) {
        if (e.target.closest('#paypal-button-container') ||
            e.target.closest('#google-pay-widget') ||
            e.target.closest('#apple-pay-widget')) {
            document.getElementById('stripePaymentSection').style.display = 'none';
            showAllPaymentButtons();
        }
    });

    // Show Stripe button when clicking on card element area
    document.addEventListener('click', function(e) {
        if (e.target.closest('#card-element') || e.target.closest('#stripePaymentSection')) {
            document.getElementById('stripePaymentSection').style.display = 'block';
            hideOtherPaymentButtons();
        }
    });

    // Prevent form submission (since we have separate buttons for each payment method)
    const form = document.getElementById("giftForm");
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        // Form submission is handled by individual payment buttons
});
});
</script>
