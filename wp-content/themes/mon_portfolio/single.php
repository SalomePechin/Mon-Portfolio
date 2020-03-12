<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Mon_Portfolio
 * @since Mon Portfolio 1.0
 */
 
get_header(); ?>

<<<<<<< HEAD
	<section id="home" class="main-banner parallaxie" style="background: url('<?php echo get_template_directory_uri(); ?>/uploads/banner-01-bis.jpg')">
        <div class="heading">
			<h1><?php the_title(); ?></h1>
            <!--<p><?php bloginfo('description'); ?></p>-->
        </div>
    </section>


=======
>>>>>>> 7eb0f46a4620c685182b6663b903eeb0a8e53e84
<?php 
$oeuvre_date = get_post_custom_values('oeuvre-date')[0];
$oeuvre_technologie = get_post_custom_values('oeuvre-technologie')[0];
$oeuvre_interoperabilite = get_post_custom_values('oeuvre-interoperabilite')[0];
?>
 
<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
		?>
		<div class="item clear">
			<div class="item-header">
				<h3><?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?></h3>
<<<<<<< HEAD
			</div>			
			<?php
				if ( get_post_meta(get_the_ID()) ) :	
			?>
			<div class="custom-values">
			<span class="oeuvre-date">
				<?= $oeuvre_date?>
			</span> /
			<span class="oeuvre-auteur">
				par <?= get_post_custom_values('oeuvre-auteur')[0]?>
			</span><br />
			<span class="oeuvre-technologie">Technologie : <?= $oeuvre_technologie ?></span><br />
			<span class="oeuvre-interoperabilite">Interopérabilité : <?= $oeuvre_interoperabilite ?></span>
			</div>
			<?php endif; ?>
=======
			</div>
			<div class="custom-values">
			<span class="oeuvre-date"><?php echo $oeuvre_date ?></span> / <span class="oeuvre-auteur">par <?=get_post_custom_values('oeuvre-auteur')[0]; ?></span><br />
			<span class="oeuvre-technologie">Technologie : <?php echo $oeuvre_technologie ?></span><br />
			<span class="oeuvre-interoperabilite">Interopérabilité : <?php echo $oeuvre_interoperabilite ?></span>
			</div>
>>>>>>> 7eb0f46a4620c685182b6663b903eeb0a8e53e84
			<div class="content">
				<p><?php the_content(); ?></p>
			</div>
		</div>
		<?php
		get_template_part( 'content', get_post_format() );
		
		// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
				endwhile;
			else :
				get_template_part( 'content', 'none' );
			endif;
		?>
		</div>
</div>
 
<?php get_footer(); ?>