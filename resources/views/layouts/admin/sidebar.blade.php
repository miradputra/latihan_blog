<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">MY BLOG</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">MB</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ (request()->is('admin')) ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class={{ (request()->is('admin')) ? 'active' : '' }}><a class="nav-link" href="">General Dashboard</a></li>
                    <li><a class="nav-link" href="">Ecommerce Dashboard</a></li>
                </ul>
            </li>
            <li class="menu-header">Manage</li>
            <li class={{ (request()->is('admin/users')) ? 'active' : '' }}><a class="nav-link" href="{{ url('/admin/users') }}"><i class="fas fa-users"></i> <span>Users</span></a></li>
            <li class={{ (request()->is('admin/artikel')) ? 'active' : '' }}><a class="nav-link" href="{{ url('/admin/artikel') }}"><i class="fas fa-scroll"></i> <span>Artikel</span></a></li>
            <li
            @if (request()->is('admin/kategori'))
            class="dropdown active"
            @elseif (request()->is('admin/tag'))
            class="dropdown active"
            @elseif (request()->is('admin/days'))
            class="dropdown active"
            @endif>
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Komponen Artikel</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ (request()->is('admin/kategori')) ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admin/kategori') }}">Kategori</a></li>
                    <li class="{{ (request()->is('admin/tag')) ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admin/tag') }}">Tag</a></li>
                </ul>
            </li>

            <li class={{ (request()->is('admin/episodes')) ? 'active' : '' }}><a class="nav-link" href="{{ url('/admin/episodes') }}"><i class="fas fa-file-invoice"></i> <span>Episodes</span></a></li>

            <li class={{ (request()->is('admin/comments')) ? 'active' : '' }}><a class="nav-link" href="{{ url('/admin/comments') }}"><i class="fas fa-comment-alt"></i> <span>Comments</span></a></li>

            <li class="menu-header">Stisla</li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
                <ul class="dropdown-menu">
                <li><a class="nav-link" href="components-article.html">Article</a></li>                <li><a class="nav-link beep beep-sidebar" href="components-avatar.html">Avatar</a></li>                <li><a class="nav-link" href="components-chat-box.html">Chat Box</a></li>                <li><a class="nav-link beep beep-sidebar" href="components-empty-state.html">Empty State</a></li>                <li><a class="nav-link" href="components-gallery.html">Gallery</a></li>
                <li><a class="nav-link beep beep-sidebar" href="components-hero.html">Hero</a></li>                <li><a class="nav-link" href="components-multiple-upload.html">Multiple Upload</a></li>
                <li><a class="nav-link beep beep-sidebar" href="components-pricing.html">Pricing</a></li>                <li><a class="nav-link" href="components-statistic.html">Statistic</a></li>                <li><a class="nav-link" href="components-tab.html">Tab</a></li>
                <li><a class="nav-link" href="components-table.html">Table</a></li>
                <li><a class="nav-link" href="components-user.html">User</a></li>                <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Wizard</a></li>              </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
                <ul class="dropdown-menu">
                <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
                <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
                <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a>
                <ul class="dropdown-menu">
                    <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                    <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                    <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                    <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                    <li><a href="gmaps-marker.html">Marker</a></li>
                    <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                    <li><a href="gmaps-route.html">Route</a></li>
                    <li><a href="gmaps-simple.html">Simple</a></li>
                </ul>
            </li>
            <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="modules-calendar.html">Calendar</a></li>
                <li><a class="nav-link" href="modules-chartjs.html">ChartJS</a></li>
                <li><a class="nav-link" href="modules-datatables.html">DataTables</a></li>
                <li><a class="nav-link" href="modules-flag.html">Flag</a></li>
                <li><a class="nav-link" href="modules-font-awesome.html">Font Awesome</a></li>
                <li><a class="nav-link" href="modules-ion-icons.html">Ion Icons</a></li>
                <li><a class="nav-link" href="modules-owl-carousel.html">Owl Carousel</a></li>
                <li><a class="nav-link" href="modules-sparkline.html">Sparkline</a></li>
                <li><a class="nav-link" href="modules-sweet-alert.html">Sweet Alert</a></li>
                <li><a class="nav-link" href="modules-toastr.html">Toastr</a></li>
                <li><a class="nav-link" href="modules-vector-map.html">Vector Map</a></li>
                <li><a class="nav-link" href="modules-weather-icon.html">Weather Icon</a></li>
            </ul>
            </li>
            <li class="menu-header">Pages</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
                <ul class="dropdown-menu">
                <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                <li><a href="auth-login.html">Login</a></li>
                <li><a href="auth-register.html">Register</a></li>
                <li><a href="auth-reset-password.html">Reset Password</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
                <ul class="dropdown-menu">
                <li><a class="nav-link" href="errors-503.html">503</a></li>
                <li><a class="nav-link" href="errors-403.html">403</a></li>
                <li><a class="nav-link" href="errors-404.html">404</a></li>
                <li><a class="nav-link" href="errors-500.html">500</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
                <ul class="dropdown-menu">
                <li><a class="nav-link" href="features-activities.html">Activities</a></li>
                <li><a class="nav-link" href="features-post-create.html">Post Create</a></li>
                <li><a class="nav-link" href="features-posts.html">Posts</a></li>
                <li><a class="nav-link" href="features-profile.html">Profile</a></li>
                <li><a class="nav-link" href="features-settings.html">Settings</a></li>
                <li><a class="nav-link" href="features-setting-detail.html">Setting Detail</a></li>
                <li><a class="nav-link" href="features-tickets.html">Tickets</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
                <ul class="dropdown-menu">
                <li><a href="utilities-contact.html">Contact</a></li>
                <li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
                <li><a href="utilities-subscribe.html">Subscribe</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
        </ul>
    </aside>
</div>
