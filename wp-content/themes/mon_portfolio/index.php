<?php get_header(); ?>
<<<<<<< HEAD
    
	<section id="home" class="main-banner parallaxie" style="background: url('<?php echo get_template_directory_uri(); ?>/uploads/banner-01-bis.jpg')">
        <div class="heading">
			<h1><?php bloginfo('title'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
    </section>
=======
>>>>>>> 7eb0f46a4620c685182b6663b903eeb0a8e53e84

    <div id="blog" class="section lb">
        <div class="container">
            <div class="section-title text-left">
<<<<<<< HEAD
                <h3>Dernières publications</h3>
=======
                <h3>Blog</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
>>>>>>> 7eb0f46a4620c685182b6663b903eeb0a8e53e84
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
<<<<<<< HEAD
							<?php if (has_post_thumbnail()) :
								the_post_thumbnail();
							else :
							?>
								<img src="<?php echo get_template_directory_uri(); ?>/uploads/blog-01.jpg" class="img-fluid" alt="post-img" />
							<?php endif; ?>
=======
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/blog-01.jpg" class="img-fluid" alt="post-img" />
>>>>>>> 7eb0f46a4620c685182b6663b903eeb0a8e53e84
                            <div class="date">
                                <?php the_date();?>
                            </div>
                        </div>
                        <div class="post-info">
                            <center><?php the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?></center>
                            <ul>
<<<<<<< HEAD
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
=======
                                <li>by <?php the_author(); ?></li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
                            <p><?php the_excerpt(); ?></p>
>>>>>>> 7eb0f46a4620c685182b6663b903eeb0a8e53e84
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