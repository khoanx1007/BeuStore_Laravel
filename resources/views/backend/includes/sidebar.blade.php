<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ auth()->user()->my_image }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a  href="#collapseExample" >
                        <span>
                            {{ auth()->user()->name }}
                            <span class="user-level">{{ auth()->user()->role }}</span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item @if (request()->routeIs('backend.dashboard')) active @endif">
                    <a href="{{ route('backend.dashboard') }}">
                        <i class="fas fa-home "></i>
                        <p>Bảng điều khiển</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Quản lí hệ thống</h4>
                </li>
                <li class="nav-item @if (request()->routeIs('backend.categories.*')) active submenu @endif">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-th-list"></i>
                        <p>Danh mục</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if (request()->routeIs('backend.categories.*')) show @endif" id="base">
                        <ul class="nav nav-collapse">
                            <li class="nav-item @if (request()->routeIs('backend.categories.create')) active  @endif">
                                <a href="{{ route('backend.categories.create') }}">
                                    <span class="sub-item">Tạo danh mục</span>
                                </a>
                            </li>
                            <li class="nav-item @if (request()->routeIs('backend.categories.index')) active  @endif">
                                <a href="{{ route('backend.categories.index') }}">
                                    <span class="sub-item">Danh sách danh mục</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item @if (request()->routeIs('backend.products.*')) active submenu @endif">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-clipboard-list"></i>
                        <p>Sản phẩm</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if (request()->routeIs('backend.products.*')) show @endif" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li class="@if (request()->routeIs('backend.products.create')) active @endif">
                                <a href="{{ route('backend.products.create') }}" >
                                    <span class="sub-item">Tạo sản phẩm</span>
                                </a>
                            </li>
                            <li class="@if (request()->routeIs('backend.products.index')) active @endif">
                                <a href="{{ route('backend.products.index') }}">
                                    <span class="sub-item">Danh sách sản phẩm</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item @if (request()->routeIs('backend.brands.*')) active submenu @endif">
                    <a data-toggle="collapse" href="#charts">
                        <i class="fas fa-gamepad"></i>
                        <p>Hãng Game</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if (request()->routeIs('backend.brands.*')) show @endif" id="charts">
                        <ul class="nav nav-collapse">
                            <li class="@if (request()->routeIs('backend.brands.create')) active @endif">
                                <a href="{{ route('backend.brands.create') }}">
                                    <span class="sub-item">Thêm mới</span>
                                </a>
                            </li>
                            <li class="@if (request()->routeIs('backend.brands.index')) active @endif">
                                <a href="{{ route('backend.brands.index') }}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item @if (request()->routeIs('backend.coupons.*')) active submenu @endif">
                    <a data-toggle="collapse" href="#submenu">
                        <i class="fas fa-bars"></i>
                        <p>Coupon</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if (request()->routeIs('backend.coupons.*')) show @endif" id="submenu">
                        <ul class="nav nav-collapse">
                            <li class="@if (request()->routeIs('backend.coupons.create')) active @endif">
                                <a href="{{ route('backend.coupons.create') }}">
                                    <span class="sub-item">Tạo Coupon</span>
                                </a>
                            </li>
                            <li class="@if (request()->routeIs('backend.coupons.index')) active @endif">
                                <a href="{{ route('backend.coupons.index') }}">
                                    <span class="sub-item">Danh sách Coupon</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item  @if (request()->routeIs('backend.images.*')) active @endif">
                    <a href="{{ route('backend.images.index') }}">
                        <i class="fas fa-image"></i>
                        <p>Hình ảnh</p>
                    </a>
                    {{-- <div class="collapse @if (request()->routeIs('backend.images.*')) show @endif" id="tables">
                        <ul class="nav nav-collapse">
                            <li class="@if (request()->routeIs('backend.images.index')) active @endif">
                                <a href="{{ route('backend.images.index') }}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </li>
                <li class="nav-item @if (request()->routeIs('backend.requirements.*')) active submenu @endif">
                    <a href="{{ route('backend.requirements.index') }}">
                        <i class="fas fa-desktop"></i>
                        <p>Yêu cầu hệ thống</p>
                    </a>
                    {{-- <div class="collapse @if (request()->routeIs('backend.requirements.*')) show @endif" id="maps">
                        <ul class="nav nav-collapse">
                            <li class="@if (request()->routeIs('backend.requirements.index')) active @endif">
                                <a href="{{ route('backend.requirements.index') }}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </li>
                <li class="nav-item">
                    <a href="widgets.html">
                        <i class="fas fa-newspaper"></i>
                        <p>Đơn hàng</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Quản lí thành viên</h4>
                </li>
                <li class="nav-item @if (request()->routeIs(['backend.users.*','backend.roles.*'])) active submenu @endif">
                    <a data-toggle="collapse" href="#forms">
                        <i class="fas fa-user-friends"></i>
                        <p>Thành viên</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if (request()->routeIs(['backend.users.*','backend.roles.*'])) show @endif" id="forms">
                        <ul class="nav nav-collapse">
                            <li class="@if (request()->routeIs('backend.users.index')) active @endif">
                                <a href="{{ route('backend.users.index') }}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                            <li class="@if (request()->routeIs('backend.role.index')) active @endif">
                                <a href="{{ route('backend.roles.index') }}">
                                    <span class="sub-item">Role</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
            </ul>
        </div>
    </div>
</div>