<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KnowledgeCenter
 * @subpackage KnowledgeCenter
 * @since KnowledgeCenter 1.0
 */

$footer_background = apply_filters( 'knowledgecenter_footer_background_color', '' );
?>

<footer id="colophon" class="footer<?php echo esc_attr( $footer_background ); ?>">
	
	<div class="container is-max-widescreen content">
		

	<div class="tile is-ancestor">

		<div class="tile is-parent">
			<div class="column"><?php dynamic_sidebar('footer-one'); ?></div>
		</div>

		<div class="tile is-parent">
			<div class="column"><?php dynamic_sidebar('footer-two'); ?></div>
		</div>
		
		<div class="tile is-parent">
			<div class="column"><?php dynamic_sidebar('footer-three'); ?></div>
		</div>

	</div>





		<hr>

		<div class="level">
            <div class="level-left">
				
				<div class="level-item"><p class="subtitle is-6"><?php knowledgecenter_footer_copyrite_text(); ?></p></div>
            </div>

	        <?php
	        wp_nav_menu( array(
		        'theme_location'  => 'footer-menu',
		        'depth'           => '1',
		        'container'       => '',
		        'container_class' => '',
		        'container_id'    => '',
		        'menu_class'      => '',
		        'menu_id'         => '',
		        'items_wrap'      => '<ul id="%1$s" class="level-right %2$s">%3$s</ul>',
		        'walker'          => new KnowledgeCenter_Navbar(),
		        'fallback_cb'    => '__return_empty_string',
	        ) );

	        ?>
        </div>
        
        
    </div>

</footer>


<?php wp_footer(); ?>

</body></html>
