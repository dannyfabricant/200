<div class='slider'>
	<div class='room-title large'>
		<a href='<?= the_permalink() ?>'>
			<!-- <?php 
				$title = get_the_title();
				$title = explode(' ', $title);
				foreach ($title as $word) {
					echo '<span>'.$word.'</span>';
				}
			?> -->
			<?= get_the_title() ?>
		</a>
	</div>
	<div class='slider-inner'>
		<?php 
			$showcontrols = false;
			if ( get_post_gallery() ) :
				$showcontrols = true;
		        $gallery = get_post_gallery( get_the_ID(), false );
		        // print_r($gallery);
		        $length = count($gallery['src']);
		        $ids = explode(',', $gallery['ids']);
		        for ($i=0; $i < $length; $i++):
		        	$orientation;
		        	$img_atts = wp_get_attachment_metadata( $ids[$i] );

		        	if ( $img_atts['width'] > $img_atts['height'] ) {
		        		$orientation = 'landscape';
		        	} else if ($img_atts['width'] == $img_atts['height']) {
		        		$orientation = 'square';
		        	} else {
		        		$orientation = 'portrait';
		        	} ?>

        			<div class='photo-wrap <?php echo $orientation; if($i == 0){echo ' show';} ?>'>		
        				<img src="<?= $gallery['src'][$i]; ?>" />
        			</div>

		           <?php
		        endfor;
		    else: ?>
		    	<?php 
		    		$media = get_attached_media( 'image');
		    		foreach ($media as $image):
			        	$img_atts = wp_get_attachment_metadata( $image->ID );
			        	if ( $img_atts['width'] > $img_atts['height'] ) {
			        		$orientation = 'landscape';
			        	} else if ($img_atts['width'] == $img_atts['height']) {
			        		$orientation = 'square';
			        	} else {
			        		$orientation = 'portrait';
			        	} ?>

	        			<div class='photo-wrap show <?= $orientation; ?>'>		
	        				<img src="<?= $image->guid; ?>" />
	        			</div>
		    			<?php 
		    		endforeach;?>
		    <?php
		   	endif;
		?>
	</div>
	<?php if ($showcontrols == true):?>
		<div class='slider-arrows'>
			<div class='left'><?php get_template_part('images/image', 'larr.svg') ?></div>
			<div class='right'><?php get_template_part('images/image', 'rarr.svg') ?></div>
		</div>
	<?php endif; ?>
	<div class='more large'>
		<?= CFS()->get( 'book_now_button' ); ?>
	</div>
</div>

