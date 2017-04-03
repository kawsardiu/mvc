<aside class="sidebar">
	
	<div class="widget">
		<h2>Category</h2>
		<ul>
			<?php foreach ($allcat as $value) { ?>

				<li>
					<a href="<?php echo BASE_URL; ?>/Index/postByCat/<?php echo $value['id']; ?>">
				
						<?php echo $value['title'] ?>
						
					</a>
				</li>

			<?php } ?>
		</ul>
	</div>

	<div class="widget">
		<h2>Latest Post</h2>
		<ul>
			<?php foreach ($allpost as $value) { ?>
				<li>
					<a href="<?php echo BASE_URL; ?>/Index/postDetails/<?php echo $value['id']; ?>"><?php echo $value['title'] ?>
					</a>
				</li>
				<?php } ?>
		</ul>
	</div>
</aside>