	<?php if( have_rows('pizza_menu') ): ?>

		<div class="menu">

		<h2>Specialty Pizzas</h2>
		<h4>All available in traditional or thin crust</h4>

		<?php while( have_rows('pizza_menu') ): the_row(); 

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

	<h2>Build Your Own</h2>

	<p>Step 1: Size (includes cheese)</p>
	<ul class="pizza-price">
		<li>12" $10.00</li>
		<li>16" $12.50</li>
	</ul>

	<p>Step 2: Crust Type</p>
		<ul class="pizza-price">
		<li>Traditional</li>
		<li>Thin</li>
	</ul>

	<p>Step 3: Sauces</p>
	<ul class="pizza-price">
		<li>Traditional (Red)</li>
		<li>BBQ</li>
		<li>Alfredo</li>
		<li>Olive Oil with Garlic</li>
	</ul>

	<p>Step 4: Additional Toppings</p>
	<ul class="pizza-price">
		<li>12" $2.00 per topping</li>
		<li>16" $2.25 per topping</li>
	</ul>
	<ul class="pizza-toppings">
		<li>Sausage</li>
		<li>Pepperoni</li>
		<li>Hamburger</li>
		<li>Chicken</li>
		<li>Canadian Bacon</li>
		<li>Bacon</li>
		<li>Brats</li>
		<li>Extra Cheese</li>
		<li>Mushrooms</li>
		<li>Onions</li>
		<li>Red Onions</li>
		<li>Green Peppers</li>
		<li>Tomatoes</li>
		<li>Pineapple</li>
		<li>Jalepeno Peppers</li>
		<li>Black Olives</li>
		<li>Green Olives</li>
		<li>Sauerkrat</li>
		<li>Pickles</li>
	</ul>

