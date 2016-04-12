		<?php
		/**
		 *  The template for displaying 404.
		 *
		 *  @package lawyeria-lite
		 */
		get_header();
		?>
			<section class="wide-nav">
				<div class="wrapper">
					
						<?php
						if ( get_theme_mod( 'lawyeria_lite_404_title','404 Error' ) ) {
							echo '<h3>';
								echo get_theme_mod( 'lawyeria_lite_404_title','404 Error' );
							echo '</h3>';
						}
						?>

				</div><!--/div .wrapper-->
			</section><!--/section .wide-nav-->
		</header>
		<section id="content">
			<div class="wrapper cf">
				<div id="posts">
					<div class="post">
						<div class="post-excerpt">
							<?php
								echo get_theme_mod( 'lawyeria_lite_404_content', sprintf(__( 'Oops, I screwed up and you discovered my fatal flaw. Well, we\'re not all perfect, but we try. Can you try this again or maybe visit our %s to start fresh. We\'ll do better next time.', 'lawyeria-lite' ), '<a title="themeIsle" href="'. home_url() .'">'.__( 'Home Page', 'lawyeria-lite').'</a>' ) );
							?>
						</div><!--/.post-excerpt-->
					</div><!--/div .post-->
				</div><!--/div #posts-->
				<?php get_sidebar(); ?>
			</div><!--/div .wrapper-->
		</section><!--/section #content-->
		<?php get_footer(); ?>
