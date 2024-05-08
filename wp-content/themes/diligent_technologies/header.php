<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package diligent_technologies
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); 
	include 'assets/css/theme_options.php';
	?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="masthead" class="site-header main-header" style="background-color:<?php echo get_option( "themecolorPicker")?>">
            <!-- <div class="container"> -->
            <div class="inner">
                <!-- <div class="logo">
					<?php the_custom_logo(); ?>
				</div>	 -->

                <!-- desktop menu -->
                <!-- <nav id="site-navigation" class="navbar__wrap d-lg-block d-none">
					<?php	
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
					?>
				</nav> -->

                <!-- <div class="header__cta d-lg-block d-none">
					<a href="<?php echo get_option( "headerBtnCTA")?>" class="header__cta--btn btn" >SCHEDULE STRATEGY SESSION</a>
				</div> -->

                <!-- <button id="mobile__menu--button" class="mobile-menu-button--collapse d-lg-none" type="button">
					<span class="mobile-menu-button-box">
						<span class="mobile-menu-button-inner"></span>
					</span>
				</button> -->
            </div>
            <!-- custom header -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid ">
                    <a class="navbar-brand header-logo" href="#">
                        <img src="<?php echo get_template_directory_uri() . '/images/header-logo.PNG' ?>"
                            alt="img" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse toggle-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto" id="menu">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#home">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#about">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#book-now"> About Us </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#gallery">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#gallery">Career</a>
                            </li>
                        </ul>
                        <div class="header-btn">
                            <a class="bg-fill-btn" href="#"> Hire Now</a>

                        </div>
                    </div>
                </div>
            </nav>
            <!-- custom header -->


            <!-- </div> -->

            <!-- mobile menu -->
            <!-- <nav id="mobile__menu" class="mob__menu d-lg-none">
			<div class="container text-center">
				<?php	
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
				<div class="header__cta">
					<a href="<?php echo get_option( "headerBtnCTA")?>" class="header__cta--btn btn">SCHEDULE STRATEGY SESSION</a>
				</div>
				
			</div>
		</nav> -->

        </header><!-- #masthead -->