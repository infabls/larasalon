    <header class="header_in">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div id="logo">
                        <a href="/">
                            <img src="/img/logo.png" width="150" height="35" alt="" class="logo_sticky">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-12 menu_container">

                    <a href="#menu" class="btn_mobile">
                        <div class="hamburger hamburger--spin" id="hamburger">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </a>
                    <nav id="menu" class="main-menu">
                        <ul>
                            <li><span><a href="#0">Категории</a></span>
                                <ul>
                                    <li><a href="/{{$value}}/category/parikmaherskie-uslugi">Парикмахерские услуги</a></li>
                                    <li><a href="/{{$value}}/category/nogtevoi-servis">Ногти</a></li>
                                    <li><a href="/{{$value}}/category/uhod-za-telom">Уход за телом</a></li>
                                    <li><a href="/{{$value}}/category/makiyazh">Макияж</a></li>
                                    <li><a href="/{{$value}}/category/udalenie-volos">Удаление волос</a></li>
                                    <li><a href="/{{$value}}/category/kosmetologiya">Косметология</a></li>
                                    <li><a href="/{{$value}}/category/brovi">Брови</a></li>
                                    <li><a href="/{{$value}}/category/resnitsy">Ресницы</a></li>
                                </ul>
                            </li>

                            <li><span><a href="#0">Город {{$value}}</a></span>
                                <ul>
                                    <li><a href="/city/astana">Астана</a></li>
                                    <li><a href="/city/almaty">Алматы</a></li>
                                    <li><a href="/city/oskemen">Усть-Каменогорск</a></li>
                                </ul>
                            </li>
                            <li><span><a href="#0">Pages</a></span>
                                <ul>
                                    <li><a href="admin_section/index.html">Admin section</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="account.html">Account</a></li>
                                    <li><a href="help.html">Help Section</a></li>
                                    <li><a href="faq.html">Faq Section</a></li>
                                    <li><a href="wishlist.html">Wishlist page</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li>
                                        <span><a href="#0">Icon Packs</a></span>
                                        <ul>
                                            <li><a href="icon-pack-1.html">Icon pack 1</a></li>
                                            <li><a href="icon-pack-2.html">Icon pack 2</a></li>
                                            <li><a href="icon-pack-3.html">Icon pack 3</a></li>
                                            <li><a href="icon-pack-4.html">Icon pack 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="media-gallery.html">Media gallery</a></li>
                                </ul>
                            </li>
                            <li><span><a href="#0">Extra</a></span>
                                <ul>
                                    <li><a href="404.html">404 page</a></li>
                                    <li><a href="contacts-2.html">Contacts 2</a></li>
                                    <li><a href="pricing-tables.html">Pricing tables</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="menu-options.html">Menu Options</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="coming_soon/index.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li><span><a href="#0">Buy template</a></span></li>
                        </ul>
                    </nav>
                    <ul id="top_menu">
                        <li><a href="account.html" class="btn_add">Добавить салон</a></li>
                        <li><a href="/login" class="login" title="Sign In">Sign In</a></li>
                        <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
                    </ul>
                    <!-- /top_menu -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->     
    </header>
    <!-- /header -->
    @if (config('boilerplate.frontend_breadcrumbs'))
    @include('frontend.includes.partials.breadcrumbs')
    @endif
