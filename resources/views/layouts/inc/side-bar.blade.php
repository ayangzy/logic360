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
                
                {{-- <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menu</h4>
                </li>

                <li class="nav-item {!! Request::is('settings') || Request::is('categories') ? 'active' : '' !!}">

                <li class="nav-item {!! Request::is('members*') ? 'active' : '' !!}">
                    <a href="{{ route('member.index') }}">
                        <i class="fas fa-users"></i>
                        <p>Members</p>
                    </a>
                </li>

                <li class="nav-item {!! Request::is('member-transactions*') ?  'active' : '' !!}">
                    <a href="{{ route('memberTransaction.index') }}">
                        <i class="fas fa-money-bill"></i>
                        <p>Savings</p>
                    </a>
                </li>

                <li class="nav-item {!! Request::is('loans*') ?  'active' : '' !!}">
                    <a href="{{ route('loan.index') }}">
                        <i class="fas fa-money-bill-wave-alt"></i>
                        <p>Loan Manager</p>
                    </a>
                </li>
               
                <li class="nav-item {!! Request::is('transfer') || Request::is('transactions') ? 'active' : '' !!}">
                    <a data-toggle="collapse" href="#banking">
                        <i class="fas fa-briefcase"></i>
                        <p>Book Keeping</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {!! Request::is('transfer') || Request::is('transactions') 
                    || Request::is('books') || Request::is('assetdepreciations') || Request::is('closing-balance') ? 'show' : '' !!}" id="banking">
                        <ul class="nav nav-collapse">
                           
                            <li class ="{!! Request::is('books')  || Request::is('assetdepreciations') || Request::is('closing-balance') ? 'active': '' !!}">
                                <a href="{{ route('book.index') }}">
                                    <span class="sub-item">Closing the Books</span>
                                </a>
                            </li>
                           

                            <li class ="{!! Request::is('transactions') ? 'active': '' !!}">
                                <a href="{{ route('transaction.index') }}">
                                    <span class="sub-item">Transactions</span>
                                </a>
                            </li>

                        
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ Request::is('alertbacklogs*') ? 'active' : ''}}">
                    <a href="{{ route('alertbacklog.index') }}">
                        <i class="fas fa-envelope"></i>
                        <p>Alert Backlog</p>
                    </a>
                </li>
                <li class="nav-item {!! Request::is('users') || Request::is('roles') || Request::is('permissions') ? 'active' : '' !!}">
                    <a data-toggle="collapse" href="#user-manager">
                        <i class="fas fa-users"></i>
                        <p>User Manager</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {!! Request::is('users') || Request::is('roles') || Request::is('permissions') ? 'show' : '' !!}" id="user-manager">
                        <ul class="nav nav-collapse">
                            <li class="{!! Request::is('users') ? 'active' : '' !!}">
                                <a href="{{ route('userAccess.index') }}">
                                    <span class="sub-item">Users</span>
                                </a>
                            </li>

                            <li class="{!! Request::is('roles') ? 'active' : '' !!}">
                                <a href="{{ route('role.index') }}">
                                    <span class="sub-item">Roles</span>
                                </a>
                            </li>

                            <li class="{!! Request::is('permissions') ? 'active' : '' !!}">
                                <a href="{{ route('permission.index') }}">
                                    <span class="sub-item">Permissions</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
               
                <li class="nav-item {{ Request::is('reports*') ? 'active' : ''}}">
                    <a href="{{ route('report.index') }}">
                        <i class="fas fa-chart-pie"></i>
                        <p>Reports</p>
                    </a>
                </li> --}}
               
                <li class="nav-item">
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
