
<h4>Home</h4>
<hr>

<article class="postcontent">
	<?php foreach ($allpost as $value) {
	?>
	<div class="post">
		
		<h2>
			<a href="<?php echo BASE_URL; ?>/Index/postDetails/<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a>

		</h2>


		<?php 

			$text = $value['content'];

			if (strlen($text) > 200) {
				$text = substr($text, 0, 200);
				echo $text;
			}


		 ?>


		<div class="readmore">

			<a href="<?php echo BASE_URL; ?>/Index/postDetails/<?php echo $value['id']; ?>">Read More...</a>

		</div>
	</div>

	<?php } ?>
</article>





