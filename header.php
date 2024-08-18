<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woo-theme-design
 */

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->

    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php wp_title( '|', true, 'right' );?></title>
    <meta name="description" content="" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'woo-theme-design' ); ?></a>
	<!-- Preloader -->
	<div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->
	<!-- Start Header Area -->
	<header class="header navbar-area">
        <!-- Start Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-left">
                            <ul class="menu-top-link">
                                <li>
                                    <div class="select-position">
                                        <select id="select4">
                                            <option value="0" selected>$ USD</option>
                                            <option value="1">€ EURO</option>
                                            <option value="2">$ CAD</option>
                                            <option value="3">₹ INR</option>
                                            <option value="4">¥ CNY</option>
                                            <option value="5">৳ BDT</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="select-position">
                                        <select id="select5">
                                            <option value="0" selected>English</option>
                                            <option value="1">Español</option>
                                            <option value="2">Filipino</option>
                                            <option value="3">Français</option>
                                            <option value="4">العربية</option>
                                            <option value="5">हिन्दी</option>
                                            <option value="6">বাংলা</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-middle">
						<div class="nav-inner">
                 
				 <!-- Start Navbar -->
				  <nav class="navbar navbar-expand-lg">
					<button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="toggler-icon"></span>
						<span class="toggler-icon"></span>
						<span class="toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
						<?php
						wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'nav',
						'menu_class'     => 'navbar-nav ms-auto', // Optional menu class
						'container' => false,
						'nav_menu_css_class'   => 'nav-item',
						'fallback_cb' => '__return_false',
						'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
						'depth' => 2,
							'walker'         => new Bootstrap_Nav_Walker(), // Use the custom walker
						));
						?>
					</div> <!-- navbar collapse -->
				</nav>
				 <!-- End Navbar -->
			 </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-end">
                            <div class="user">
                                <i class="lni lni-user"></i>
                                Hello
                            </div>
                            <ul class="user-login">
                                <li>
                                    <a href="login.html">Sign In</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
		<div class="site-branding">

		</div><!-- .site-branding -->

		
        <!-- Start Header Middle -->
        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-2 col-6">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$woo_theme_design_description = get_bloginfo( 'description', 'display' );
					if ( $woo_theme_design_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $woo_theme_design_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
                        <!-- Start Header Logo -->
                        <!-- <a  href="index.html">
                            <img src="assets/images/logo/logo.svg" alt="Logo">
                        </a> -->
                        <!-- End Header Logo -->
                    </div>
					<div class="col-lg-3 col-md-3">
						<!-- Start Mega Category Menu -->
						<div class="mega-category-menu">
										<span class="cat-button"><i class="lni lni-menu"></i>All Categories</span>
										<ul class="sub-category">
											<li><a href="product-grids.html">Electronics <i class="lni lni-chevron-right"></i></a>
												<ul class="inner-sub-category">
													<li><a href="product-grids.html">Digital Cameras</a></li>
													<li><a href="product-grids.html">Camcorders</a></li>
													<li><a href="product-grids.html">Camera Drones</a></li>
													<li><a href="product-grids.html">Smart Watches</a></li>
													<li><a href="product-grids.html">Headphones</a></li>
													<li><a href="product-grids.html">MP3 Players</a></li>
													<li><a href="product-grids.html">Microphones</a></li>
													<li><a href="product-grids.html">Chargers</a></li>
													<li><a href="product-grids.html">Batteries</a></li>
													<li><a href="product-grids.html">Cables & Adapters</a></li>
												</ul>
											</li>
											<li><a href="product-grids.html">accessories</a></li>
											<li><a href="product-grids.html">Televisions</a></li>
											<li><a href="product-grids.html">best selling</a></li>
											<li><a href="product-grids.html">top 100 offer</a></li>
											<li><a href="product-grids.html">sunglass</a></li>
											<li><a href="product-grids.html">watch</a></li>
											<li><a href="product-grids.html">man’s product</a></li>
											<li><a href="product-grids.html">Home Audio & Theater</a></li>
											<li><a href="product-grids.html">Computers & Tablets </a></li>
											<li><a href="product-grids.html">Video Games </a></li>
											<li><a href="product-grids.html">Home Appliances </a></li>
										</ul>
                        			</div>
                        <!-- End Mega Category Menu -->
					</div>
                    <div class="col-lg-5 col-md-7 d-xs-none">
                        <!-- Start Main Menu Search -->
                        <div class="main-menu-search">
                            <!-- navbar search start -->
                            <div class="navbar-search search-style-5">
                                <div class="search-select">
									

                                </div>
                                <div class="search-input">
                                    <input type="text" placeholder="Search">
                                </div>
                                <div class="search-btn">
                                    <button><i class="lni lni-search-alt"></i></button>
                                </div>
                            </div>
                            <!-- navbar search Ends -->
                        </div>
                        <!-- End Main Menu Search -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-5">
                        <div class="middle-left-area">
                            <!-- <div class="nav-hotline">
                                <i class="lni lni-phone"></i>
                                <h3>Hotline:
                                    <span>(+100) 123 456 7890</span>
                                </h3>
                            </div> -->
                            <div class="navbar-cart">
                                <div class="wishlist">
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-heart"></i>
                                        <span class="total-items"><?php echo my_custom_wishlist_count(); ?></span>
                                    </a>
                                </div>
                                <div class="cart-items">
                                    <a href="javascript:void(0)" class="main-btn">
                                        <i class="lni lni-cart"></i>
                                        <span class="total-items"><?php echo my_woocommerce_cart_count(); ?></span>
                                    </a>
                                    <!-- Shopping Item -->
                                    <div class="shopping-item">
                                        <div class="dropdown-cart-header">
                                            <span>2 Items</span>
                                            <a href="cart.html">View Cart</a>
                                        </div>
                                        <ul class="shopping-list">
                                            <li>
                                                <a href="javascript:void(0)" class="remove" title="Remove this item"><i
                                                        class="lni lni-close"></i></a>
                                                <div class="cart-img-head">
                                                    <a class="cart-img" href="product-details.html"><img
                                                            src="assets/images/header/cart-items/item1.jpg" alt="#"></a>
                                                </div>

                                                <div class="content">
                                                    <h4><a href="product-details.html">
                                                            Apple Watch Series 6</a></h4>
                                                    <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="remove" title="Remove this item"><i
                                                        class="lni lni-close"></i></a>
                                                <div class="cart-img-head">
                                                    <a class="cart-img" href="product-details.html"><img
                                                            src="assets/images/header/cart-items/item2.jpg" alt="#"></a>
                                                </div>
                                                <div class="content">
                                                    <h4><a href="product-details.html">Wi-Fi Smart Camera</a></h4>
                                                    <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="bottom">
                                            <div class="total">
                                                <span>Total</span>
                                                <span class="total-amount">$134.00</span>
                                            </div>
                                            <div class="button">
                                                <a href="checkout.html" class="btn animate">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Shopping Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->

    </header>
    <!-- End Header Area -->

	<!-- <header id="masthead" class="site-header">

	</header> -->
	<!-- #masthead -->
	 
