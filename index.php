<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package acemypaper
 */

get_header();
?>

	<div class="subheader">
	<div class="sudheader__box">
		<div class="subheader__left">
			<div class="subheader__h">Blog</div>
			<div class="subheader__text">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi libero consectetur eius dolorum dignissimos 
			</div>
			<div class="skipbox__button">
				<a class="btn-violet site-btn subheader__btn" href="/manage/signup&quot;">Order Now</a>
				<a class="site-btn subheader__btn btn-white" href="/manage/signup&quot;">Start the story</a>
			</div>
		</div>
			<div class="subheader__right">
				<img alt="" class="subheader__blog-img" src="<?php bloginfo('template_url'); ?>/images/illustration-blog.svg">
			</div>
	</div>
	

	</div>



	<div id="primary" class="content-area">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	<!-- <?php
		the_posts_pagination( $args = array(
			'show_all'     => false, // показаны все страницы участвующие в пагинации
			'end_size'     => 1,     // количество страниц на концах
			'mid_size'     => 1,     // количество страниц вокруг текущей
			'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
			'prev_text'    => __('<'),
			'next_text'    => __('>'),
			'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
			'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
			'screen_reader_text' => __( 'Posts navigation' ),
		));
	?> -->
	<div class="post-nav">
	<?php 
		echo paginate_links(
			array(
				'prev_text' => '',
				'next_text' => '',
			)
		);
	?>
	</div>
	
		

		

		
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
					<a class="bestwriter-btn btn-violet site-btn subheader__btn" href="/manage/signup&quot;">Order Now</a>
				</div>
				<div class="bestwriter__right">
					<img alt="bestwriter" class="bestwriter__img" src="<?php bloginfo('template_url'); ?>/images/writers.png"> 
				</div>
			</div>
		</div>

	

<?php
// get_sidebar();
get_footer();
