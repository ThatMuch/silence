<?php
/**
 * Template for Concept Page
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 * @package     silence
 *  Template Name: Concept
 * Header
 */

get_header();

$args  = array(
	'post_type'      => 'formations',
	'category_name'  => 'particuliers',
	'offset'         => '0',
	'posts_per_page' => '10',
	'order'          => 'ASC',
);
$query = new WP_Query( $args );

?>

<div class="section__area border-bottom-yellow">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="m-title text-center mb-75"><?php the_field( 'subtitle' ); ?></h2>
			</div>
		</div>
		<?php
		if ( $query->have_posts() ) :
			$i = 0;
			while ( $query->have_posts() ) :
					$query->the_post();
				?>
			<div class="alternate-row">
				<div class="row align-items-center <?php echo $i > 0 ? 'mt-75' : ''; ?>">
					<div class="col-lg-6">
						<div class="promotion__text">
							<h2 class="title-3" style="color: <?php the_field( 'color' ); ?>"><?php the_title(); ?></h2>
							<?php the_field( 'desc' ); ?>
							<div class="btn-list g-3 mt-4">
								<a href="#" class="btn btn-green link">je m’inscris</a>
								<a href="#" class="btn btn-green link">rdv découverte gratuit</a>
								<a href="<?php the_permalink(); ?>" class="btn btn-border orange link">la formation</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<img class="round-image" src="<?php echo esc_url( $image[0] ); ?>" alt="<?php the_title(); ?>">
					</div>
				</div>
			</div>
		<?php $i++; endwhile;  endif; wp_reset_postdata();?>
	</div>
</div>
<?php if ( have_rows( 'contact_link' ) ) : ?>
	<?php while ( have_rows('contact_link') ) : the_row(); ?>
        <div class="section__area bg-yellow">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 order-lg-1 text-center">
                        <?php $image = get_sub_field( 'image' ); ?>
						<?php if ( $image ) : ?>
							<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
						<?php endif; ?>
                    </div>
                    <div class="col-lg-6 order-lg-0">
						<?php if ( get_sub_field('title') ) : ?>
							<h2 class="m-title mb-4"><?php echo esc_html_e(get_sub_field('title')); ?></h2>
						<?php endif; ?>

                        <div class="box__text">
                            <?php the_sub_field( 'text' ); ?>
                            <div class="btn-list justify-content-center mt-5">
								<?php $button_1 = get_sub_field( 'button_1' ); ?>
								<?php if ( $button_1 ) : ?>
									<a class="btn btn-green link" href="<?php echo esc_url( $button_1['url'] ); ?>" target="<?php echo esc_attr( $button_1['target'] ); ?>"><?php echo esc_html( $button_1['title'] ); ?></a>
								<?php endif; ?>
								<?php $button_2 = get_sub_field( 'button_2' ); ?>
								<?php if ( $button_2 ) : ?>
									<a class="btn btn-border orange bg-white link" href="<?php echo esc_url( $button_2['url'] ); ?>" target="<?php echo esc_attr( $button_2['target'] ); ?>"><?php echo esc_html( $button_2['title'] ); ?></a>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
