<?php
/**
 * Displays the post header
 *
 * @package Ayin
 * @since 1.0.0
 */
?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<?php if ( ! is_page() ) : ?>
<div class="entry-meta">
	<?php ayin_entry_meta_footer(); ?>
</div><!-- .meta-info -->
<?php endif; ?>
