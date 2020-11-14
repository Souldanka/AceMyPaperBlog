<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package acemypaper
 */

get_header();
?>
	
	<div id="primary" class="content-area ">
		

		<main id="main" class="site-main">
			<div class="allposts">
				<a  class="allpost_url" href="<?php echo get_home_url(); ?>/">All posts</a>
			</div>
			
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		
		


			

			
			

				<div class="recentposts">
					<div class="recentposts__box">

						<div class="recentposts__head">Recent Posts:</div>
							<div class="recentposts__menu">
								<div class="recentposts__items"><a href="<?php the_permalink($post = 36); ?>">How to Write a Speech for Presentation</a></div>
								<div class="recentposts__items"><a href="<?php the_permalink($post = 30); ?>">Write a Personal Statemment for Graduate School</a></div>
								<div class="recentposts__items"><a href="<?php the_permalink($post = 14); ?>">What are the Main Parts of an Essay?</a></div>
								<div class="recentposts__items"><a href="<?php the_permalink($post = 1); ?>">How to Write a Research Paper – Most Essential Skills</a></div>
							</div>
					</div>
				</div>
		<!-- Section Hire the best writer -->
		<div class="bestwriter">
			<div class="bestwriter-box">
				<div class="bestwriter__left">
					<div class="bestwriter__h">Hire the best writer</div>
					<div class="bestwriter__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </div>
					<button class="contact__form-btn "><a class="order__btn" href="/manage/signup&quot;">Order now</a></button>
				</div>
				<div class="bestwriter__right">
					<img alt="bestwriter" class="bestwriter__img" src="<?php bloginfo('template_url'); ?>/images/writers.png"> 
				</div>
			</div>
		</div>

		<div class="subscribe-form"> 
			<div class="subscribe-form__left"> 
				<div class="subscribe-form__title">Subscribe to our newsletter</div> 
			</div> 
			<div class="subscribe-form__right"> 
				<form> 
					<div> 
						<input class="subscribe-form__input email-field" type="text" placeholder="Your Email">
						<span class="error">Error message</span> 
					</div><a class="subscribe-form__btn site-btn" href="#">Subscribe</a> 
				</form> 
			</div> 
				<div class="subscribe-form-success"> 
				<div class="subscribe-form-success__txt">Awesome. Now you'll never miss out.</div>
				<div class="subscribe-form-success__img"></div> 
			</div> 
		</div>

		<div class="skip">
			<div class="skipbox">
				<div class="left">Skip that all-nighter.</div>
				<div class="right">
					<a href="">Do My Paper</a>
				</div>
			</div>
		</div>
		<?php
get_footer(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->



