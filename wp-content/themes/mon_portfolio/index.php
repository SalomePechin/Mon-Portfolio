<?php get_header(); ?>

    <div id="blog" class="section lb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Blog</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/blog-01.jpg" class="img-fluid" alt="post-img" />
                            <div class="date">
                                <?php the_date();?>
                            </div>
                        </div>
                        <div class="post-info">
                            <center><?php the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?></center>
                            <ul>
                                <li>by <?php the_author(); ?></li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
                            <p><?php the_excerpt(); ?></p>
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