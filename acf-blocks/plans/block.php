<?php
/**
 * Block: Plans
 *
 * Title:       Plans
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

$title 		= get_field( 'plans_title' );
$subtitle   = get_field( 'plans_subtitle' );
$cta     	= get_field( 'plans_cta' );
$cta_a     	= get_field( 'cta_a' );
$cta_b     	= get_field( 'cta_b' ); 
$cta_lower  = get_field( 'cta_inner' );
$features_b   = get_field( 'plan_b_features' );
$features_a   = get_field( 'plan_a_features' );
$advantages   = get_field( 'advantages' );

?>
<section class="plans-section">
	<div class="container">
		<div class="row ">
			<div class="col">
				<h2>
					<?php echo $title; ?>
				</h2>
				<p class="lead-text">
					<?php echo $subtitle; ?>
				</p>
				<?php if( $cta ): 
						$cta_url = $cta['url'];
						$cta_title = $cta['title'];
						$cta_target = $cta['target'] ? $cta['target'] : '_self';
				?>
						<a class="button secondary-button" href="<?php echo esc_url( $cta_url ); ?>" target="<?php echo esc_attr( $cta_target ); ?>"><?php echo esc_html( $cta_title ); ?></a>
				<?php endif; ?>
			</div>	
		</div>

		<div class="row plans-cards-wrapper">
			<div class="plan-b card">
				<div class="image-wrapper">
					<?php 
						$image = get_field('img_b');
						$size = 'full'; 
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
				</div>
					<p><?php echo get_field('title_b')?> </p>
					<?php foreach( $features_b as $i => $feature ) { ?>
							<div class="item">
								<?php if ( ! empty( $feature['timeframe'] ) ) : ?>
									<h3><?php echo wp_kses_post( $feature['timeframe'] ); ?></h3>
								<?php endif; ?>

								<?php if ( ! empty( $feature['cost_per_week'] ) ) : ?>
									<p><?php echo wp_kses_post( $feature['cost_per_week'] ); ?></p>
								<?php endif; ?>

								<?php if ( ! empty( $feature['cost_per_timeframe'] ) ) : ?>
									<p><?php echo wp_kses_post( $feature['cost_per_timeframe'] ); ?></p>
								<?php endif; ?>
							</div>
					<?php } ?>	
					<?php if( $cta_b ): 
						$cta_url = $cta_b['url'];
						$cta_title = $cta_b['title'];
						$cta_target = $cta_b['target'] ? $cta['target'] : '_self';
					?>
							<a class="button" href="<?php echo esc_url( $cta_url ); ?>" target="<?php echo esc_attr( $cta_target ); ?>"><?php echo esc_html( $cta_title ); ?></a>
					<?php endif; ?>
			</div>
			<div class="plan-a card">
				<div class="image-wrapper">
					<?php 
						$image = get_field('img_a');
						$size = 'full'; 
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
				</div>
				<p><?php echo get_field('title_a')?></p>
				<?php foreach( $features_a as $i => $feature ) { ?>
					<div class="item">
						<div class="col col-50">
							<?php if ( ! empty( $feature['timeframe'] ) ) : ?>
								<h3><?php echo wp_kses_post( $feature['timeframe'] ); ?></h3>
							<?php endif; ?>
							<?php if ( ! empty( $feature['cost_per_week'] ) ) : ?>
								<p><?php echo wp_kses_post( $feature['cost_per_week'] ); ?></p>
							<?php endif; ?>
						</div>
						<div class="col col-50">
							<?php if ( ! empty( $feature['cost_per_timeframe'] ) ) : ?>
								<p><?php echo wp_kses_post( $feature['cost_per_timeframe'] ); ?></p>
							<?php endif; ?>
						</div>
					</div>
				<?php } ?>
				<?php if( $cta_a ): 
						$cta_url = $cta_a['url'];
						$cta_title = $cta_a['title'];
						$cta_target = $cta_a['target'] ? $cta['target'] : '_self';
					?>
							<a class="button" href="<?php echo esc_url( $cta_url ); ?>" target="<?php echo esc_attr( $cta_target ); ?>"><?php echo esc_html( $cta_title ); ?></a>
				<?php endif; ?>
			</div>
			<div class="dashboard">
					<?php 
						$image = get_field('dashboard_image');
						$size = 'full'; 
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
			</div>
		</div>
		<div class="row card-wrapper">
			<?php foreach( $advantages as $i => $advantage ) { ?>
					<div class="col col-33">
						<?php if ( ! empty( $advantage['icon'] ) ) : ?>
							<?php echo wp_get_attachment_image( $advantage['icon'], 'full' ); ?>
						<?php endif; ?>
						<?php if ( ! empty( $advantage['content'] ) ) : ?>
							<p><?php echo wp_kses_post( $advantage['content'] ); ?></p>
						<?php endif; ?>
					</div>
			<?php } ?>	
		</div>
		<?php if( $cta_lower ): 
						$cta_url = $cta_lower['url'];
						$cta_title = $cta_lower['title'];
						$cta_target = $cta_lower['target'] ? $cta['target'] : '_self';
					?>
			<a class="button primary-button" href="<?php echo esc_url( $cta_url ); ?>" target="<?php echo esc_attr( $cta_target ); ?>"><?php echo esc_html( $cta_title ); ?></a>
		<?php endif; ?>
	</div>
</section>

<?php

break_grid( 'open', $block['id'] );
