<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KnowledgeCenter
 * @subpackage KnowledgeCenter
 * @since KnowledgeCenter 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
		<?php the_title( '<h1 class="title is-spaced has-text-centered">', '</h1>' ); ?>
		<?php if ( has_excerpt() ): ?>
            <div class="subtitle"><?php the_excerpt(); ?></div>
		<?php endif; ?>
    </header>

		<div class="text-end"><?php edit_post_link('Ред.'); ?></div>

    <div class="entry-content content mt-4">
		<?php the_content(); ?>
		
    </div>
    <hr/>
</article>