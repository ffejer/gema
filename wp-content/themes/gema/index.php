<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

			<?php 
				// elastic slider
				$elasticEnabled = TRUE;
			?>
			<div class="wrapper">
                <div id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/large/lehrever.jpg" alt="image01" />
                            <div class="ei-title">
                                <h2>Lehrveranstaltungen</h2>
                                <h3>der Dozenten des Instituts</h3>
                            </div>
                            <!-- div class="ei-gema-promo">
                            	<p>Péter Bassola (ehem. Lehrstuhlleiter) (2004)</p>
								<p>Árpád Bernáth (ehem. Institutsleiter) (2003)</p>
								<p>Csilla Bernáth (2004)</p>
								<p>Károly Csúri (Lehrstuhlleiter) (2005)</p>
								<p>Miklós Fenyves (2006)</p>
								<p>Erzsébet Forgács (2005)</p>
								<p>Endre Hárs (2004)</p>
								<p>Géza Horváth (Institutsleiter) (2005)</p>
								<p>Márta Horváth (2004)</p>
								<p>Tamás Kispál (2008)</p>
								<p>Katalin Petneki (2004)</p>
								<p>Marion Rutzendorfer (2008)</p>
								<p>György Scheibl (2005)</p>
								<p>Erzsébet Szabó (2006)</p>
								<p>Ellen Tichy (2005)</p>
								<p>Marco Winkler (2005)</p>
                            </div-->
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
		<div id="primary">
			<div id="content" role="main">
			
			
			<?php if ( have_posts() ) : ?>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'excerpt' ); ?>
				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>