<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="thumbnail col-md-4">
<a href="<?php echo $this->createUrl('site/view',array('id'=>$data->id));?>">
	<img alt="" style="height: 333px;"
		src=<?php echo Yii::app()->request->baseUrl; ?><?php echo CHtml::encode($data->img_path); ?> class="img-rounded" />
	<?php echo CHtml::encode($data->title); ?>
</a>
</div>

