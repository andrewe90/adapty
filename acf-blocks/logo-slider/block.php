<?php
/**
 * Block: Logo Slider
 *
 * Title:       Logo slider
 * Description: A custom block.
 * Category:    etn-blocks
 * Icon:        admin-comments
 * Keywords:    author, spotlight
 * Post Types:  all
 * Multiple:    false
 * Active:      true
 * CSS Deps:    slick
 * JS Deps:     slick
 *
 * @package WordPress
 * @subpackage adapty-test
 * @since adapty-test 1.0
 */

break_grid( 'close', $block['id'] );
$content_block = new Content_Block_Gutenberg( $block );
$logo_slider   = get_field( 'logo_slider' );
$title = get_field ('title');

if( !empty($logo_slider) ) : ?>
	<section id="<?php esc_attr_e( $content_block->get_block_id() ); ?>" class="acf-block block-logo-slider">
		<?php if ( ! empty( $title )) : ?>
			<h2><?php echo wp_kses_post($title); ?></h2>
		<?php endif; ?>
		 <div class="logo-slider"> 
			<?php foreach( $logo_slider as $i => $row ) { ?>
				<?php $slide_img = $row['image']; ?>
					<div class="slide-wrapper">
						<?php if ( ! empty( $row['image'] ) ) : ?>
							<?php echo wp_get_attachment_image( $row['image'], 'full' ); ?>
						<?php endif; ?>
						<?php if ( ! empty( $row['title'] ) ) : ?>
							<h3><?php echo wp_kses_post( $row['title'] ); ?></h3>
						<?php endif; ?>
					</div>
			<?php } ?>	
		</div>
	</section>
<?php
endif;

break_grid( 'open', $block['id'] );
