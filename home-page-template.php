<?php 
/**
 * Home Page Template
 *
   Template Name:  Home Page Template
 *
 */
?>
<?php get_header(); ?>

<section id="hero" role="hero-unit">
	<div class="container-fluid">
		<div class="tag">
			<h1><?php $site_description = get_bloginfo( 'description', 'display' ); echo "$site_description";?></h1>
		</div>
					<div class="slides">

						<div class="item">
							<img src="<?php the_field('slide_1');?>" class="img-responsive">
					  </div><!-- end .item -->

					<div class="item">
							<img src="<?php the_field('slide_2');?>" class="img-responsive">
					</div><!-- end .item -->

			</div><!-- end .slides-->
	</div><!-- end .container-fluid -->
</section> <!-- end hero-unit -->

<section class="mobile-menu visible-xs">
	<div class="container">
					 	<ul>
					 		<li><a class="btn btn-block" href="#quote">Ask For A Free Quote</a></li>
					 		<li><a class="btn btn-block" href="#try-us">Why you should try our cleaning services</a></li>
					 		<li><a class="btn btn-block" href="#feedback">Client Testimonials</a></li>
					 	</ul>
	</div><!-- .container -->
</section><!-- .mobile-menu -->

<section id="info">
	<div class="container">
		<div class="row">
			<div class="col-md-7">	
     		<?php the_field('info'); ?>
			</div>
			<div class="quote-form col-md-5"><!-- begin form -->
				<h3 class="center-block" id="quote" style="padding-top: 75px; margin-top: -75px;">Ask For a Free Quote</h3>
     		<?php echo do_shortcode( '[contact-form-7 id="76" title="Request A Quote"]' ); ?>
			</div><!-- .quote-form -->
		</div><!-- .row -->
	</div><!-- .container -->
</section>

<section id="main-content">
	<div class="container">
			<div class="row">
						<div class="col-sm-12" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">
									<h3 class="page-title" itemprop="headline" id="try-us" style="padding-top: 75px; margin-top: -75px;"><?php the_title(); ?></h3>
								</header> <!-- end article header -->

								<div class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</div> <!-- end entry-content -->

							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
						</div> <!-- end .col-sm-12 -->
					</div><!-- end .row -->

	</div><!-- end .container -->

</section><!-- end main -->

<section id="testimonials">
	<div class="container">
				<div class="row">
					<h1 class="section-header center-block" id="feedback" style="padding-top: 70px; margin-top: -70px;">Client Testimonials</h1>

					<div class="test col-md-3 clearfix">
						<blockquote><?php the_field('test_1'); ?></blockquote>
						<p><em><?php the_field('client_1'); ?></em></p>
					</div>

					<div class="test col-md-3 clearfix">
						<blockquote><?php the_field('test_2'); ?></blockquote>
						<p><em><?php the_field('client_2'); ?></em></p>
					</div>

					<div class="test col-md-3 clearfix">
						<blockquote><?php the_field('test_3'); ?></blockquote>
						<p><em><?php the_field('client_3'); ?></em></p>
					</div>

				</div><!-- .row -->
	</div><!-- .container -->

</section>



<?php get_footer(); ?>