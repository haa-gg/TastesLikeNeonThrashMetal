<?php
/*
Template Name: Front
*/
get_header(); ?>





<?php // do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="row" role="main">
	<div class="fp-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php //comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<div class="row destination align-middle small-up-1 medium-up-1 large-up-3">

<div class="column webdev">

<div class="spec-wrap">

<h3>Web Development</h3>

<a href="web-development">

	<?php 
$args = array(
    'posts_per_page' => 1,
    'category_name' =>  'featured+web-development' 
);

$my_query = new WP_Query( $args );
while( $my_query->have_posts() ):
    $my_query->the_post();
    //the_title();
//the_post_thumbnail();
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
echo '<div class="feature" style="background: url('. $url.')"></div>';
endwhile;

wp_reset_postdata();
	?>

	</a>

</div>

</div>

<div class="column webdesign">

<div class="spec-wrap">

<h3>Web Design</h3>

<a href="web-design">

<?php 
$args = array(
    'posts_per_page' => 1,
    'category_name' =>  'featured+web-design' 
);

$my_query = new WP_Query( $args );
while( $my_query->have_posts() ):
    $my_query->the_post();
    //the_title();
//the_post_thumbnail();
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
echo '<div class="feature" style="background: url('. $url.')"></div>';
endwhile;

wp_reset_postdata();
	?>

	</a>

</div>

</div>


<div class="column graphicdesign">

<div class="spec-wrap">

<h3>Graphic Design</h3>

<a href="graphic-design">
	
<?php 
$args = array(
    'posts_per_page' => 1,
   'category_name' =>  'featured+graphic-design' 
);

$my_query = new WP_Query( $args );
while( $my_query->have_posts() ):
    $my_query->the_post();
    //the_title();
//the_post_thumbnail();
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
echo '<div class="feature" style="background: url('. $url.')"></div>';
endwhile;

wp_reset_postdata();
	?>
</a>

</div>

</div>

</div>



<?php get_footer();
