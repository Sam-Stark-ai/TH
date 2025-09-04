@extends('layouts.frontend.master')


@section('css')
@endsection

@section('content')


    <!--============= Header Section Ends Here =============-->
    <section class="page-header single-header blog-single-header bg_img oh" data-background="assets/images/blog/page-header.jpg')}}">
        <div class="bottom-shape">
            <img src="{{asset('FrontendAssets/css/img/page-header2.png')}}" alt="css">
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->



    <!--============= Blog Section Starts Here =============-->
    <section class="blog-single-section padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <article>
                        <div class="post-details">
                            <div class="post-inner">
                                <div class="post-header">
                                    <div class="meta-post">
                                        <a href="#0" class="read">2 days ago</a>
                                        <a href="#0" class="read">3 min read</a>
                                    </div>
                                    <h3 class="title">
                                      {{$blog->title}}
                                    </h3>
                                </div>
                                <div class="post-content">
                                    <div class="entry-meta">
                                        <div class="thumb">
                                            <a href="#0">
                                                <img src="{{asset('FrontendAssets/images/blog/author2.png')}}" alt="blog">
                                            </a>
                                        </div>
                                        <a href="#0" class="comment">
                                            <i class="flaticon-chat-1"></i>
                                            <span>30</span>
                                        </a>
                                        {{-- <a href="#0" class="comment">
                                            <i class="flaticon-share"></i>
                                            <span>22</span>
                                        </a> --}}
                                    </div>
                                    <div class="entry-content">
                                        @php
    $words = explode(' ', strip_tags($blog->content));
    $half = ceil(count($words) / 2);
    $firstHalf = implode(' ', array_slice($words, 0, $half));
    $secondHalf = implode(' ', array_slice($words, $half));
