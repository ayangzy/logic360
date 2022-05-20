<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <div class="avatar-sm float-left mr-2">
                        <img src="{{ asset('../assets/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
                    </div>
                </div>
                <div class="info">
                    @if(Auth::check())
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->first_name.' '.  Auth::user()->last_name}}
                           
                            <span class="user-level">{{ str_replace("_", " ", Auth::user()->role) }}</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    @endif
                   
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {!! Request::is('/') ? 'active' : '' !!}">
                    <a href="{{ route('home') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>

                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menu</h4>
                </li>

                <li class="nav-item {!! Request::is('categories*') ? 'active' : '' !!}">
                    <a href="{{ route('category.index') }}">
                        <i class="fas fa-sitemap"></i>
                        <p>Categories</p>
                    </a>
                </li>

                <li class="nav-item {!! Request::is('locations*') ? 'active' : '' !!}">
                    <a href="{{ route('location.index') }}">
                        <i class="fas fa-globe"></i>
                        <p>Locations</p>
                    </a>
                </li>

                <li class="nav-item {!! Request::is('markets*') ? 'active' : '' !!}">
                    <a href="{{ route('market.index') }}">
                        <i class="fas fa-dolly"></i>
                        <p>Markets</p>
                    </a>
                </li>

                <li class="nav-item {!! Request::is('products*') ? 'active' : '' !!}">
                    <a href="{{ route('product.index') }}">
                        <i class="fas fa-donate"></i>
                        <p>Products</p>
                    </a>
                </li>
                
               
                <li class="nav-item mt-5">
                    <a href="route('logout')" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="btn btn-xs btn-danger btn-sm">
                        <i class="fas fa-sign-out-alt text-white"></i>
                        <p class="text-white">Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
