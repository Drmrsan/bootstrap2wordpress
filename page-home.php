<?php
/*
	Template Name: Home Page
 */


//Custom Fields variables

$prelaunch_price	= get_post_meta( 7, 'prelaunch_price', true);
$launch_price		= get_post_meta( 7, 'launch_price', true);
$final_price		= get_post_meta( 7, 'final_price', true);
$course_url			= get_post_meta( 7, 'course_url', true);
$button_text		= get_post_meta( 7, 'button_text', true);
$optin_text			= get_post_meta( 7, 'optin_text', true);
$optin_button_text	= get_post_meta( 7, 'optin_button_text', true);

//Advances custom Fields

$income_feature_image	= get_field( 'income_feature_image' );
$income_section_title	= get_field( 'income_section_title' );
$income_section_desc	= get_field( 'income_section_description' );
$reason_1				= get_field( 'reason_1_title' );
$reason_1_desc			= get_field( 'reason_1_description' );
$reason_2				= get_field( 'reason_2_title' );
$reason_2_desc			= get_field( 'reason_2_description' );


get_header(); ?>

<!---HERO
        ======================================================================== -->
        <section id="hero" data-type="background" data-speed="5">
            <article>
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to WordPress" class="logo">
                        
                        </div><!--Col-->
                        
                        <div class="col-sm-7 hero-text">
                            <h1><?php bloginfo('name'); ?></h1>
                            <p class="lead"><?php bloginfo('description'); ?></p>
                            
                            <div id="price-timeline">
                                <div class="price active">
                                    <h4>Launch Price <small>Coming soon!</small></h4>
                                    <span><?php echo $prelaunch_price; ?></span>
                                
                                </div><!--Price-->
                                
                                <div class="price">
                                    <h4>Launch Price <small>Coming soon!</small></h4>
                                    <span><?php echo $launch_price; ?></span>
                                
                                </div><!--Price-->
                                
                                <div class="price">
                                    <h4>Final Price <small>Coming soon!</small></h4>
                                    <span><?php echo $final_price; ?></span>
                                
                                </div><!--Price-->
                            
                            </div><!--Price-timeline -->
                            <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $button_text; ?></a></p>
                        
                        </div><!--Col-->
                    
                    </div><!--Row-->
                
                </div><!--Container-->
            
            
            </article>
        
        </section><!--Hero-->
        
        <!---OPT IN SECTION
        ======================================================================== -->
        <section id="optin">    
            
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-8">
                       <p class="lead"><?php echo $optin_text; ?></p> 
                    </div>

                    <div class="col-sm-4">
                        <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>
                    </div>
                    
                </div> <!-- colon -->
            </div> <!-- container -->           

        </section>
        
        <!---BOOST YOUR INCOME
        ======================================================================== -->
        <section id="boost-income">

            <div class="container">                    
                <div class="section-header">

                	<!-- if user uploaded an image -->
                
	                <?php if ( !empty ($income_feature_image) ) : ?>

	                	<img src=" <?php echo $income_feature_image['url']; ?>" alt-" <?php echo $income_feature_image['alt']; ?>">

	           		<?php endif; ?>

                    
                    <h2><?php echo $income_section_title; ?></h2>

                    <p class="lead"><?php echo $income_section_desc ?></p>

                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <h3><?php echo $reason_1; ?></h3>
                        <p><?php echo $reason_1_desc; ?></p>
                    </div>

                    <div class="col-sm-6">
                        <h3><?php echo $reason_2; ?></h3>
                        <p><?php echo $reason_2_desc; ?></p>
                    </div>
                </div>
            </div>
        
        </section>
        
        <!---WHO BENEFITS
        ======================================================================== -->
        <section id="who-benefits">
            <div class="container">
                
                <div class="section-header">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-pad.png" alt="Pad and pencil">
                    <h2>Who Should Take This Course</h2>
                </div>

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        
                        <h3>Graphics &amp Web Designers</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At aliquid quam ea, non atque vel veniam, reprehenderit illum, obcaecati illo numquam nesciunt magni ratione ipsa maxime molestiae laboriosam deleniti voluptate!lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus provident dolorum, magni quia. Facere doloribus soluta molestias cum, vitae, dignissimos non eum porro animi atque cupiditate, sint molestiae omnis assumenda.</p>

                        <h3>Entrepreneurs</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At aliquid quam ea, non atque vel veniam, reprehenderit illum, obcaecati illo numquam nesciunt magni ratione ipsa maxime molestiae laboriosam deleniti voluptate!lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus provident dolorum, magni quia. Facere doloribus soluta molestias cum, vitae, dignissimos non eum porro animi atque cupiditate, sint molestiae omnis assumenda.</p>

                        <h3>Employes</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At aliquid quam ea, non atque vel veniam, reprehenderit illum, obcaecati illo numquam nesciunt magni ratione ipsa maxime molestiae laboriosam deleniti voluptate!lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus provident dolorum, magni quia. Facere doloribus soluta molestias cum, vitae, dignissimos non eum porro animi atque cupiditate, sint molestiae omnis assumenda.</p>

                    </div>
                </div>

            </div>
        </section>
        
        <!---COURSE FEATURES
        ======================================================================== -->
        <section id="course-features"> 

            <div class="container">
                
                <div class="section-header">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-rocket.png" alt="Rocket">
                    <h2>Course Features</h2>
                </div>

                <div class="row">
                    
                    <div class="col-sm-2">
                        <i class="ci ci-watch"></i>
                        <h4>Lifetime access for 80+ lectures</h4>
                    </div>

                    <div class="col-sm-2">
                        <i class="ci ci-computer"></i>
                        <h4>10+ hours of HD content</h4>
                    </div>

                    <div class="col-sm-2">
                        <i class="ci ci-calendar"></i>
                        <h4>30-day money back garantee</h4>
                    </div>

                    <div class="col-sm-2">
                        <i class="ci ci-community"></i>
                        <h4>Access to a community of like-minded students</h4>
                    </div>

                    <div class="col-sm-2">
                        <i class="ci ci-instructor"></i>
                        <h4>Direct access to the instructor</h4>
                    </div>

                    <div class="col-sm-2">
                        <i class="ci ci-device"></i>
                        <h4>Accessible content on your mobile devices</h4>
                    </div>
                
                </div> <!-- row -->
            </div><!-- container -->
        
        </section>
        
        <!---PROJECT FEATURES
        ======================================================================== -->
        <section id="project-features">
            <div class="container">
            

            <h2>Final Project Features</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex laborum inventore hic quam facere, officia omnis quis eveniet maxime eum nesciunt animi totam eius, consectetur, id neque ipsa, temporibus cum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium nemo nesciunt culpa amet commodi eum non est harum sit iure cupiditate voluptas iusto blanditiis repudiandae quam, similique fugiat beatae eius.</p>
            
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" alt="Design">
                    <h3>Sexy &amp Modern Design</h3>
                    <p>Learn how to Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident obcaecati, fugit perferendis eum minima fuga unde architecto libero quas harum eos corrupti cupiditate culpa necessitatibus, molestias corporis non dignissimos accusantium!</p>
                </div>
                <div class="col-sm-4">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-code.png" alt="Code">
                    <h3>Sexy &amp Modern Design</h3>
                    <p>Learn how to Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident obcaecati, fugit perferendis eum minima fuga unde architecto libero quas harum eos corrupti cupiditate culpa necessitatibus, molestias corporis non dignissimos accusantium!</p>
                </div>
                <div class="col-sm-4">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-cms.png" alt="CMS">
                    <h3>Easy to use CMS</h3>
                    <p>Learn how to Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident obcaecati, fugit perferendis eum minima fuga unde architecto libero quas harum eos corrupti cupiditate culpa necessitatibus, molestias corporis non dignissimos accusantium!</p>
                </div>

            </div>
            </div> <!-- container -->
        </section>
        
        <!---VIDEO FEATURETTE
        ======================================================================== -->
        <section id="featurette">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-8 col-sm-offset-2">
                        <h2>Watch the course introduction</h2>

                        <iframe width="100%" height="415" src="https://www.youtube.com/embed/4KvXrbabutg" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        
        <!---INSTRUCTOR
        ======================================================================== -->
        <section id="instructor">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-8">
                                <h2>Your instructor <small>Goran Ugrai</small></h2>
                            </div>
                            <div class="col-lg-4">
                                <a href="http://twiter.com/drmrsan" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                                <a href="http://facebook.com/goranugrai" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
                                <a href="http://plus.google.com/goranugrai" target="_blank" class="badge social google"><i class="fa fa-google"></i></a>
                            </div>
                        </div>

                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quisquam in, enim quo inventore nostrum quos voluptatibus iusto accusamus aliquid placeat illum porro. Ipsa impedit magnam, unde illum. Dolor, explicabo!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quisquam in, enim quo inventore nostrum quos voluptatibus iusto accusamus aliquid placeat illum porro. Ipsa impedit magnam, unde illum. Dolor, explicabo!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quisquam in, enim quo inventore nostrum quos voluptatibus iusto accusamus aliquid placeat illum porro. Ipsa impedit magnam, unde illum. Dolor, explicabo!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quisquam in, enim quo inventore nostrum quos voluptatibus iusto accusamus aliquid placeat illum porro. Ipsa impedit magnam, unde illum. Dolor, explicabo!</p>

                        <hr>

                        <h3>The numbers <small>They dont lie</small></h3>

                        <div class="row">
                            <div class="col-xs-4">
                                <div class="num">
                                    <div class="num-content">
                                        41,000+ <span>Students</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="num">
                                    <div class="num-content">
                                        568 <span>Reviews</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="num">
                                    <div class="num-content">
                                        8 <span>Coursest</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        
        <!---TESTIMONIALS
        ======================================================================== -->
        <section id="kudos">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h2>What people say about ME!?</h2>

                        <div class="row testimonial">
                            <div class="col-sm-4">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
                            </div>
                            <div class="col-sm-8">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit vel quam atque, ea, molestiae laboriosam, aut quos debitis ratione omnis veritatis eos. Soluta ipsum ex, facilis necessitatibus nulla tempore blanditiis.
                                    <cite>&mdash; Brennan, Lorem ipsum dolor sit amet, consectetur adipisicing elit.</cite> 
                                </blockquote>
                            </div>
                        </div>

                        <div class="row testimonial">
                            <div class="col-sm-4">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Ben">
                            </div>
                            <div class="col-sm-8">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit vel quam atque, ea, molestiae laboriosam, aut quos debitis ratione omnis veritatis eos. Soluta ipsum ex, facilis necessitatibus nulla tempore blanditiis.
                                    <cite>&mdash; Ben, Lorem ipsum dolor sit amet, consectetur adipisicing elit.</cite> 
                                </blockquote>
                            </div>
                        </div>

                        <div class="row testimonial">
                            <div class="col-sm-4">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Aj">
                            </div>
                            <div class="col-sm-8">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit vel quam atque, ea, molestiae laboriosam, aut quos debitis ratione omnis veritatis eos. Soluta ipsum ex, facilis necessitatibus nulla tempore blanditiis.
                                    <cite>&mdash; AJ, Lorem ipsum dolor sit amet, consectetur adipisicing elit.</cite> 
                                </blockquote>
                            </div>
                        </div>

                        <div class="row testimonial">
                            <div class="col-sm-4">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Ben">
                            </div>
                            <div class="col-sm-8">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit vel quam atque, ea, molestiae laboriosam, aut quos debitis ratione omnis veritatis eos. Soluta ipsum ex, facilis necessitatibus nulla tempore blanditiis.
                                    <cite>&mdash; Ernest, Lorem ipsum dolor sit amet, consectetur adipisicing elit.</cite> 
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>
