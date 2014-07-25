
<?php foreach($data as $i){ ?>

	<div id = 'class' >
		Model: <?= $i['name']; ?>
		<br />
		Cost: <?= $i['price']; ?>
		<br />
		about: <?= $i['about']; ?>
	</div>

<?php } ?>