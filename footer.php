<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>

<!---SIGN UP SECTION
        ======================================================================== -->
        <section id="signup" data-type="background" data-speed="4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2>Are you ready to take your coding skills to the <strong>next level?</strong></h2>
                        <p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
                    </div>
                </div>
            </div>
        
        </section>
        
        <!---FOOTER
        ======================================================================== -->
        <footer>
            <div class="container">
                <div class="col-sm-3">
                    <p><a href="#"><img src="assets/img/logo.png" alt=""></a></p>
                </div>
                <div class="col-sm-6">
                    <nav>
                        <ul class="list-unstyled list-inline">
                            <li><a href="">Home</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Resources</a></li>
                            <li><a href="">Contact</a></li>
                            <li class="signup-link"><a href="">Sign up now</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-sm-3">
                    <p class="pull-right">
                        &copy 2015 Drmrsan
                    </p>
                </div>
            </div>
        </footer>
        
        <!---MODAL
        ======================================================================== -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <button class="close" type="button" data-dissmis="modal"><span aria-hidden="true">&times</span><span class="sr-only">Close</span></button>

                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i>Subscribe four our mailing list</h4>
                    </div>

                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis nihil architecto nesciunt cumque repellat ipsum distinctio hic sed reiciendis facilis consequuntur, provident quae, vitae unde nostrum aut culpa <em>for free!</em>aspernatur inventore.</p>

                        <form role="form" class="form-inline">
                            <div class="form-group">
                                <label for="subscribe-name" class="sr-only">Your name</label>
                                <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                            </div>
                            <div class="form-group">
                                <label for="subscribe-email" class="sr-only">and your email</label>
                                <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                            </div>

                            <input type="text" class="btn btn-danger" value="Subscribe!">
                        </form>

                        <hr>

                        <p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut non recusandae suscipit quod nulla harum, repellendus ea repellat iste eaque maxime nostrum saepe? Laboriosam distinctio, ipsum officiis vitae harum voluptatum.</small></p>
                    </div>

                </div>
            </div>            
        </div>
	</div><!-- #content -->


<?php wp_footer(); ?>
</body>
</html>
