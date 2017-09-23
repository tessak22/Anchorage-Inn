	<?php if( have_rows('breakfast_entree_menu') ): ?>

		<div class="menu">

		<h2>Entrees</h2>

		<?php while( have_rows('breakfast_entree_menu') ): the_row(); 

			// vars
			$name = get_sub_field('item_name');
			$description = get_sub_field('item_description');
			$price = get_sub_field('item_price');

			?>

			<div class="menu-item">

				<h5><?php echo $name; ?></h5>
				<h6><?php echo $price; ?></h6>
				<?php if( $description ): ?>
			    	<p><?php echo $description; ?></p>
			    <?php endif; ?>

			</div>

		<?php endwhile; ?>

		</div>

	<?php endif; ?>

	<hr>

	<?php if( have_rows('breakfast_sideorder_menu') ): ?>

		<div class="menu">

		<h2>Side Orders</h2>

		<?php while( have_rows('breakfast_sideorder_menu') ): the_row(); 

			// vars
			$name = get_sub_field('item_name');
			$description = get_sub_field('item_description');
			$price = get_sub_field('item_price');

			?>

			<div class="menu-item">

				<h5><?php echo $name; ?></h5>
				<h6><?php echo $price; ?></h6>
				<?php if( $description ): ?>
			    	<p><?php echo $description; ?></p>
			    <?php endif; ?>

			</div>

		<?php endwhile; ?>

		</div>

	<?php endif; ?>

	<hr>

	<?php if( have_rows('breakfast_beverage_menu') ): ?>

		<div class="menu">

		<h2>Beverages</h2>

		<?php while( have_rows('breakfast_beverage_menu') ): the_row(); 

			// vars
			$name = get_sub_field('item_name');
			$description = get_sub_field('item_description');
			$price = get_sub_field('item_price');

			?>

			<div class="menu-item">

				<h5><?php echo $name; ?></h5>
				<h6><?php echo $price; ?></h6>
				<?php if( $description ): ?>
			    	<p><?php echo $description; ?></p>
			    <?php endif; ?>

			</div>

		<?php endwhile; ?>

		</div>

	<?php endif; ?>