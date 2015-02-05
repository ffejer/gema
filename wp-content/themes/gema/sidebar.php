<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area main-page-sidebar" role="complementary">
            <p>Das Germanistische Magazin, gegründet im Wintersemester 2001, ist das Forum der Germanistikstudierenden an der Uni Szeged, wo jeder seine journalistischen oder schriftstellerischen Fähigkeiten zur Geltung bringen kann. Im Rahmen eines Projektseminars wird Semester für Semester altbekannten und neuen Mitgliedern der Redaktion die Möglichkeit gegeben, sich in Form von Berichterstattung über die Aktivitäten der Germanistikstudierenden in Szeged, über die Ereignisse am Institut für Germanistik sowie in Form von Reflexionen auf Zeitgeschehen, aktuelle Entwicklungen in Politik, Gesellschaft, Kultur usw., zu üben. Dabei entsteht ein journalistisches Produkt, das sowohl online als auch in der Printversion zu lesen ist.
        </p>
            <div id="andrassy-logo"></div>
            <a href="http://www.grants.at">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/AUB5_small.png" class="andrassy-advert" />
            </a>
        </div>
<?php endif; ?>