
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
		<div class="row submit"> <?php
			echo CHtml::button('Delete', array('submit'=>array('BucketForm/add',array('id'=>$i['id'])))); ?>
        // or you can use 'params'=>array('id'=>$id)
    )
);
		</div>
			
	</div>
	<?php echo CHtml::endForm(); ?>
	<br />
<?php } ?>