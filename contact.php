<?php
/**
 * Template for Contact Page
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 * @package     silence
 *  Template Name: Contact
 * Header
 */

get_header();

?>

        <div class="section__area border-bottom pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center m-title">Demande de contact</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area bg-gray">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <h2 class="title">Votre message</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact__text">
							<div class="rounded-circle">
                            <?php $contact_image = get_field( 'contact_image' ); ?>
							<?php if ( $contact_image ) : ?>
								<img src="<?php echo esc_url( $contact_image['url'] ); ?>" alt="<?php echo esc_attr( $contact_image['alt'] ); ?>" />
							<?php endif; ?>
							</div>
                            <?php the_field( 'contact_text' ); ?>
                        </div>
                    </div>
                    <div class="col-lg-6 ms-auto">
                        <div class="contact__form">
							<?php if ( get_field('contact_formulaire') ) {
								$form = get_field('contact_formulaire');
								 echo $form;
							} ?>

                            <!-- <div class="row gx-4">
                                <div class="col-md-6">
                                    <h2>civilité</h2>
                                    <div class="contact__input">
                                        <label>nom</label>
                                        <input type="text">
                                    </div>
                                    <div class="contact__input">
                                        <label>prnom</label>
                                        <input type="text">
                                    </div>
                                    <div class="contact__input">
                                        <label>entreprise</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2>contact</h2>
                                    <div class="contact__input">
                                        <label>téléphone</label>
                                        <input type="text">
                                    </div>
                                    <div class="contact__input">
                                        <label>email</label>
                                        <input type="email">
                                    </div>
                                    <div class="contact__input">
                                        <label>fonction</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact__input">
                                        <label>je souhaite</label>
                                        <select name="" id="">
                                            <option value="">Google</option>
                                            <option value="">Facebook</option>
                                            <option value="">Online</option>
                                        </select>
                                    </div>
                                    <div class="contact__input">
                                        <label>message</label>
                                        <textarea cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-9">
                                    <div class="custom-check">
                                        <input type="checkbox" id="checkbox-1" checked>
                                        <label for="checkbox-1">S’inscrire à la newsletter</label>
                                    </div>
                                    <div class="custom-check">
                                        <input type="checkbox" id="checkbox-2">
                                        <label for="checkbox-2">J’accepte les politiques de confidentialite</label>
                                    </div>
                                </div>
                                <div class="col-md-3 text-end">
                                    <button class="btn btn-green link">envoyer</button>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
