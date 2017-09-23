	<?php if( have_rows('lunch_appetizers_menu') ): ?>

		<div class="menu">

		<h2>Appetizers</h2>

		<?php while( have_rows('lunch_appetizers_menu') ): the_row(); 

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

	<hr>

	<?php endif; ?>


	<?php if( have_rows('lunch_sides_menu') ): ?>

		<div class="menu">

		<h2>Soups, Salads & Sides</h2>

		<?php while( have_rows('lunch_sides_menu') ): the_row(); 

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

	<hr>

	<?php endif; ?>



	<?php if( have_rows('lunch_baskets_menu') ): ?>

		<div class="menu">

		<h2>Baskets</h2>

		<?php while( have_rows('lunch_baskets_menu') ): the_row(); 

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

	<hr>

	<?php endif; ?>



	<?php if( have_rows('lunch_burgers_menu') ): ?>

		<div class="menu">

		<h2>Burgers</h2>

		<?php while( have_rows('lunch_burgers_menu') ): the_row(); 

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

	<hr>

	<?php endif; ?>



	<?php if( have_rows('lunch_sandwich_menu') ): ?>

		<div class="menu">

		<h2>Sandwiches</h2>

		<?php while( have_rows('lunch_sandwich_menu') ): the_row(); 

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

	<p>All burgers and sandwiches are served with a choice of fries, coleslaw, natural chips, or potato salad. Substitute beer fries or waffle fries for $.50, cup of soup or onion rings for $1.00, or a dinner salad for $1.75.</p>
	<hr>
	<?php endif; ?>



	<?php if( have_rows('lunch_beverage_menu') ): ?>

		<div class="menu">

		<h2>Beverages</h2>

		<?php while( have_rows('lunch_beverage_menu') ): the_row(); 

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