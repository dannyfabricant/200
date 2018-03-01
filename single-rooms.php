<?php 
get_header();
?>
<main id='rooms'>
	<section room-id='<?php the_id() ?>'>
		<div class='room-slider'>
			<div class='room-title large single'>
				<?php 
					$title = get_the_title();
					$title = explode(' ', $title);
					foreach ($title as $word) {
						echo '<span>'.$word.'</span>';
					}
				?>
			</div>
			<?php get_template_part( 'template-parts/content', 'rooms-slider' ); ?>
		</div>
		<div class='room-info'>
			<div class='calendar info-section'>
				<div class='title medium'><span>Availability</span></div>
				<?= CFS()->get('calendar') ?>
			</div>
			<div class='details info-section'>
				<div class='title medium'>Info</div>
				<div class='row'>
					<div class='left'>Room Size: </div>
					<div class='right'><?= CFS()->get( 'size' ); ?></div>
				</div>
				<div class='row'>
					<div class='left'>Room Size: </div>
					<div class='right'><?= CFS()->get( 'capacity' ); ?></div>
				</div>
			</div>
			<div class='description info-section'>
				<div class='title medium'>Description</div>
				<div class='description-text small'><?= CFS()->get( 'description' ); ?></div>
			</div>
			<div class='equipment info-section'>
				<div class='title medium'>Equipment</div>
			<?php 
				$fields = CFS()->get( 'instruments' );
				foreach ( $fields as $field ): ?>
					<div class='row'>
						<div class='left'></div>
						<div class='right'><?= $field['equipment'] ?></div>
					</div>
				<?php
				endforeach;
			?>
			</div>
		</div>
	</section>
</main>
<?php 
get_footer();
?>