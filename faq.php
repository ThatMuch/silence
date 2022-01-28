<?php
/**
 * Template for FAQ Page
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 * @package     silence
 *  Template Name: FAQ
 * Header
 */

get_header();

$args = array(
	    'post_type' => 'faq',
		'taxonomy' => 'categories',
		'orderby' => 'name',
		'order'   => 'DESC'
    );

   $cats = get_categories($args);

$args_faq = array(
	'post_type'      => 'faq',
	'category_name'  => 'particuliers',
	'offset'         => '0',
	'posts_per_page' => '10',
	'order'          => 'ASC',
);
$query_faq = new WP_Query( $args_faq);
?>

        <div class="section__area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="m-title text-center">Vous avez des questions ?</h2>
                        <div class="btn-box d-flex justify-content-between my-5">
							<?php  foreach($cats as $cat_faq) : ?>

                            <a href="#<?php echo esc_html($cat_faq->term_id); ?>" class="btn btn-border orange link"><?php echo esc_html($cat_faq->name); ?></a>
							<?php endforeach; ?>
                        </div>
						<?php  foreach($cats as $cat_faq) : ?>
							<div class="mb-5">
								<h2 id="<?php echo esc_html($cat_faq->term_id); ?>" class="m-title mb-5 text-center text-lg-start ms-0"><?php echo esc_html($cat_faq->name); ?></h2>
								<div class="accordion faq" id="faq">
									<?php
										$args = array(
											'post_type' => 'faq',
											'tax_query' => array(
													array(
														'taxonomy' => 'categories',
														'field'    => 'name',
														'terms'    => $cat_faq->name,
													),
												),
											'offset' => '0',
											'posts_per_page' => '9999'
										);
										$query = new WP_Query( $args );
										if ( $query->have_posts() ) :
											while ( $query->have_posts() ) :
											$query->the_post();
									?>
									<div class="accordion-item">
										<h2 class="accordion-header" data-bs-toggle="collapse" data-bs-target="#item-<?php echo esc_attr( $post->ID ); ?>"><?php the_title(); ?></h2>
										<div id="item-<?php echo esc_attr( $post->ID ); ?>" class="accordion-collapse collapse " data-bs-parent="#faq">
											<div class="card">
												<?php the_content(); ?>
											</div>
										</div>
									</div>
									<?php endwhile; wp_reset_postdata();?>
									<?php endif; ?>
								</div>
							</div>
						<?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
