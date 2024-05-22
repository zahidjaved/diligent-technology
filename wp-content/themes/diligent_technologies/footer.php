<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package diligent_technologies
 */

 //get_template_part( 'template-parts/content', 'banner_cta' );
 
 wp_footer(); ?>

<footer class="footer main-footer">
    <!-- <div class="container">
        <div class="inner">
            <div class="footer__top">
                <div class="footer__links">
                    <a href="">Home</a>
                    <a href="">About Us</a>
                    <a href="">Contact Us</a>
                </div>
                <div class="footer__social">
                    <a href="<?php echo get_option( "footerLogoUrl")?>" class="footer__site--logo">
                        <img src="https://placehold.co/100x104" alt="">
                    </a>
                    <h6>Follow us</h6>
                    <div class="footer__social--links">
                        <a href="<?php echo get_option( "fbUrl")?>" class="fa-brands fa-square-facebook"></a>
                        <a href="<?php echo get_option( "youTubeUrl")?>" class="fa-brands fa-youtube"></a>
                        <a href="<?php echo get_option( "twitterUrl")?>" class="fa-brands fa-twitter"></a>
                        <a href="<?php echo get_option( "instagramUrl")?>" class="fa-brands fa-instagram"></a>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="copyright__text">
                    <p>
                        <?php //echo get_option( "copyRightText")?>
                        Copyright text
                    </p>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container card">
        <div class="row">
            <div class="col-lg-5 ">
                <div class="media">
                   <a href=""> <img src="<?php echo get_template_directory_uri() . '/images/footer-logo.PNG'?>" alt="img"></a>
                    <div class="description">
                        <p>Among the most trusted staff augmentation companies to provide you with unrivaled IT and
                            software
                            development services. Work with anyone, from anywhere, at any time.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 ">
                <div class="links">
                    <ul>
                        <li><a href="">Menu</a></li>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Career</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ">
                <div class="footer-cta-btn">
                    <a class="cta-btn" href="">Request a Call<span class="btn-svg"><svg
                                xmlns="http://www.w3.org/2000/svg" width="37" height="36" viewBox="0 0 37 36"
                                fill="none">

                                <g clip-path="url(#clip0_599_1367)">
                                    <path
                                        d="M18.5 0C23.2739 0 27.8523 1.89642 31.2279 5.27208C34.6036 8.64773 36.5 13.2261 36.5 18C36.5 22.7739 34.6036 27.3523 31.2279 30.7279C27.8523 34.1036 23.2739 36 18.5 36C13.7261 36 9.14773 34.1036 5.77208 30.7279C2.39642 27.3523 0.5 22.7739 0.5 18C0.5 13.2261 2.39642 8.64773 5.77208 5.27208C9.14773 1.89642 13.7261 0 18.5 0ZM10.625 16.875C10.3266 16.875 10.0405 16.9935 9.8295 17.2045C9.61853 17.4155 9.5 17.7016 9.5 18C9.5 18.2984 9.61853 18.5845 9.8295 18.7955C10.0405 19.0065 10.3266 19.125 10.625 19.125H23.6593L18.8285 23.9535C18.7239 24.0581 18.6409 24.1823 18.5843 24.3189C18.5277 24.4556 18.4986 24.6021 18.4986 24.75C18.4986 24.8979 18.5277 25.0444 18.5843 25.1811C18.6409 25.3177 18.7239 25.4419 18.8285 25.5465C18.9331 25.6511 19.0573 25.7341 19.1939 25.7907C19.3306 25.8473 19.4771 25.8764 19.625 25.8764C19.7729 25.8764 19.9194 25.8473 20.0561 25.7907C20.1927 25.7341 20.3169 25.6511 20.4215 25.5465L27.1715 18.7965C27.2763 18.692 27.3594 18.5679 27.4161 18.4312C27.4728 18.2945 27.502 18.148 27.502 18C27.502 17.852 27.4728 17.7055 27.4161 17.5688C27.3594 17.4321 27.2763 17.308 27.1715 17.2035L20.4215 10.4535C20.3169 10.3489 20.1927 10.2659 20.0561 10.2093C19.9194 10.1527 19.7729 10.1236 19.625 10.1236C19.4771 10.1236 19.3306 10.1527 19.1939 10.2093C19.0573 10.2659 18.9331 10.3489 18.8285 10.4535C18.7239 10.5581 18.6409 10.6823 18.5843 10.8189C18.5277 10.9556 18.4986 11.1021 18.4986 11.25C18.4986 11.3979 18.5277 11.5444 18.5843 11.6811C18.6409 11.8177 18.7239 11.9419 18.8285 12.0465L23.6593 16.875H10.625Z"
                                        fill="#FBFF29"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_599_1367">
                                        <rect width="36" height="36" fill="white" transform="translate(0.5)"></rect>
                                    </clipPath>
                                </defs>
                            </svg></span></a>


                    <ul>
                        <li><a href="">14092694818</a></li>
                        <li><a href="">info@diligenttechnologies.co</a></li>
                    </ul>
                </div>
            </div>
            <div class=" col-md-6 col-lg-4 ">
                <div class="footer-address">
                    <h4>USA</h4>
                    <div class="description">
                        <p>10105 E Via Linda Ste 103 #164 Scottsdale, AZ 85258</p>
                    </div>
                </div>
            </div>
            <div class=" col-md-6 col-lg-5">
                <div class="footer-address">
                    <h4>ASIA</h4>
                    <div class="description">
                        <p>3-I, 2nd Floor, Block 3, Business Bay, Phase 7, Bahria Town, Islamabad, Pakistan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
 
</footer>

</body>

</html>