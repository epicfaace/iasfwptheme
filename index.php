<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row 200%">
							<div class="4u 12u(mobile)" id="sidebar">
								<?php get_sidebar('main'); ?>
							</div>
							<div class="8u 12u(mobile) important(mobile)" id="content">
								<article id="main">
									<header>
										<h2><a href="#"><?php the_title(); ?></a></h2>
									</header>
									<section>
									    <?php the_content(); ?>
									</section>
								</article>
							</div>
						</div>
					</div>

				</div>

<?php endwhile; ?>

<?php get_footer(); ?>