@endphp
                                        <p>
                                        {!! $firstHalf !!}
                                        </p>

                                        <img src="{{asset('storage/'.$blog->image)}}" alt="blog">
                                        <p>
                                            {!! $secondHalf !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tags-area">
                                <div class="tags">
                                    <span>
                                        Tags :
                                    </span>
                                    <div class="tags-item">
                                        <a href="#0">  {{$blog->tags}} </a>

                                    </div>
                                </div>
                                <ul class="social-icons">
                                    <li>
                                        <a href="#0">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="active">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-comment">
                            <h5 class="title">comments ({{ $blog->comments->count() }})</h5>

                            @if(session('success'))
                                <div class="alert alert-success" style="background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger" style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger" style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                                    <ul style="margin: 0; padding-left: 20px;">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <ul class="comment-area">
                                @if($blog->comments->count() > 0)
                                    @foreach($blog->comments as $comment)
                                        <li>
                                            <div class="blog-item">
                                                <div class="blog-thumb">
                                                    <a href="#0">
                                                        <img src="{{asset('FrontendAssets/images/blog/author2.png')}}" alt="blog">
                                                    </a>
                                                </div>
                                                <div class="blog-thumb-info">
                                                    <span>{{ $comment->created_at->diffForHumans() }}</span>
                                                    <h6 class="title"><a href="#0">{{ $comment->name }}</a></h6>
                                                </div>
                                                <div class="blog-content">
                                                    <p>{{ $comment->comment }}</p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                @else
                                    <li>
                                        <div class="blog-item">
                                            <div class="blog-content">
                                                <p style="text-align: center; color: #666; font-style: italic;">No comments yet. Be the first to comment!</p>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            </ul>
                            <div class="leave-comment">
                                <h5 class="title">leave comment</h5>
<form class="blog-form" action="{{route('comment.store')}}" method="POST">
    @csrf
    <input type="hidden" name="blog_id" value="{{$blog->id}}">
    <div class="form-group">
        <input type="text" placeholder="Enter Your Full Name" required name="name" value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <input type="email" placeholder="Enter Your Email Address" required name="email" value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <textarea placeholder="Write A Message" required name="comment">{{ old('comment') }}</textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Submit Now">
    </div>
</form>
                            </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--============= Blog Section Ends Here =============-->

    

@endsection


@section('script')
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
                                  They will receive it on ${giftData.deliveryDate}.
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
                        const xchatFixedContainer = document.getElementById('xchatFixedContainer');
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
                            "Let me provide you with the information you need. 📋",
                            "I'd be happy to help you with that! Here's my suggestion... ✨",
                            "That's an interesting point. Let me explain... 🎯",
                            "I see what you mean. Here's how we can solve this... 🔧",
                            "Great choice! This is definitely something I can help with. 🌟",
                            "I'm glad you asked! This is one of my favorite topics. 💬",
                            "Perfect timing! I have just the right information for you. ⏰"
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
                                const response = xchatBotResponses[Math.floor(Math.random() * xchatBotResponses.length)];
                                xchatAddMessage(response, 'bot');
                            }, 1500 + Math.random() * 2000);
                        }

                        // Add message to chat
                        function xchatAddMessage(text, sender) {
                            const messageDiv = document.createElement('div');
                            messageDiv.className = `xchat-message xchat-${sender}`;

                            const currentTime = new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});

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
                                        response = "We offer a wide range of services including web development, mobile apps, AI solutions, and digital marketing. Would you like to know more about any specific service? 🚀";
                                    } else if (message.includes('help')) {
                                        response = "I'm here to help! You can ask me about our services, pricing, support, or anything else. What specific information are you looking for? 🤝";
                                    } else if (message.includes('support')) {
                                        response = "Our support team is available 24/7! You can reach us via email at support@company.com or call us at +1-234-567-8900. How can we assist you today? 📞";
                                    } else {
                                        response = xchatBotResponses[Math.floor(Math.random() * xchatBotResponses.length)];
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
                                    "Looking for something specific? Let me know! 🔍",
                                    "New features available! Want to learn more? ✨"
                                ];
                                const message = proactiveMessages[Math.floor(Math.random() * proactiveMessages.length)];
                                xchatAddMessage(message, 'bot');
                            }
                        }, 30000); // Every 30 seconds

                        // Close chat when clicking outside
                        document.addEventListener('click', (e) => {
                            if (xchatIsOpen && !xchatWindow.contains(e.target) && !xchatMainBtn.contains(e.target)) {
                                xchatToggleChat();
                            }
                        });

                        // Initial bot messages
                        setTimeout(() => {
                            xchatAddMessage("I see you're exploring our platform! Feel free to ask me anything. 🌟", 'bot');
                        }, 3000);

                        setTimeout(() => {
                            xchatAddMessage("Pro tip: I can help you with product info, pricing, support, and more! 💡", 'bot');
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
                            xpurpleSignupBtn.addEventListener('click', () => xpurpleOpenModal(xpurpleSignupModal));
                            xpurpleLoginBtn.addEventListener('click', () => xpurpleOpenModal(xpurpleLoginModal));

                            // Close buttons
                            document.getElementById('xpurpleSignupClose').addEventListener('click', () => xpurpleCloseModal(xpurpleSignupModal));
                            document.getElementById('xpurpleLoginClose').addEventListener('click', () => xpurpleCloseModal(xpurpleLoginModal));

                            // Switch between modals
                            document.getElementById('xpurpleToLogin').addEventListener('click', (e) => {
                                e.preventDefault();
                                xpurpleSwitchModal(xpurpleSignupModal, xpurpleLoginModal);
                            });

                            document.getElementById('xpurpleToSignup').addEventListener('click', (e) => {
                                e.preventDefault();
                                xpurpleSwitchModal(xpurpleLoginModal, xpurpleSignupModal);
                            });

                            // Close modals on overlay click
                            [xpurpleSignupModal, xpurpleLoginModal].forEach(modal => {
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

                            // Form submissions (demo)
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
                            [xpurpleSignupBtn, xpurpleLoginBtn].forEach(btn => {
                                btn.addEventListener('click', () => {
                                    xpurpleDropdown.classList.remove('xpurple-show');
                                });
                            });
    </script>

    @endsection
