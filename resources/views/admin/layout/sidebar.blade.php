            <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
                <script type="text/javascript">
                    try{ace.settings.loadState('sidebar')}catch(e){}
                </script>

                <ul class="nav nav-list">
                    <li>
                        <a href="{{route('admin')}}">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="{{isset($col_act) ? 'active open' : ''}}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-th-list"></i>
                            <span class="menu-text"> Quản lý danh mục </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="{{isset($col_list_act) ? 'active' : ''}}">
                                <a href="{{route('collection.list')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Danh mục sản phẩm
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{{isset($col_add_act) ? 'active' : ''}}">
                                <a href="{{route('collection.add')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Thêm danh mục
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{{isset($pro_act) ? 'active open' : ''}}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-product-hunt"></i>
                            <span class="menu-text"> Quản lý sản phẩm </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="{{isset($pro_list_act) ? 'active' : ''}}">
                                <a href="{{route('product.list')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Danh sách sản phẩm
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{{isset($pro_add_act) ? 'active' : ''}}">
                                <a href="{{route('product.add')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Thêm sản phẩm
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="{{isset($col2_act) ? 'active open' : ''}}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-shopping-cart"></i>
                            <span class="menu-text"> Quản lý đơn hàng </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="{{isset($col2_list_act) ? 'active' : ''}}">
                                <a href="{{route('collection.list')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Danh sách đơn hàng
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{{isset($news_add_act) ? 'active' : ''}}">
                                <a href="{{route('them-bai-viet')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Bài viết mới
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="{{isset($col22_act) ? 'active' : ''}}">
                        <a href="gallery.html">
                            <i class="menu-icon fa fa-picture-o"></i>
                            <span class="menu-text"> Thư viện </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="{{isset($news_act) ? 'active open' : ''}}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-newspaper-o"></i>
                            <span class="menu-text"> Quản lý tin </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="{{isset($news_list_act) ? 'active' : ''}}">
                                <a href="{{route('danh-sach-tin')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Danh sách bài viết
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{{isset($news_add_act) ? 'active' : ''}}">
                                <a href="{{route('them-bai-viet')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Bài viết mới
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{{isset($news_cat_act) ? 'active' : ''}}">
                                <a href="{{route('admin')}}/news/cat/list">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Chuyên mục
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="{{isset($user_act) ? 'active open' : ''}}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-text"> Quản lý người dùng </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="{{isset($user_act) ? 'active' : ''}}">
                                <a href="{{route('admin')}}/users/list">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Danh sách người dùng
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="{{isset($settings_act) ? 'active open' : ''}}">
                        <a href="" class="dropdown-toggle">
                            <i class="menu-icon fa fa-line-chart"></i>
                            <span class="menu-text"> Thống kê </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{{isset($settings_act) ? 'active' : ''}}">
                                <a href="{{route('settings')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Cài đặt chung
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{{isset($settings_act) ? 'active' : ''}}">
                                <a href="{{route('settings')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Cài đặt Slider
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="{{isset($settings_act) ? 'active open' : ''}}">
                        <a href="" class="dropdown-toggle">
                            <i class="menu-icon fa fa-cog"></i>
                            <span class="menu-text"> Cài đặt trang </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{{isset($settings_act) ? 'active' : ''}}">
                                <a href="{{route('settings')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Cài đặt chung
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{{isset($settings_act) ? 'active' : ''}}">
                                <a href="{{route('settings')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Cài đặt Slider
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>
                    <!---
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> Forms </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="form-elements.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Form Elements
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="form-elements-2.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Form Elements 2
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="form-wizard.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Wizard &amp; Validation
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="wysiwyg.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Wysiwyg &amp; Markdown
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="dropzone.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dropzone File Upload
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="widgets.html">
                            <i class="menu-icon fa fa-list-alt"></i>
                            <span class="menu-text"> Widgets </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="calendar.html">
                            <i class="menu-icon fa fa-calendar"></i>

                            <span class="menu-text">
                                Calendar

                                <span class="badge badge-transparent tooltip-error" title="2 Important Events">
                                    <i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
                                </span>
                            </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="gallery.html">
                            <i class="menu-icon fa fa-picture-o"></i>
                            <span class="menu-text"> Gallery </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-tag"></i>
                            <span class="menu-text"> More Pages </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="profile.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    User Profile
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="inbox.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Inbox
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="pricing.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Pricing Tables
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="invoice.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Invoice
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="timeline.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Timeline
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="search.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Search Results
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="email.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Email Templates
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="login.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Login &amp; Register
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-file-o"></i>

                            <span class="menu-text">
                                Other Pages

                                <span class="badge badge-primary">5</span>
                            </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="faq.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    FAQ
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="error-404.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Error 404
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="error-500.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Error 500
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="grid.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Grid
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="blank.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Blank Page
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>-->
                </ul><!-- /.nav-list -->

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
            </div>