<?php
	$args = array(
			'post_type' => 'plano',
			'posts_per_page' => 2,
	);
	$query = new WP_Query($args);

	if ($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post();
	?>

	<div class="card">
		<div class="card-top">
			<span class="price"><?php echo get_field('valor-mes'); ?></span>
			<div class="card-name">
				<h3><?php the_title(); ?></h3>
				<p><?php echo get_field('subtitulo'); ?></p>
			</div>
			<ul class="plan-features">
				<li>Create to-do lists</li>
				<li>Share lists via WhatsApp</li>
				<li>Offline mode</li>
				<li>Invite colaborators</li>
				<li>Dark mode</li>
			</ul>
		</div>
		<div class="card-button">
			<a href="#">get in touch</a>
		</div>
	</div>

	<?php
			endwhile;
			wp_reset_postdata();
	else :
			echo 'Sem planos no momento';
	endif;
	?>