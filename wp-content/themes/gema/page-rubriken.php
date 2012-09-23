<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage gema
 * @since Twenty Eleven 1.0
 */

// elastic slider
$elasticSliderEnabled = TRUE;

get_header(); ?>

<?php
	$sections = get_categories(array('hide_empty' => 0, 'parent' => 24));
	$home = home_url();
?>

		<div id="primary" class="sections-page">
		<?php // elastic slider ?>
		<div class="ei-slider-wrapper">
                <div id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/large/lehrever.jpg" alt="image01" />
                            <div class="ei-title">
                                <h2>Lehrveranstaltungen</h2>
                                <h3>der Dozenten des Instituts</h3>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/large/germanistikstudium.jpg" alt="image02" />
                            <div class="ei-title">
                                <h2>Germanistikstudium</h2>
                                <h3>in Szeged</h3>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/large/interviews-mit-gastdoz.jpg" alt="image03"/>
                            <div class="ei-title">
                                <h2>Interviews</h2>
                                <h3>mit Gastdozenten des Instituts</h3>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/large/germanisten-party.jpg" alt="image04"/>
                            <div class="ei-title">
                                <h2>Germanistenparty</h2>
                                <h3>&nbsp;</h3>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/large/medien.jpg" alt="image05"/>
                            <div class="ei-title">
                                <h2>Medien</h2>
                                <h3>Internet, Presse, Fernsehen, Rundfunk</h3>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/large/musik.jpg" alt="image06"/>
                            <div class="ei-title">
                                <h2>Musik</h2>
                                <h3>&nbsp;</h3>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/large/praktikum.jpg" alt="image07"/>
                            <div class="ei-title">
                                <h2>Unterrichtspraktikum</h2>
                                <h3>&nbsp;</h3>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/large/wohnheime.jpg" alt="image07"/>
                            <div class="ei-title">
                                <h2>Studentenwohnheime</h2>
								<h3>in Szeged</h3>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/large/interviews-mit-doz.jpg" alt="image07"/>
                            <div class="ei-title">
                                <h2>Interviews</h2>
								<h3>mit Dozenten des Instituts</h3>
                            </div>
                        </li>
                    </ul><!-- ei-slider-large -->
                    <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element">Current</li>
                        <li><a>Lehrveranstaltungen der Dozenten des Instituts</a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/thumbs/lehrever.jpg" alt="" /></li>
                        <li><a>Germanistikstudium in Szeged</a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/thumbs/germanistikstudium.jpg" alt="" /></li>
                        <li><a>Interviews mit Gastdozenten des Instituts</a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/thumbs/interviews-mit-gastdoz.jpg" alt="" /></li>
                        <li><a>Germanistenparty</a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/thumbs/germanisten-party.jpg" alt="" /></li>
                        <li><a>Medien</a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/thumbs/medien.jpg" alt="" /></li>
                        <li><a>Musik</a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/thumbs/musik.jpg" alt="" /></li>
                        <li><a>Unterrichtspraktikum</a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/thumbs/praktikum.jpg" alt="" /></li>
                        <li><a>Studentenwohnheime in Szeged</a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/thumbs/wohnheime.jpg" alt="" /></li>
                        <li><a>Slide 9</a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/thumbs/interviews-mit-doz.jpg" alt="" /></li>
                    </ul><!-- ei-slider-thumbs -->
                </div><!-- ei-slider -->
            </div><!-- wrapper -->			
			
			<?php // elastic slider ?>
		
			<div id="content" role="main" class="custom-page-content">
					<?php foreach($sections as $category): ?>
						<a href="<?php echo($home . "/rubrik/" . $category->slug); ?>">
							<div class="rubrik-container">
								<div class="rubrik-logo rubrik-logo-<?php echo($category->slug); ?>"></div>
								<div><p><?php echo($category->name);?></p></div>
							</div>
							
						</a>
					<?php endforeach; ?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>