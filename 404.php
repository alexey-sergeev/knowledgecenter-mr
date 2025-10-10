<?php
/**
 * The template for displaying 404 page
 *
 * @package Latest
 */

get_header();
?>

<div>&nbsp;</div>

<article>
	<div class="container">
		<div class="row justify-content-center mb-4">
			<div class="col-lg-2 col-md-3 col-4 text-align-center mt-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ghost.png">
			</div>
			<div class="text-center mb-6 mt-4">
				<p class="display-6">Ошибка 404</p>
				<p class="mt-4 fw-bolder">Ой, что-то сломалось.<br/> 
				Попробуйте <a href="#" onclick="window.history.back(); return false;">вернуться</a> 
				или перейти <a href="<?php echo esc_url( home_url( '/' ) ); ?>">на главную страницу</a>...</p>
			</div>
		</div>
	</div>
</article>

<div>&nbsp;</div>

<?php get_footer(); ?>
