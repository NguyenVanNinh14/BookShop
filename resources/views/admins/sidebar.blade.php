<div class="side-nav expand-lg">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item dropdown open">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-gauge"></i>
                                </span>
                                <span class="title">Tổng quan</span>
                                <!-- <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span> -->
                            </a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                </span>
                                <span class="title">Sản phẩm</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li style="padding: 5px;">
                                    <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-list-alt" aria-hidden="true"></i>
                                        <a href="{{route('category')}}">Danh mục</a>
                                    </span><br><br>

                                    <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-bars" aria-hidden="true"></i>
                                        <a href="{{route('genre')}}">Thể loại</a>
                                    </span><br><br>

                                    <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-book" aria-hidden="true"></i>
                                        <a href="{{route('list-product')}}">Sản phẩm</a>
                                    </span><br><br>

                                    <!-- <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-star" aria-hidden="true"></i>
                                        <a href="#">Đánh giá</a>
                                    </span><br><br> -->

                                    <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-commenting-o" aria-hidden="true"></i>
                                        <a href="{{route('comment')}}">Bình luận</a>
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i style="padding: 3px;" class="fa fa-handshake-o" aria-hidden="true"></i>
                                </span>
                                <span class="title">Đối tác</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li style="padding: 5px;" >
                                <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-user-plus" aria-hidden="true"></i>
                                        <a href="{{route('list-publisher')}}">Nhà phát hành</a>
                                    </span><br><br>

                                    <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-users" aria-hidden="true"></i>
                                        <a href="{{route('list-supplier')}}">Nhà cung cấp</a>
                                    </span><br><br>

                                    <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-user-secret" aria-hidden="true"></i>
                                        <a href="{{route('list-author')}}">Tác giả</a>
                                    </span><br><br>

                                    <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-user-circle" aria-hidden="true"></i>
                                        <a href="{{route('list-customer')}}">Khách hàng</a>
                                    </span><br><br>


                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown ">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i style="padding: 3px;" class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </span>
                                <span class="title">Đơn hàng</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li style="padding: 5px;" >
                                <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-list-alt" aria-hidden="true"></i>
                                        <a href="{{route('list-order')}}">Danh sách </a>
                                    </span><br><br>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown ">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i style="padding: 3px;" class="fa fa-phone" aria-hidden="true"></i>
                                </span>
                                <span class="title">Liên hệ</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li style="padding: 5px;" >
                                <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-phone" aria-hidden="true"></i>
                                        <a href="{{route('list-contact')}}">Thông tin liên hệ</a>
                                </span><br><br>
                                <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-phone" aria-hidden="true"></i>
                                        <a href="{{route('page-contact')}}">Danh sách liên hệ</a>
                                </span><br><br>
                                </li>
                            </ul>
                        </li>
<!--
                        <li class="nav-item dropdown ">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i style="padding: 3px;" class="fa fa-home" aria-hidden="true"></i>
                                </span>
                                <span class="title">Kho</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li style="padding: 5px;" >
                                    <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-plus-circle" aria-hidden="true"></i>
                                        <a href="#">Nhập kho</a>
                                    </span><br><br>
                                    <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-minus-circle" aria-hidden="true"></i>
                                        <a href="#">Xuất kho</a>
                                    </span><br><br>
                                </li>
                            </ul>
                        </li> -->

                        <!-- <li class="nav-item dropdown ">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i style="padding: 3px;" class="fa fa-newspaper-o" aria-hidden="true"></i>
                                </span>
                                <span class="title">Tin tức</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li style="padding: 5px;" >
                                    <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-list-alt" aria-hidden="true"></i>
                                        <a href="#">Danh mục</a>
                                    </span><br><br>
                                    <span class="icon-holder">
                                        <i style="padding: 3px;" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        <a href="#">Bài viết</a>
                                    </span><br><br>
                                </li>
                            </ul>
                        </li> -->

                        <!-- <li class="side-nav-header">
                            <span>Others</span>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-image-filter-tilt-shift"></i>
                                </span>
                                <span class="title">Extra</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="profile.html">Profile</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-menu"></i>
                                </span>
                                <span class="title">Multiple Levels</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0);">
                                        <span>Level 1.2</span>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </div>
