<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
      <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
<?php
/*
$viewname = 'r_unions' ;
print views_embed_view ( $viewname );
*/
?>
        

    </div></div> <!-- /.section, /#content -->
    
	<header>
		<h1>
			<a href="index.php">
				<img src="<?php echo $logo; ?>" width="294" height="93" alt="Logo du club ouftimac" title="Aller à la page d'accueil">
				<span id="titleDesc"><?php echo $site_slogan; ?></span>
			</a>
		</h1>
	</header>
	


	<div id="slider">
		<nav>
			<?php print render($page['menu']); ?>
		</nav>	
		
		<div id="sliderPresentation">
			<div class="conteneur">
				<?php print render($page['bigNews']); ?>
				<!--
<img src="http://ns354624.ovh.net/~retho/slider2.jpg" />
				<h2>Nouvel iPhone 5</h2>
				<p>
					Et l'iPhone réinventa l'iPhone !
				</p>
-->
			</div>
		</div>
		<!-- <img src="images/slider2.jpg" alt="image de la dernière actu"> -->
	</div>
	
	<section id="prochaineReunion">
		<article>
			<span id="nextMeetingTitle">Prochaine réunion</span><div id="nextMeetingDesc"><?php print render($page['nextMeeting']); ?></div>
		</article>
	</section>
	
	<section class="conteneur" id="contenu">
		<section id="reunions">
			<?php print render($page['reunionsMois']); ?>
		</section>
	</section>
	
	<footer>
		<div class="conteneur">
			<section class="lastNewsFooter">
				<h3>Dernières nouveautés</h3>
				<ul>
					<li><a href="#">iOS 6.1 : retour aux possibilités (…)</a></li>
					<li><a href="#">Bienvenue sur notre nouveau site !</a></li>
				</ul>
			</section>
			<section class="lastNewsFooter">
				<h3>Partenaires</h3>
				<ul>
					<li><a href="#">Apple User Group</a></li>
					<li><a href="#">MediaMarkt</a></li>
				</ul>
			</section>
			<section class="copyright">
				<h3>© 2013 Ouftimac.be</h3>
			</section>
		</div>
		<div class="clear"></div>
	</footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
