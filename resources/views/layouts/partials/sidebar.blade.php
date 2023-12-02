<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.html" class="text-nowrap logo-img">
                <img src="{{asset('images/app/arnoapp.png')}}" width="200" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/home" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Menu</span>
                </li>
                
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/user" aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Users</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/article" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Article</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/creator" aria-expanded="false">
                        <span>
                            <i class="ti ti-pencil"></i>
                        </span>
                        <span class="hide-menu">Creators</span>
                    </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="/setting" aria-expanded="false">
                      <span>
                          <i class="ti ti-settings-2"></i>
                      </span>
                      <span class="hide-menu">Site Setting</span>
                  </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/about" aria-expanded="false">
                    <span>
                        <i class="ti ti-info-circle"></i>
                    </span>
                    <span class="hide-menu">About</span>
                </a>
            </li>
               
            </ul>
           
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
