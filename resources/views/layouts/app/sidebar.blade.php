<!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
          <div>
            <div class="logo-wrapper">
              <a href="index.html">
                <!-- <h6> -->
                Tether Heart
                <!-- </h6> -->
                <!-- <img class="img-fluid for-light" src="" alt="">
                <img class="img-fluid for-dark" src="" alt=""> -->

              </a>
              <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('AdminAssets/images/logo/logo-icon.png')}}" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="index.html"><img class="img-fluid" src="{{asset('AdminAssets/images/logo/logo-icon.png')}}" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="pin-title sidebar-main-title">
                    <div>
                      <h6>Pinned</h6>
                    </div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-1">General</h6>
                    </div>
                  </li>



             <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="{{route('admin.dashboard')}}">
                      <svg class="stroke-icon">
                        <use href="{{asset('AdminAssets/svg/icon-sprite.svg#stroke-home')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                          <use href="{{asset('AdminAssets/svg/icon-sprite.svg#fill-home')}}"></use>
                      </svg><span>Dashboard</span></a></li>


                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i>
                    {{-- <label class="badge badge-light-primary">13</label> --}}
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="{{asset('AdminAssets/svg/icon-sprite.svg#stroke-widget')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{asset('AdminAssets/svg/icon-sprite.svg#fill-widget')}}"></use>
                      </svg><span class="lan-3">CMS Crud</span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-4" href="{{route('admin.faq.index')}}">FAQs</a></li>
                    <!--  <li><a class="lan-5" href="{{route('admin.newsletter.index')}}">Newsletter</a></li> -->
                      <li><a class="lan-5" href="{{route('admin.newsbar.index')}}">Newsbar</a></li>
                      <li><a class="lan-5" href="{{route('admin.blog.index')}}">Blog</a></li>
                      <li><a class="lan-5" href="{{route('admin.wellness.index')}}">Wellness</a></li>
                      <li><a class="lan-5" href="{{route('admin.tether-work.index')}}">Tether Work</a></li>


                    </ul>
                  </li>

                   <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i>
                    {{-- <label class="badge badge-light-primary">13</label> --}}
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="{{asset('AdminAssets/svg/icon-sprite.svg#stroke-social')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{asset('AdminAssets/svg/icon-sprite.svg#fill-social')}}"></use>
                      </svg><span class="lan-3">CMS Pages</span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-4" href="{{route('admin.website.index')}}">Home Page</a></li>
                      <li><a class="lan-4" href="{{route('admin.contact.index')}}">Contact Page</a></li>
                      <li><a class="lan-4" href="{{route('admin.about.index')}}">About Page</a></li>



                    </ul>
                  </li>
                     <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i>
                    {{-- <label class="badge badge-light-primary">13</label> --}}
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="{{asset('AdminAssets/svg/icon-sprite.svg#stroke-knowledgebase')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{asset('AdminAssets/svg/icon-sprite.svg#fill-knowledgebase')}}"></use>
                      </svg><span class="lan-3">Submission</span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-4" href="{{route('admin.newsletterlist')}}">Newsletter</a></li>
                      <li><a class="lan-4" href="{{route('admin.contactlist')}}">Contact</a></li>




                    </ul>
                  </li>


                          <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i>
                    {{-- <label class="badge badge-light-primary">13</label> --}}
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="{{asset('AdminAssets/svg/icon-sprite.svg#stroke-knowledgebase')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{asset('AdminAssets/svg/icon-sprite.svg#fill-knowledgebase')}}"></use>
                      </svg><span class="lan-3">Orders</span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-4" href="{{route('admin.gift.orders')}}">Gifts</a></li>
                         <li><a class="lan-4" href="{{route('admin.ring.orders')}}">Rings</a></li>
                   




                    </ul>
                  </li>

                   <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="{{route('admin.gift.index')}}">
                      <svg class="stroke-icon">
                        <use href="{{asset('AdminAssets/svg/icon-sprite.svg#stroke-home')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                          <use href="{{asset('AdminAssets/svg/icon-sprite.svg#fill-home')}}"></use>
                      </svg><span>Gifts</span></a></li>



                   <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="{{route('admin.ring.index')}}">
                      <svg class="stroke-icon">
                        <use href="{{asset('AdminAssets/svg/icon-sprite.svg#stroke-home')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                          <use href="{{asset('AdminAssets/svg/icon-sprite.svg#fill-home')}}"></use>
                      </svg><span>Rings</span></a></li>



                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
