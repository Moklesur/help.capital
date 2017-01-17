<div class="themetim-client <?php echo $instance['heading_alignment']; ?>">
	<div class="<?php echo $instance['heading_alignment']; ?>-heading">
		<?php if ( ! empty( $instance['title'] ) ) : ?>
			<h1 class="page-header" style="color: <?php echo  $instance['heading_color'] ?>;"><?php echo esc_html( $instance['title'] ); ?></h1>
		<?php endif; ?>
	</div>
	<ul class="themetim-client-list client-list list-inline">
		<?php foreach( $instance['client'] as $i => $client ) : ?>
			<li>
				<?php if ( ! empty( $client['client_title'] ) ) : ?>
					<p>
						<?php
						$icon_styles = array();
						if(!empty($instance['icon_size'])) $icon_styles[] = 'font-size: '.intval($instance['icon_size']).'px';
						if(!empty($instance['icon_color'])) $icon_styles[] = 'color: '.$instance['icon_color'];
						echo  siteorigin_widget_get_icon( $instance['icon'], $icon_styles );
						?>
						<?php echo esc_html( $client['client_title'] ); ?>
					</p>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ul>
</div>