<div class="header navbar">
                <div class="header-container">
                    <div class="nav-logo">
                        <a href="{{route('home')}}">
                            <div class="logo logo-dark" style="background-image: url('/backend/images/logo/3.png')"></div>
                            <div class="logo logo-white" style="background-image: url('/backend/images/logo/3-white.png')"></div>
                        </a>
                    </div>
                    <ul class="nav-left">
                        <li>
                            <a class="sidenav-fold-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                            <a class="sidenav-expand-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="user-profile dropdown dropdown-animated scale-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="profile-img img-fluid" src="/backend/images/avatars/thumb-13.jpg" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-md p-v-0">
                                <li role="separator" class="divider"></li>
                                <!-- <li>
                                    <a href="#">
                                        <i class="ti-settings p-r-10"></i>
                                        <span>Cài đặt</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-user p-r-10"></i>
                                        <span>Thông tin tài khoản</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-email p-r-10"></i>
                                        <span>Thư</span>
                                        <span class="badge badge-pill badge-success pull-right">2</span>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="{{route('logout')}}">
                                        <i class="ti-power-off p-r-10"></i>
                                        <span>Đăng xuất</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
