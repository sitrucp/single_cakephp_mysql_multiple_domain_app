<head>

	<!--examples showing how CakePHP Configure::read variables can be used in Views -->
				
	<title>
		<?php echo Configure::read('meta_title'); ?>
	</title>
	
	<?php
	echo $this->Html->meta('keywords', Configure::read('meta_keywords'));
	echo $this->Html->meta('description', Configure::read('meta_description'));
	?>
	
</head>
