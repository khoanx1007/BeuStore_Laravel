@php
    $user = \Illuminate\Support\Facades\Auth::guard('admin')->user()->role;
@endphp
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item @if (request()->routeIs('backend.dashboard')) active @endif">
                    <a href="{{ route('backend.admin.dashboard') }}">
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
                <li class="nav-item @if (request()->routeIs('backend.products.*')) active submenu @endif">
                    <a href="{{ route('backend.products.index') }}">
                        <i class="fas fa-clipboard-list"></i>
                        <p>Sản phẩm</p>
                    </a>
                </li>
                <li class="nav-item @if (request()->routeIs('backend.categories.*')) active submenu @endif">
                    <a href="{{ route('backend.categories.index') }}">
                        <i class="fas fa-th-list"></i>
                        <p>Danh mục</p>
                    </a>
                </li>
                <li class="nav-item @if (request()->routeIs('backend.brands.*')) active submenu @endif">
                    <a  href="{{ route('backend.brands.index') }}">
                        <i class="fas fa-gamepad"></i>
                        <p>Hãng Game</p>
                    </a>
                </li>
                <li class="nav-item @if (request()->routeIs('backend.coupons.*')) active submenu @endif">
                    <a href="{{ route('backend.coupons.index') }}">
                        <i class="fas fa-bars"></i>
                        <p>Coupon</p>
                    </a>
                </li>
                <li class="nav-item  @if (request()->routeIs('backend.images.*')) active @endif">
                    <a href="{{ route('backend.images.index') }}">
                        <i class="fas fa-image"></i>
                        <p>Hình ảnh</p>
                    </a>
                </li>
                <li class="nav-item @if (request()->routeIs('backend.orders.*')) active submenu @endif">
                    <a href="{{ route('backend.orders.index') }}">
                        <i class="fas fa-newspaper"></i>
                        <p>Đơn hàng</p>
                    </a>
                </li>
                <li class="nav-item @if (request()->routeIs('backend.comments.*')) active submenu @endif">
                    <a href="{{ route('backend.comments.index') }}">
                        <i class="fas fa-comment-alt"></i>
                        <p>Bình luận</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Quản lí thành viên</h4>
                </li>
                <li class="nav-item @if (request()->routeIs(['backend.users.*'])) active submenu @endif">
                    <a href="{{ route('backend.users.index') }}">
                        <i class="fas fa-user-friends"></i>
                        <p>Người dùng</p>
                    </a>
                </li>
                <li class="nav-item @if (request()->routeIs(['backend.staffs.*'])) active submenu @endif">
                    <a href="{{ route('backend.staffs.index') }}">
                        <i class="fas fa-user-friends"></i>
                        <p>Nhân viên</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>