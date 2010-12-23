<?php get_header(); ?>
<div class="grid_11">
	<div id="content">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Résultats pour "<?php the_search_query(); ?>"</h2>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?>>
				<span class="postmetadata"><?php the_category(' / ') ?> &mdash; <?php edit_post_link('Modifier', '', ' &mdash; '); ?>  <?php comments_popup_link('Aucun commentaire', 'Un commentaire', '% commentaires'); ?></span><br/>
			    <small><span class="date"><?php the_time('j') ?></span><br /><?php the_time('M y') ?> <!-- by <?php the_author() ?> --></small>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers l'article : <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				

			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&larr; Commentaires précédents') ?></div>
			<div class="alignright"><?php previous_posts_link('Commentaires plus récents &rarr;') ?></div>
			<div class="clearfix"></div>
		</div>

	<?php else : ?>
      <div class="post">
		<h2>Aucun résultat pour "<?php the_search_query(); ?>"</h2>
		<?php //get_search_form(); ?>
	  </div>

	<?php endif; ?>

	</div>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>