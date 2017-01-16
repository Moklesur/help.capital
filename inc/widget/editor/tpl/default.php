<div class="themetim-editor <?php echo $instance['heading_alignment']; ?>">
	<div class="<?php echo $instance['heading_alignment']; ?>-heading">
		<?php if ( ! empty( $instance['title'] ) ) : ?>
			<h1 class="page-header" style="color: <?php echo  $instance['icon_color'] ?>;"><?php echo esc_html( $instance['title'] ); ?></h1>
		<?php endif; ?>
	</div>
	<?php if ( ! empty( $instance['texteditor'] ) ) : ?>
		<div class="editor-details"><?php echo  $instance['texteditor']; ?></div>
	<?php endif; ?>
	<?php if ( ! empty( $instance['button_text'] ) ) : ?>
		<div class="default-button margin-top-30"><a href="<?php echo  sow_esc_url($instance['button_url']); ?>" class="btn <?php echo  $instance['button_style']; ?>"><?php echo  $instance['button_text']; ?></a></div>
	<?php endif; ?>
</div>