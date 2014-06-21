<head>

	<title>
		<?php echo Configure::read('meta_title'); ?>
	</title>
	
	
	<?php
	
	// example of how CakePHP Configure::Read varialbles can be used in Views
	
	echo $this->Html->meta('keywords', Configure::read('meta_keywords'));
	echo $this->Html->meta('description', Configure::read('meta_description'));
	?>
	
</head>
