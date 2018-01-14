<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div id="app" class="site_full preloader3 menu_no_transparent classic_menu horizontal_menu light_header dark_sup_menu">

    <div id="preloader">
        <div class="spinner clearfix">
            <div class="sk-dot1"></div>
            <div class="sk-dot2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>


    

    <div id="main_wrapper">

        <!-- Header -->
        <header id="site_header">
            <div id="nav_bar" class="hm_sticky">
                <div class="content">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="home-creative-1.html" target="_self">
                            <img class="normal_logo" src="img/logo-dark.png" width="300" height="104" alt="LookUp">
                            <img class="normal_logo light_logo" src="img/logo-light.png" width="300" height="104" alt="LookUp">
                        </a>
                    </div>

                    <!-- Top Cart -->
                    <div id="top_cart" class="top_cart">
                        <a href="#" class="top_add_card"><i class="ico-cart"></i><span class="hm_cc">3</span></a>
                        <div class="top_cart_con hm_toogle_prep">
                            <div class="top_cart_block">
                                <ul class="cart_list product_list_widget">
                                    <li class="mini_cart_item">
                                        <a href="#">
                                            <img width="75" height="75" src="img/shop/product1-a-75x75.jpg" alt="" />
                                            <span class="cart_top_details">
                                            <span class="top_cart_title">Nanamica Graphic</span>
                                            <span class="top_cart_price">17 x $58.00</span>
                                        </span>
                                        </a>
                                    </li>

                                    <li class="mini_cart_item">
                                        <a href="#">
                                            <img width="75" height="75" src="img/shop/product2-a-75x75.jpg" alt="" />
                                            <span class="cart_top_details">
                                            <span class="top_cart_title">Adidas Hoodie</span>
                                            <span class="top_cart_price">14 x $156.00</span>
                                        </span>
                                        </a>
                                    </li>

                                    <li class="mini_cart_item">
                                        <a href="#">
                                            <img width="75" height="75" src="img/shop/product5-a-75x75.jpg" alt="" />
                                            <span class="cart_top_details">
                                            <span class="top_cart_title">Tee Jeans</span>
                                            <span class="top_cart_price">12 x $220.00</span>
                                        </span>
                                        </a>
                                    </li>
                                </ul>
                                <p class="total"><strong>Subtotal:</strong><span class="amount"><span>$</span>370.00</span></p>
                                <p class="buttons">
                                    <a href="#" class="button">View Cart</a>
                                    <a href="#" class="button checkout">Checkout</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Top Search -->
                    <div class="hm_icon_search"> <a href="#" class="hm_icon_search_btn"><i class="ico-search9"></i></a>
                        <div class="hm_search_form hm_toogle_prep">
                            <form role="search" method="get">
                                <i class="hm_search_c ico-close"></i>
                                <input class="hm_si" type="text" placeholder="Start Typing..." name="s">
                            </form><!-- End Form -->
                        </div>
                    </div>
                    <nav id="main_nav" class="f_right">
                        <div id="nav_menu"> <span class="mobile_menu_trigger"><a href="#" class="nav_trigger"><span></span></a></span>
                            <ul id="navy" class="clearfix">
                                <li class="normal_menu"> <a href="home-creative-1.html"><span>Home</span></a>
                                    <ul>
                                        <li class="normal_menu"><a href="home-creative-1.html"><span>Home - Creative 1</span></a></li>
                                        <li class="normal_menu"><a href="home-creative-2.html"><span>Home - Creative 2</span></a></li>
                                        <li class="normal_menu"><a href="home-creative-3.html"><span>Home - Creative 3</span></a></li>
                                        <li class="normal_menu"><a href="home-creative-4.html"><span>Home - Creative 4</span></a></li>
                                        <li class="normal_menu"><a href="home-creative-5.html"><span>Home - Creative 5</span></a></li>
                                        <li class="normal_menu"><a href="home-creative-6.html"><span>Home - Creative 6</span></a></li>
                                        <li class="normal_menu"><a href="home-creative-7.html"><span>Home - Creative 7</span></a></li>
                                        <li class="normal_menu"><a href="home-creative-8.html"><span>Home - Creative 8</span></a></li>
                                        <li class="normal_menu"><a href="home-creative-9.html"><span>Home - Creative 9</span></a></li>
                                        <li class="normal_menu"><a href="home-creative-10.html"><span>Home - Creative 10</span></a></li>
                                        <li class="normal_menu"><a href="home-one-page.html"><span>Home - One Page</span></a></li>
                                        <li class="normal_menu"><a href="home-portfolio.html"><span>Home - Portfolio</span></a></li>
                                        <li class="normal_menu"><a href="home-blog.html"><span>Home - Blog</span></a></li>
                                        <li class="normal_menu"><a href="home-shop.html"><span>Home - Shop</span></a></li>
                                    </ul>
                                </li>
                                <li class="has_mega_menu"> <a href="#"><span>Pages</span></a>
                                    <ul class="mega_menu">
                                        <li class="has_mega_menu"><a href="#"><span>Pages 1</span></a>
                                            <ul class="mega_menu_in">
                                                <li class="normal_menu"><a href="pages-about-us.html"><span>About Us</span></a></li>
                                                <li class="normal_menu"><a href="pages-about-me.html"><span>About Me</span></a></li>
                                                <li class="normal_menu"><a href="pages-services.html"><span>Services</span></a></li>
                                                <li class="normal_menu"><a href="pages-contact-us.html"><span>Contact Us</span></a></li>
                                                <li class="normal_menu"><a href="pages-our-office.html"><span>Our Office</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="has_mega_menu"><a href="#"><span>Pages 2</span></a>
                                            <ul class="mega_menu_in">
                                                <li class="normal_menu"><a href="pages-faq.html"><span>FAQ</span></a></li>
                                                <li class="normal_menu"><a href="pages-careers.html"><span>Careers</span></a></li>
                                                <li class="normal_menu"><a href="pages-pricing-plans.html"><span>Pricing Plans</span></a></li>
                                                <li class="normal_menu"><a href="pages-our-products.html"><span>Our Products</span></a></li>
                                                <li class="normal_menu"><a href="elements-team.html"><span>Team Members</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="has_mega_menu"><a href="#"><span>Special Pages</span></a>
                                            <ul class="mega_menu_in">
                                                <li class="normal_menu"><a href="pages-under-structure.html"><span>Under Structure</span></a></li>
                                                <li class="normal_menu"><a href="pages-coming-soon.html"><span>Coming Soon</span></a></li>
                                                <li class="normal_menu"><a href="pages-404.html"><span>404 Page</span></a></li>
                                                <li class="normal_menu"><a href="pages-search-results.html"><span>Search Results</span></a></li>
                                                <li class="normal_menu"><a href="forums.html"><span>Forums</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="has_mega_menu"><a href="#"><span>Page Templates</span></a>
                                            <ul class="mega_menu_in">
                                                <li class="normal_menu"><a href="pages-blank-page.html"><span>Blank Page</span></a></li>
                                                <li class="normal_menu"><a href="pages-sidebar-left.html"><span>Sidebar Left</span></a></li>
                                                <li class="normal_menu"><a href="pages-sidebar-right.html"><span>Sidebar Right</span></a></li>
                                                <li class="normal_menu"><a href="pages-full-width.html"><span>Full Width Page</span></a></li>
                                                <li class="normal_menu"><a href="pages-side-menu.html"><span>Side Menu</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has_mega_menu"> <a href="#"><span>Elements</span></a>
                                    <ul class="mega_menu">
                                        <li class="has_mega_menu"><a href="#"><span>Elements 1</span></a>
                                            <ul class="mega_menu_in">
                                                <li class="normal_menu"><a href="elements-accordion.html"><span>Accordion</span></a></li>
                                                <li class="normal_menu"><a href="elements-tabs.html"><span>Tabs</span></a></li>
                                                <li class="normal_menu"><a href="elements-heading-styles.html"><span>Heading Styles</span></a></li>
                                                <li class="normal_menu"><a href="elements-dividers.html"><span>Dividers</span></a></li>
                                                <li class="normal_menu"><a href="elements-testimonials.html"><span>Testimonials</span></a></li>
                                                <li class="normal_menu"><a href="elements-description-text.html"><span>Description &#038; Text Box</span></a></li>
                                                <li class="normal_menu"><a href="elements-team.html"><span>Team</span></a></li>
                                                <li class="normal_menu"><a href="elements-clients.html"><span>Clients</span></a></li>
                                                <li class="normal_menu"><a href="elements-buttons.html"><span>Buttons</span></a></li>
                                                <li class="normal_menu"><a href="elements-video-background.html"><span>Video Background</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="has_mega_menu"><a href="#"><span>Elements 2</span></a>
                                            <ul class="mega_menu_in">
                                                <li class="normal_menu"><a href="elements-lightbox.html"><span>Lightbox</span></a></li>
                                                <li class="normal_menu"><a href="elements-tooltips.html"><span>Tooltips</span></a></li>
                                                <li class="normal_menu"><a href="elements-progress-bars.html"><span>Progress Bars</span></a></li>
                                                <li class="normal_menu"><a href="elements-pricing-tables.html"><span>Pricing Tables</span></a></li>
                                                <li class="normal_menu"><a href="elements-google-maps.html"><span>Google Maps</span></a></li>
                                                <li class="normal_menu"><a href="elements-counters.html"><span>Counters</span></a></li>
                                                <li class="normal_menu"><a href="elements-blockquote.html"><span>Blockquote</span></a></li>
                                                <li class="normal_menu"><a href="elements-typography.html"><span>Typography</span></a></li>
                                                <li class="normal_menu"><a href="elements-columns.html"><span>Columns</span></a></li>
                                                <li class="normal_menu"><a href="elements-animation.html"><span>Animation</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="has_mega_menu"><a href="#"><span>Elements 3</span></a>
                                            <ul class="mega_menu_in">
                                                <li class="normal_menu"><a href="elements-responsive-visibility.html"><span>Responsive Visibility</span></a></li>
                                                <li class="normal_menu"><a href="elements-sections-parallax.html"><span>Sections &#038; Parallax</span></a></li>
                                                <li class="normal_menu"><a href="elements-embed-media.html"><span>Embed Media</span></a></li>
                                                <li class="normal_menu"><a href="elements-social-media.html"><span>Social Media</span></a></li>
                                                <li class="normal_menu"><a href="elements-details-list.html"><span>Details List</span></a></li>
                                                <li class="normal_menu"><a href="elements-icon-lists.html"><span>Icon Lists</span></a></li>
                                                <li class="normal_menu"><a href="elements-icon-boxes.html"><span>Icon Boxes</span></a></li>
                                                <li class="normal_menu"><a href="elements-featured-icons.html"><span>Featured Icons</span></a></li>
                                                <li class="normal_menu"><a href="elements-faq-filter.html"><span>FAQs Filter</span></a></li>
                                                <li class="normal_menu"><a href="elements-event-counter.html"><span>Event Counter</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="has_mega_menu"><a href="#"><span>Elements 4</span></a>
                                            <ul class="mega_menu_in">
                                                <li class="normal_menu"><a href="elements-contact-forms.html"><span>Contact Forms</span></a></li>
                                                <li class="normal_menu"><a href="elements-text-slider.html"><span>Text Slider</span></a></li>
                                                <li class="normal_menu"><a href="elements-news-bar.html"><span>News Bar</span></a></li>
                                                <li class="normal_menu"><a href="elements-blog-filter.html"><span>Blog Filter</span></a></li>
                                                <li class="normal_menu"><a href="elements-blog-posts.html"><span>Blog Posts</span></a></li>
                                                <li class="normal_menu"><a href="elements-blog-slider.html"><span>Blog Slider</span></a></li>
                                                <li class="normal_menu"><a href="blog-carousel.html"><span>Blog Carousel</span></a></li>
                                                <li class="normal_menu"><a href="elements-portfolio-filter.html"><span>Portfolio Filter</span></a></li>
                                                <li class="normal_menu"><a href="elements-portfolio-slider.html"><span>Portfolio Slider</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-carousel.html"><span>Portfolio Carousel</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="normal_menu current_page_item"><a href="blog.html"><span>Blog</span></a>
                                    <ul>
                                        <li class="normal_menu"><a href="blog-single-image.html"><span>Single Post Formats</span></a>
                                            <ul>
                                                <li class="normal_menu"><a href="blog-single-image.html"><span>Image Post</span></a></li>
                                                <li class="normal_menu"><a href="blog-single-gallery.html"><span>Gallery Post Format</span></a></li>
                                                <li class="normal_menu"><a href="blog-single-link.html"><span>Link Post Format</span></a></li>
                                                <li class="normal_menu"><a href="blog-single-quote.html"><span>Quote Post Format</span></a></li>
                                                <li class="normal_menu"><a href="blog-single-self-hosted-audio.html"><span>Audio Self-Hosted</span></a></li>
                                                <li class="normal_menu"><a href="blog-single-soundcloud-audio.html"><span>Audio SoundCloud</span></a></li>
                                                <li class="normal_menu"><a href="blog-single-self-hosted-video.html"><span>Video Self-Hosted</span></a></li>
                                                <li class="normal_menu"><a href="blog-single-vimeo-video.html"><span>Vimeo Video Post</span></a></li>
                                                <li class="normal_menu"><a href="blog-single-youtube-video.html"><span>Youtube Video Post</span></a></li>
                                                <li class="normal_menu"><a href="blog-single-right-sidebar.html"><span>Right Sidebar Layout</span></a></li>
                                                <li class="normal_menu"><a href="blog-single-left-sidebar.html"><span>Left Sidebar Layout</span></a></li>
                                                <li class="normal_menu"><a href="blog-single-full-width.html"><span>Full-Width Post</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="normal_menu current_page_item"><a href="#"><span>Blog Layouts</span></a>
                                            <ul>
                                                <li class="normal_menu current_page_item"><a href="blog-right-sidebar.html"><span>Blog Right Sidebar</span></a></li>
                                                <li class="normal_menu"><a href="blog-left-sidebar.html"><span>Blog Left Sidebar</span></a></li>
                                                <li class="normal_menu"><a href="blog-full-width.html"><span>Blog Full Width</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="normal_menu"><a href="blog-masonry-3columns.html"><span>Blog Masonry</span></a>
                                            <ul>
                                                <li class="normal_menu"><a href="blog-masonry-2columns.html"><span>Blog Masonry 2 Columns</span></a></li>
                                                <li class="normal_menu"><a href="blog-masonry-3columns.html"><span>Blog Masonry 3 Columns</span></a></li>
                                                <li class="normal_menu"><a href="blog-masonry-4columns.html"><span>Blog Masonry 4 Columns</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="normal_menu"><a href="blog-filters.html"><span>Blog Filters</span></a>
                                            <ul>
                                                <li class="normal_menu"><a href="blog-grid-filters.html"><span>Blog Grid Filters</span></a></li>
                                                <li class="normal_menu"><a href="blog-masonry-filters.html"><span>Blog Masonry Filters</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="normal_menu"><a href="blog-grid-3columns.html"><span>Blog Grid</span></a>
                                            <ul>
                                                <li class="normal_menu"><a href="blog-grid-2columns.html"><span>Blog Grid 2 Columns</span></a></li>
                                                <li class="normal_menu"><a href="blog-grid-3columns.html"><span>Blog Grid 3 Columns</span></a></li>
                                                <li class="normal_menu"><a href="blog-grid-4columns.html"><span>Blog Grid 4 Columns</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="normal_menu"><a href="blog-standard.html"><span>Blog Standard</span></a></li>
                                        <li class="normal_menu"><a href="blog-timeline.html"><span>Blog Timeline</span></a></li>
                                        <li class="normal_menu"><a href="blog-medium.html"><span>Blog Medium</span></a></li>
                                        <li class="normal_menu"><a href="blog-carousel.html"><span>Blog Carousel</span></a></li>
                                    </ul>
                                </li>
                                <li class="normal_menu"><a href="portfolio.html"><span>Portfolio</span></a>
                                    <ul>
                                        <li class="normal_menu"><a href="#"><span>Portfolio Project Page</span></a>
                                            <ul>
                                                <li class="normal_menu"><a href="portfolio-single-apple-watch.html"><span>Project Page Style 1</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-single-bag-mockup-design.html"><span>Project Page Style 2</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-single-business-card.html"><span>Project Page Style 3</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-single-clothes-vector.html"><span>Project Page Style 4</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-single-macbook-bro.html"><span>Project Page Style 5</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-single-paper-hot-cup.html"><span>Project Page Style 6</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-single-rucksack-mockup.html"><span>Project Page Style 7</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-single-smart-watch.html"><span>Project Page Style 8</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-single-sneakers-shoes.html"><span>Project Page Style 9</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-single-wooden-chair.html"><span>Project Page Style 10</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="normal_menu"><a href="#"><span>Portfolio Layouts</span></a>
                                            <ul>
                                                <li class="normal_menu"><a href="portfolio-right-sidebar.html"><span>Portfolio Right Sidebar</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-left-sidebar.html"><span>Portfolio Left Sidebar</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-full-width.html"><span>Portfolio Full Width</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="normal_menu"><a href="portfolio-masonry-3columns.html"><span>Portfolio Masonry</span></a>
                                            <ul>
                                                <li class="normal_menu"><a href="portfolio-masonry-2columns.html"><span>Portfolio Masonry 2 Columns</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-masonry-3columns.html"><span>Portfolio Masonry 3 Columns</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-masonry-4columns.html"><span>Portfolio Masonry 4 Columns</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="normal_menu"><a href="portfolio-filters.html"><span>Portfolio Filters</span></a>
                                            <ul>
                                                <li class="normal_menu"><a href="portfolio-grid-filters.html"><span>Portfolio Grid Filters</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-masonry-filters.html"><span>Portfolio Masonry Filters</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="normal_menu"><a href="portfolio-grid-3columns.html"><span>Portfolio Grid</span></a>
                                            <ul>
                                                <li class="normal_menu"><a href="portfolio-grid-2columns.html"><span>Portfolio Grid 2 Columns</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-grid-3columns.html"><span>Portfolio Grid 3 Columns</span></a></li>
                                                <li class="normal_menu"><a href="portfolio-grid-4columns.html"><span>Portfolio Grid 4 Columns</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="normal_menu"><a href="portfolio-standard.html"><span>Portfolio Standard</span></a></li>
                                        <li class="normal_menu"><a href="portfolio-timeline.html"><span>Portfolio Timeline</span></a></li>
                                        <li class="normal_menu"><a href="portfolio-medium.html"><span>Portfolio Medium</span></a></li>
                                        <li class="normal_menu"><a href="portfolio-carousel.html"><span>Portfolio Carousel</span></a></li>
                                    </ul>
                                </li>
                                <li class="normal_menu"><a href="shop.html"><span>Shop</span></a>
                                    <ul>
                                        <li class="normal_menu"><a href="shop.html"><span>Shop Page</span></a></li>
                                        <li class="normal_menu"><a href="shop-cart.html"><span>Shop Cart</span></a></li>

                                        <li class="normal_menu"><a href="shop-single-product.html"><span>Shop Single Product</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- End Nav -->

                    <div class="clear"></div>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <!-- Page Title -->

        <div class="content_section page_title default">
            <div class="content clearfix">
                <h1>Blog Right Sidebar</h1>
                <div class="breadcrumbs"><a href="home-creative-1.html">Home</a> <span class="crumbs-spacer">/</span> <a href="#">Blog</a> <span class="crumbs-spacer">/</span> <span class="current">Blog Right Sidebar</span></div>
            </div>
        </div>
        <!-- End Page Title -->

        <div class="content_section">
            <div class="content clearfix">
                <div class="hm_columns content_block col-md-9 f_left row_spacer">
                    <div class="content hm_blog_list clearfix">

                        <!-- Post Block -->
                        <div class="blog_grid_block clearfix">
                            <div class="feature_inner">
                                <div class="feature_inner_corners">
                                    <div class="porto_galla owl_abs_arr">
                                        <a href="img/blog-post2-1140x760.jpg" class="img_popup">
                                            <img src="img/blog-post2-600x375.jpg" alt="Easy to Customize" />
                                            <span class="hm_plus_i"><i class="ico-plus10 hm_iii"></i></span>
                                        </a>
                                        <a href="img/blog-post3-1140x760.jpg" class="img_popup">
                                            <img src="img/blog-post3-600x375.jpg" alt="Easy to Customize" />
                                            <span class="hm_plus_i"><i class="ico-plus10 hm_iii"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_grid_con">
                                <h6 class="title"><a href="#">Easy to Customize</a></h6>

                                <span class="meta">
                               <span class="meta_part"><span>Aug 1, 2017</span></span>
                               <span class="meta_part"><span>In <span><a href="#">Culture</a></span></span></span>
                               <span class="meta_part"><span>By <a href="#">John Doe</a></span></span>
                           </span>

                                <div class="entry-content hm_exp_con"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam ... </div>
                            </div>
                        </div><!-- End Post Block -->

                        <!-- Post Block -->
                        <div class="blog_grid_block clearfix">
                            <div class="feature_inner">
                                <div class="feature_inner_corners"> <a href="img/work_space_1-1140x760.jpg" class="img_popup"> <img src="img/work_space_1-600x375.jpg" alt="Best User Interface"> <span class="hm_plus_i"><i class="ico-plus10 hm_iii"></i></span> </a> </div>
                            </div>
                            <div class="blog_grid_con">
                                <h6 class="title"><a href="#">Best User Interface</a></h6>

                                <span class="meta">
                               <span class="meta_part"><span>Aug 1, 2017</span></span>
                               <span class="meta_part"><span>In <span><a href="#">Culture</a></span></span></span>
                               <span class="meta_part"><span>By <a href="#">John Doe</a></span></span>
                           </span>

                                <div class="entry-content hm_exp_con"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam ... </div>
                            </div>
                        </div><!-- End Post Block -->

                        <!-- Post Block -->
                        <div class="blog_grid_block clearfix">
                            <div class="feature_inner">
                                <div class="feature_inner_corners"> <a href="img/blog-post14-1140x815.jpg" class="img_popup"> <img src="img/blog-post14-600x375.jpg" alt="Amazing standard post"> <span class="hm_plus_i"><i class="ico-plus10 hm_iii"></i></span> </a> </div>
                            </div>
                            <div class="blog_grid_con">
                                <h6 class="title"><a href="#">Amazing standard post</a></h6>

                                <span class="meta">
                               <span class="meta_part"><span>Aug 1, 2017</span></span>
                               <span class="meta_part"><span>In <span><a href="#">Culture</a></span></span></span>
                               <span class="meta_part"><span>By <a href="#">John Doe</a></span></span>
                           </span>

                                <div class="entry-content hm_exp_con"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam ... </div>
                            </div>
                        </div><!-- End Post Block -->

                        <!-- Post Block -->
                        <div class="blog_grid_block clearfix">
                            <div class="feature_inner">
                                <!-- Video -->
                                <div class="self_hosted_container">
                                    <video class="hosted_video" poster="img/blog-post6-1140x787.jpg" preload="metadata" controls style="width:100%;height:100%;">
                                        <source type="video/mp4" src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" />
                                    </video>
                                </div>
                                <!-- End Video -->

                            </div>
                            <div class="blog_grid_con">
                                <h6 class="title"><a href="#">Clean and simple Design</a></h6>

                                <span class="meta">
                               <span class="meta_part"><span>Aug 1, 2017</span></span>
                               <span class="meta_part"><span>In <span><a href="#">Culture</a></span></span></span>
                               <span class="meta_part"><span>By <a href="#">John Doe</a></span></span>
                           </span>

                                <div class="entry-content hm_exp_con"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam ... </div>
                            </div>
                        </div><!-- End Post Block -->

                        <!-- Post Block -->
                        <div class="blog_grid_block clearfix">
                            <div class="feature_inner">
                                <div class="embed-container">
                                    <iframe src="http://player.vimeo.com/video/185823131?title=0&byline=0&portrait=0&badge=0" style="border: 0px none;" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="blog_grid_con">
                                <h6 class="title"><a href="#">Vimeo Video Post</a></h6>

                                <span class="meta">
                               <span class="meta_part"><span>Aug 1, 2017</span></span>
                               <span class="meta_part"><span>In <span><a href="#">Culture</a></span></span></span>
                               <span class="meta_part"><span>By <a href="#">John Doe</a></span></span>
                           </span>

                                <div class="entry-content hm_exp_con"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam ... </div>
                            </div>
                        </div><!-- End Post Block -->

                        <!-- Post Block -->
                        <div class="blog_grid_block clearfix">
                            <div class="feature_inner">
                                <div class="embed-container">
                                    <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/133081668&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true" height="450" style="width:100%;"></iframe>
                                </div>
                            </div>
                            <div class="blog_grid_con">
                                <h6 class="title"><a href="#">Sound Cloud Audio Post</a></h6>

                                <span class="meta">
                              <span class="meta_part"> <span>Aug 1, 2017</span> </span>
                              <span class="meta_part"> <span>In <span><a href="#">Photography</a></span> - <span><a href="#">Wordpress</a></span> </span> </span>
                              <span class="meta_part"> <span>By <a href="#" title="Posts by John Doe" rel="author">John Doe</a></span> </span>
                           </span>

                                <div class="entry-content hm_exp_con"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam ... </div>
                            </div>
                        </div><!-- End Post Block -->

                        <!-- Post Block -->
                        <div class="blog_grid_block clearfix fullwidth_blog_list">
                            <div class="feature_inner">
                                <a href="#" class="quote_con">
                                    <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look.</span>
                                    <span class="quote_author"> <span>John Doe</span> </span>
                                </a>
                            </div>
                        </div><!-- End Post Block -->

                        <!-- Post Block -->
                        <div class="blog_grid_block clearfix fullwidth_blog_list">
                            <div class="feature_inner">
                                <!-- Audio -->
                                <div class="self_hosted_container">
                                    <audio class="hosted_audio" id="audio_player_1" preload="metadata" controls>
                                        <source src="media/15.mp3" type="audio/mp3" />
                                    </audio>
                                </div>
                                <!-- End Audio -->
                            </div>
                            <div class="blog_grid_con">
                                <h6 class="title"><a href="#">My favorite Song</a></h6>
                                <span class="meta">
                              <span class="meta_part"> <span>Aug 1, 2017</span> </span>
                              <span class="meta_part"> <span>In <span><a href="#">Photography</a></span> - <span><a href="#">Wordpress</a></span> </span> </span>
                              <span class="meta_part"> <span>By <a href="#" title="Posts by John Doe" rel="author">John Doe</a></span> </span>
                           </span>
                                <div class="entry-content hm_exp_con"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam ... </div>
                            </div>
                        </div><!-- End Post Block -->

                    </div>

                    <!-- Pagination -->
                    <div class="pagination content" id="pagination">
                        <ul class="clearfix">
                            <li class="page_of">Page 1 Of 2</li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="next_post"><a href="#"><i class="ico-navigate_next"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Pagination -->

                </div>
                <aside id="sidebar" class="hm_columns col-md-3 right_sidebar row_spacer">
                    <div class="hm_column_con">
                        <div class="widget_block widget_search">
                            <div class="search_block">
                                <form class="searchform" method="get">
                                    <input class="serch_input" type="search" name="s" id="s" placeholder="Search..." />
                                    <button type="submit" id="searchsubmit" class="search_btn animate"><i class="ico-search9"></i></button>
                                    <div class="clear"></div>
                                </form><!-- End Form -->
                            </div>
                        </div>
                        <div class="widget_block widget_categories">
                            <h6 class="widget_title">Categories</h6>
                            <ul class="cat_list_widget">
                                <li><a href="#">Culture</a></li>
                                <li><a href="#">Graphic</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Wordpress</a></li>
                            </ul>
                        </div>
                        <div class="widget_block tag_cloud_widget">
                            <h6 class="widget_title">Tag Cloud</h6>
                            <div class="tagcloud hm_tagcloud clearfix">
                                <a href="#"><span class="tag">Culture</span><span class="num">4</span></a>
                                <a href="#"><span class="tag">Graphic</span><span class="num">1</span></a>
                                <a href="#"><span class="tag">Lifestyle</span><span class="num">4</span></a>
                                <a href="#"><span class="tag">News</span><span class="num">2</span></a>
                                <a href="#"><span class="tag">Photography</span><span class="num">2</span></a>
                                <a href="#"><span class="tag">Travel</span><span class="num">1</span></a>
                                <a href="#"><span class="tag">Web Design</span><span class="num">3</span></a>
                                <a href="#"><span class="tag">CSS3</span><span class="num">6</span></a>
                            </div>
                        </div>
                        <div class="widget_block posts_slider_widget">
                            <h6 class="widget_title">Posts Slider</h6>
                            <div class="related_slider_widget centered">
                                <div class="related_posts_slide">
                                    <div class="related_img_con"> <a href="#" class="related_img"> <img alt="Step Into The Light" src="img/blog-post18-450x290.jpg"> <span class="hm_format_i"><i class="ico-gallery"></i></span> </a> </div>
                                    <a class="related_title" href="#">Step Into The Light</a> </div>
                                <div class="related_posts_slide">
                                    <div class="related_img_con"> <a href="#" class="related_img"> <img alt="Sound Cloud Audio Post" src="img/blog-post7-450x290.jpg"> <span class="hm_format_i"><i class="ico-sound3"></i></span> </a> </div>
                                    <a class="related_title" href="#">Sound Cloud Audio Post</a> </div>
                                <div class="related_posts_slide">
                                    <div class="related_img_con"> <a href="#" class="related_img"> <img alt="Life Ups And Downs" src="img/blog-post17-450x290.jpg"> <span class="hm_format_i"><i class="ico-image4"></i></span> </a> </div>
                                    <a class="related_title" href="#">Life Ups And Downs</a> </div>
                                <div class="related_posts_slide">
                                    <div class="related_img_con"> <a href="#" class="related_img"> <img alt="John Doe" src="img/blog-post15-450x290.jpg"> <span class="hm_format_i"><i class="ico-quote-right2"></i></span> </a> </div>
                                    <a class="related_title" href="#">John Doe</a> </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>

        <!-- Footer -->
        <footer id="footer" class="hm_dark_footer">
            <div class="container clearfix">
                <div class="rows_container clearfix">

                    <!-- Footer Column -->
                    <div class="hm_columns col-md-3">
                        <div class="hm_column_con">
                            <div class="footer_row clearfix custom_text_with_image">
                                <h6 class="footer_title">About LookUp</h6>
                                <span class="footer_desc">Cras at ultrices erat, sed vulputate eros. Nunc at augue gravida est fermentum vulputate.</span>
                            </div>
                            <div class="footer_row clearfix newsletter_widget">
                                <h6 class="footer_title">Newsletter</h6>
                                <span class="footer_desc">Enter your e-mail and subscribe to our newsletter:</span>
                                <form id="newsletter_form" class="newsletter_form" action="php/subscribe.php" method="post">
                                    <div class="newsletter_con"> <span class="newsl_i"> <i class="subscribe_true ico-check3"></i> <i class="refresh_loader ico-refresh4"></i> </span>
                                        <!--<input type="text" class="fname-subs" name="fname" placeholder="First Name" />-->
                                        <input class="subscribe-mail" name="subscribe-mail" id="subscribe-mail" type="email" placeholder="Your Email *" required />
                                        <input type="hidden" name="action" value="mailchimpsubscribe" />
                                        <button type="submit" name="submit" class="newsletter_button"><span class="subscribe_btn">Go!</span></button>
                                    </div>
                                    <div id="subscribe_output"></div>
                                </form><!-- End Form -->
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Column -->

                    <!-- Footer Column -->
                    <div class="hm_columns col-md-3">
                        <div class="hm_column_con">
                            <div class="footer_row clearfix posts_widget">
                                <h6 class="footer_title">Posts</h6>
                                <ul class="recent_posts_list clearfix">
                                    <li class="clearfix"> <a href="#"> <span>Easy to Customize</span></a><span class="recent_post_detail">Aug 1, 2017</span> </li>
                                    <li class="clearfix"> <a href="#"> <span>Best User Interface</span></a><span class="recent_post_detail">Aug 1, 2017</span> </li>
                                    <li class="clearfix"> <a href="#"><span>Amazing standard post</span></a><span class="recent_post_detail">Aug 1, 2017</span> </li>
                                    <li class="clearfix"> <a href="#"><span>Clean and simple Design</span></a><span class="recent_post_detail">Aug 1, 2017</span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Column -->

                    <!-- Footer Column -->
                    <div class="hm_columns col-md-3">
                        <div class="hm_column_con">
                            <div class="footer_row clearfix tag_cloud_widget">
                                <h6 class="footer_title">Tag Cloud</h6>
                                <div class="tagcloud hm_tagcloud style2 clearfix">
                                    <a href='#'><span class='tag'>Culture</span><span class='num'>4</span></a>
                                    <a href='#'><span class='tag'>Graphic</span><span class='num'>1</span></a>
                                    <a href='#'><span class='tag'>Lifestyle</span><span class='num'>4</span></a>
                                    <a href='#'><span class='tag'>News</span><span class='num'>2</span></a>
                                    <a href='#'><span class='tag'>Photography</span><span class='num'>2</span></a>
                                    <a href='#'><span class='tag'>Travel</span><span class='num'>1</span></a>
                                    <a href='#'><span class='tag'>Web Design</span><span class='num'>3</span></a>
                                    <a href='#'><span class='tag'>Wordpress</span><span class='num'>6</span></a>
                                    <a href='#'><span class='tag'>Design</span><span class='num'>4</span></a>
                                    <a href='#'><span class='tag'>CSS3</span><span class='num'>1</span></a>
                                    <a href='#'><span class='tag'>Printing</span><span class='num'>4</span></a>
                                    <a href='#'><span class='tag'>News</span><span class='num'>2</span></a>
                                    <a href='#'><span class='tag'>Photography</span><span class='num'>2</span></a>
                                    <a href='#'><span class='tag'>Travel</span><span class='num'>1</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Column -->

                    <!-- Footer Column -->
                    <div class="hm_columns col-md-3">
                        <div class="hm_column_con">
                            <div class="footer_row clearfix contact_details_widget">
                                <h6 class="footer_title">Contact Info</h6>
                                <ul class="icon_details_list">
                                    <li><i class="ico-map-marker2"></i>98/23 Second Street, San Francisco</li>
                                    <li><i class="ico-phone2"></i>( 90 ) 188 765 3429</li>
                                    <li><i class="ico-envelope5"></i><a href="mailto:http://info@sitename.com">info@sitename.com</a></li>
                                    <li><i class="ico-email"></i><a href="mailto:http://Support@site.com">Support@site.com</a></li>
                                    <li><i class="ico-globe4"></i><a href="http://ideal-theme.com/">ideal-theme.com</a></li>
                                </ul>
                            </div>
                            <div class="footer_row clearfix social_links_widget">
                                <div class="social_links_widget socials_widget clearfix default_socials simple_socials socials_text_color">
                                    <a target="_blank" href="#"><span class="social_in" style="background:#516ca4;"></span><i class="ico-facebook3"></i></a>
                                    <a target="_blank" href="#"><span class="social_in" style="background:#00baff;"></span><i class="ico-twitter5"></i></a>
                                    <a target="_blank" href="#"><span class="social_in" style="background:#dc71a6;"></span><i class="ico-dribbble5"></i></a>
                                    <a target="_blank" href="#"><span class="social_in" style="background:#ed523d;"></span><i class="ico-googleplus"></i></a>
                                    <a target="_blank" href="#"><span class="social_in" style="background:#1985bc;"></span><i class="ico-linkedin2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Column -->

                </div>
            </div>

            <!-- Footer Copyright -->
            <div class="footer_copyright">
                <div class="container clearfix foot_cols">
                    <div class="hm_columns col-md-6">
                        <div class="hm_column_con"> <span class="footer_copy_text">Copyrights &copy; 2017 All Rights Reserved by LookUp Inc.</span> </div>
                    </div>
                    <div class="hm_columns col-md-6">
                        <div class="hm_column_con">
                            <ul id="menu-footer-menu" class="footer_menu f_right clearfix">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Office</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer -->

        <a href="#0" class="hm_go_top"></a>

    </div>

</div>

{{--<script type="text/javascript" src="js/plugins.min.js"></script>--}}

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>