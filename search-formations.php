<?php
        /* Template Name: Formations */
        get_header();
        $tag = $_GET['tag_id'];
        $cat = $_GET['cat'];
        $category__in = $_GET['category__in'];
        $query = new WP_Query( array(
            'tag_id' => $tag,
            'posts_per_page' => -1,
            'post_type' => 'formations',
            'cat' => $cat,
            'category__in' => $category__in

            )
        );
        ?>
        <div class="container">
            <div class="contentarea">
            <div class="search__header">
                <div class="row">
                  <div class="col-sm-4">
                    <h2 class="search__header__slogan text-left">Recherche avancée</h2>
                  </div>
                  <div class="col-sm-8 divider">
                    <div class="block-round"></div>
                  </div>
              </div>
              </div>
              <p class="text-center mb-5">Résultats de la recherche</p>
                <div id="content" class="row">
                         <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="col-sm-4 d-flex justify-content-center">
                        <div class="card-training card" id="post-<?php the_ID(); ?>">
                                       <div class="card__inner">
                                           <div class="card__front">
                                               <div class="img__inner"><img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title()?>" /></div>
                                               <span class="card-training__category"><?php echo $cat->name ?></span>
                                               <div class="content-center-verticale">
                                                   <h3 class="card__title"><?php the_title();?></h3>
                                               </div>
                                               <div class="card-training__details">
                                               <?php if ( have_rows( 'details' ) ) : ?>
                                                   <ul>
                                                   <?php while ( have_rows( 'details' ) ) : the_row(); ?>
                                                   <li>
                                                       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ordi.svg" />
                                                       <span><?php the_sub_field( 'time_present' ); ?></span>
                                                   </li>
                                                   <li>
                                                       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clock.svg" />
                                                       <span><?php the_sub_field( 'time_remot' ); ?></span>
                                                   </li>
                                                   <li>
                                                       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin.svg" />
                                                       <span><?php the_sub_field( 'location' ); ?></span>
                                                   </li>
                                                   <li>
                                                       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user.svg" />
                                                       <span><?php the_sub_field( 'people' ); ?> Pers</span>
                                                   </li>
                                                   <?php endwhile; ?>
                                                   </u>
                                               <?php endif; ?>
                                               </div>
                                           </div>
                                           <div class="card__back ">
                                               <h3 class="card__back__title"><?php the_title();?></h3>
                                               <?php if ( get_field('desc') ) : ?>
                                                   <p class="card__back__text"><?php echo get_field('desc'); ?></p>
                                               <?php endif; ?>
                                               <a class="btn btn-primary mt-auto">Nous contacter<i class="icon arrow-right"></i></a>
                                               <a class="btn btn-outline-primary btn-icon">Télécharger la brochure<i class="icon download"></i></a>
                                           </div>
                                       </div>

                    </div>


                                    </div>
            <?php endwhile; ?>
        <?php endif; ?>
               </div><!-- content -->
            </div><!-- contentarea -->
            <div class="d-flex justify-content-center mt-3 mb-5">
                <a target="_blank" href="<?php echo site_url()?>/<?php echo $cat?>" class="btn btn-outline-primary ">Découvrez d'autres formations ou coaching <i class="icon arrow-right"></i></a>
            </div>
        </div>

        <?php get_footer(); ?>