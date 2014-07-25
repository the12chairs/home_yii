
<?php foreach($data as $i){ ?>


	<div class = 'row' >
	<?php echo CHtml::beginForm(); ?>

		<?= CHtml::activeLabel($model, "Name: " . $i['name']); ?>
		<br />
		<?= CHtml::activeLabel($model, "Cost: " . $i['price']); ?>
		<br />
		<?= CHtml::activeLabel($model, "About: " . $i['about']); ?>
		<br />
		<?= CHtml::activeLabel($model, "id: " . $i['id']); ?>

	</div>
	<?php echo CHtml::endForm(); ?>
	<br />
<?php } ?>