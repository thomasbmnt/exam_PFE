 <section id="news">
 	<article>
	 	<h2><?php echo $title; ?></h2>
	 	<div class="datePublication"><?php print render($submitted); ?></div>
	    <?php
	      // We hide the comments and links now so that we can render them later.
	      hide($content['comments']);
	      hide($content['links']);
	      hide($content['labels']);
	      print render($content);
	    ?>
 	</article>
 </section>
