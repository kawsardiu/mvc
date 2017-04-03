<div class="searchoption">
	
	<div class="menu">
		
		<a href="<?php echo BASE_URL; ?>">Home</a>
	</div>

	<div class="search">
		
		<form action="" method="POST">
			<input type="text" name="keyword" placeholder="Search Here....">

			<select class="catsearch">
				<option>Select One</option>

				<?php foreach ($allcat as $key => $cat) { ?>

					<option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>

				<?php } ?>
			</select>
			<button type="submit" class="submitbtn">Search</button>
		</form>
	</div>
</div>