<nav class="pc-sidebar">
    <div class="navbar-wrapper">

        <div class="m-header">
            <a href="#!" class="b-brand text-primary">
                <img src="{{ asset('assets/images/light_logo.png') }}"alt="" style="width:140px;" class="logo">
            </a>
        </div>

        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                    <i class="ph-duotone ph-gauge"></i>
                </li>
                {{-- 
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-gauge"></i>
                        </span>
                        <span class="pc-mtext">Dashboard</span>
                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        <span class="pc-badge">2</span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="{{ route('analytics.index') }}">Analytics</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('analytics.statistic') }}">Statistics</a>
                        </li>
                    </ul>
                </li>

                <li class="pc-item pc-caption">
                    <label>Widget</label>
                    <i class="ph-duotone ph-chart-pie"></i>
                </li> --}}

                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-steps"></i>
                        </span>
                        <span class="pc-mtext">Bo'limlar</span>
                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        <span class="pc-badge">1</span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="{{ route('products.index') }}">
                                Investorlar uchun
                            </a>
                        </li>

                   
                    </ul>
                </li>

                @if (auth()->user()->roles[0]->name == 'Super Admin')
                    {{-- <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph-duotone ph-map-pin-line"></i>
                            </span>
                            <span class="pc-mtext">MANZILLAR</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                            <span class="pc-badge">3</span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item">
                                <a class="pc-link" href="{{ route('regionIndex') }}">
                                    HUDUD
                                </a>
                            </li>
                            <li class="pc-item">
                                <a class="pc-link" href="{{ route('districtIndex') }}">
                                    TUMAN
                                </a>
                            </li>
                            <li class="pc-item">
                                <a class="pc-link" href="{{ route('streetIndex') }}">
                                    MFY
                                </a>
                            </li>
                        </ul>
                    </li> --}}


{{-- 
                    <li class="pc-item pc-caption">
                        <label>Application</label>
                        <i class="ph-duotone ph-buildings"></i>
                    </li>
 --}}


                    {{-- <li class="pc-item">
                        <a href="{{ route('calendar.index') }}" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph-duotone ph-calendar-blank"></i>
                            </span>
                            <span class="pc-mtext">Calendar</span></a>
                    </li> --}}


                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph-duotone ph-address-book"></i>
                            </span>
                            <span class="pc-mtext">Boshqarish</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                            <span class="pc-badge">3</span>
                        </a>
                        <ul class="pc-submenu">

                            <li class="pc-item">
                                <a class="pc-link" href="{{ route('permissionIndex') }}"
                                    class="{{ Request::is('permission*') ? 'mm-active' : '' }}">
                                    <i class="bx bxs-key" style="font-size: 14px; min-width: auto;"></i>
                                    @lang('cruds.permission.title_singular')
                                </a>
                            </li>
                            <li class="pc-item">
                                <a class="pc-link" href="{{ route('roleIndex') }}"
                                    class="{{ Request::is('role*') ? 'mm-active' : '' }}">

                                    <i class="bx bxs-lock-alt" style="font-size: 14px; min-width: auto;"></i>
                                    @lang('cruds.role.fields.roles')
                                </a>
                            </li>

                            <li class="pc-item">
                                <a class="pc-link" href="{{ route('userIndex') }}"
                                    class="{{ Request::is('user*') ? 'mm-active' : '' }}">
                                    <!-- <i class="fas fa-user-friends"></i> -->
                                    <i class="bx bxs-user-plus" style="font-size: 14px; min-width: auto;"></i>
                                    @lang('cruds.user.title')
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif



            </ul>


        </div>
    </div>
</nav>
