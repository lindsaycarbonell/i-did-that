<section id="services" class="band scanlines accent-bar topic-services-band">
		<div class="wrapper group">
			
		<?php if( have_rows('services_list') ): ?>

				<header>
					<h1 class="services-title default-title"><?php the_title(); ?> Services</h1>

					<?php 
						$i = 0;
						while ( have_rows('services_list') ) : the_row(); ?>
							
						<h1 data-link="<?php echo $i; ?>" class="services-title hide-title"><?php the_sub_field('service_list_title'); ?></h1>

						<?php $i++; ?>

					<?php endwhile; ?>

				</header>

				<select name="" id="" class="services topic-dropdown">
					<?php 
					$i = 0;
					while ( have_rows('services_list') ) : the_row(); ?>
						
					<option data-link="<?php echo $i; ?>"><?php the_sub_field('service_list_title'); ?></option>

					<?php $i++; ?>

					<?php endwhile; ?>
				</select>

				<div class="services-content">
					<div class="services-summary default-title">
						<?php the_field('services_summary'); ?>
					</div>

					<?php 
						$i = 0;
						while ( have_rows('services_list') ) : the_row(); ?>
							
						<div class="services-summary hide-title" data-link="<?php echo $i; ?>">
							<?php the_sub_field('service_list_summary'); ?>
						</div>

						<?php $i++; ?>

					<?php endwhile; ?>

					<ul class="services topic-list">
						
						<?php 
						$i = 0;

						while ( have_rows('services_list') ) : the_row(); ?>
						
							<li class="<?php echo $i == 0 ? 'selected' : ''; ?>" data-link="<?php echo $i; ?>"><?php the_sub_field('service_list_title'); ?></li>
							
						<?php $i++;
						 endwhile; ?>
					</ul>

					
				<?php endif; ?>
				
			</div>
			<?php 
					$i = 0;
					while ( have_rows('services_list') ) : the_row();
					$link = get_sub_field('service_cta_link');
					if ( $link ): 
					?>
					<div class="cta">
						<a class="services-cta button hide-title" data-link="<?php echo $i; ?>" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
					</div>
					<?php $i++; ?>

					<?php endif;
					endwhile; ?>
				
		</div>
	

	</section>	
