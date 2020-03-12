<?php get_header(); ?>
    
	<section id="home" class="main-banner parallaxie" style="background: url('<?php echo get_template_directory_uri(); ?>/uploads/banner-01-bis.jpg')">
        <div class="heading">
			<h1><?php bloginfo('title'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
    </section>

    <div id="blog" class="section lb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Dernières publications</h3>
            </div><!-- end title -->
			
            <div class="row">
			<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();			
			?>
				<div class="col-md-4 col-sm-6 col-lg-4">
                    <div class="post-box">
                        <div class="post-thumb">
							<?php if (has_post_thumbnail()) :
								the_post_thumbnail();
							else :
							?>
								<img src="<?php echo get_template_directory_uri(); ?>/uploads/blog-01.jpg" class="img-fluid" alt="post-img" />
							<?php endif; ?>
                            <div class="date">
                                <?php the_date();?>
                            </div>
                        </div>
                        <div class="post-info">
                            <center><?php the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?></center>
                            <ul>
                                <li>par 		
									<?php
										if ( get_post_meta(get_the_ID()) ) :	
											echo get_post_custom_values('oeuvre-auteur')[0];
										else :
											the_author();
										endif;
									?>
								</li>
                                <!--<li><a href="#"><b> Commentaires</b></a></li>-->
                            </ul>
                            <p class="post-excerpt"><?php the_excerpt(); ?></p>
                        </div>
                    </div>
				</div>
			<?php
					endwhile;
				else :
					get_template_part( 'content', 'none' );
				endif;
			?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>