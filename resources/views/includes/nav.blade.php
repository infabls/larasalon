    <header class="header_in">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div id="logo">
                        <a href="/">
                            <img src="/img/logo_sticky.svg" width="165" height="35" alt="" class="logo_sticky">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <ul id="top_menu">
                        <li><a href="account.html" class="btn_add">Добавить салон</a></li>
                        <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
                        <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
                    </ul>
                    <!-- /top_menu -->
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
                            <li><span><a href="#0">Listings</a></span>
                                <ul>
                                    <li>
                                        <span><a href="#0">Grid Layout</a></span>
                                        <ul>
                                            <li><a href="grid-listings-filterscol-search-aside.html">Sidebar+Search mobile 1</a></li>
                                            <li><a href="grid-listings-filterstop-search-aside.html">Full+Search mobile 1</a></li>
                                            <li><a href="grid-listings-filterscol.html">Sidebar+Search mobile 2</a></li>
                                            <li><a href="grid-listings-filterstop.html">Full+Search mobile 2</a></li>
                                            <li><a href="grid-listings-isotope.html">Full+Isotope filter</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span><a href="#0">Row Layout</a></span>
                                        <ul>
                                            <li><a href="row-listings-filterscol-search-aside.html">Sidebar+Search mobile 1</a></li>
                                            <li><a href="row-listings-filterstop-search-aside.html">Full+Search mobile 1</a></li>
                                            <li><a href="row-listings-filterscol.html">Sidebar+Search mobile 2</a></li>
                                            <li><a href="row-listings-filterstop.html">Full+Search mobile 2</a></li>
                                            <li><a href="row-listings-isotope.html">Full+Isotope filter</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="listing-map.html">Listing Map</a></li>
                                    <li>
                                        <span><a href="#0">Open Street Map</a></span>
                                        <ul>
                                            <li><a href="grid-listings-filterscol-search-aside-openstreetmap.html">Sidebar+Search mobile 1</a></li>
                                            <li><a href="grid-listings-filterstop-search-aside-openstreetmap.html">Full+Search mobile 1</a></li>
                                            <li><a href="grid-listings-filterscol-openstreetmap.html">Sidebar+Search mobile 2</a></li>
                                            <li><a href="grid-listings-filterstop-openstreetmap.html">Full+Search mobile 2</a></li>
                                            <li><a href="grid-listings-isotope-openstreetmap.html">Full+Isotope filter</a></li>
                                            <li><a href="row-listings-filterscol-search-aside-openstreetmap.html">Sidebar+Search mobile 1</a></li>
                                            <li><a href="row-listings-filterstop-search-aside-openstreetmap.html">Full+Search mobile 1</a></li>
                                            <li><a href="row-listings-filterscol-openstreetmap.html">Sidebar+Search mobile 2</a></li>
                                            <li><a href="row-listings-filterstop-openstreetmap.html">Full+Search mobile 2</a></li>
                                            <li><a href="row-listings-isotope-openstreetmap.html">Full+Isotope filter</a></li>
                                            <li><a href="detail-hotel-openstreetmap.html">Detail page 1</a></li>
                                            <li><a href="listing-map-openstreetmap.html">Listing Map</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span><a href="#0">Detail pages</a></span>
                                        <ul>
                                            <li><a href="detail-hotel.html">Detail page 1</a></li>
                                            <li><a href="detail-restaurant.html">Detail page 2</a></li>
                                            <li><a href="detail-shop.html">Detail page 3</a></li>
                                            <li><a href="detail-carousel.html">Detail page Carousel 1</a></li>
                                            <li><a href="detail-carousel-2.html">Detail page Carousel 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="bookings.html">Bookings - Purchases</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="confirm.html">Confirm</a></li>
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
