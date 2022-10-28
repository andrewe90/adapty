<?php
/**
 * Hero Section Block
 *
 * Title:       Hero section
 * Description: A custom block.
 * Category:    etn-blocks
 * Icon:        admin-comments
 * Keywords:    author, spotlight
 * Post Types:  all
 * Multiple:    true
 * Active:      true
 * CSS Deps:
 * JS Deps:
 *
 * @package WordPress
 * @subpackage adapty-test
 * @since adapty-test 1.0
 */

break_grid( 'close', $block['id'] );
$content_block = new Content_Block_Gutenberg( $block );
$title 		= get_field( 'hero_title' );
$subtitle   = get_field( 'hero_subtitle' );
$cta     	= get_field( 'hero_cta' );

?>
<section class="hero-section-block">
	<div class="container">
		<div class="row">
			<h1>
				<?php echo $title; ?>
			</h1>
			<p class="lead-text">
				<?php echo $subtitle; ?>
			</p>
			<?php if( $cta ): 
					$cta_url = $cta['url'];
					$cta_title = $cta['title'];
					$cta_target = $cta['target'] ? $cta['target'] : '_self';
			?>
				<a class="button primary-button" href="<?php echo esc_url( $cta_url ); ?>" target="<?php echo esc_attr( $cta_target ); ?>">
					<?php echo esc_html( $cta_title ); ?>
				</a>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php

break_grid( 'open', $block['id'] );
