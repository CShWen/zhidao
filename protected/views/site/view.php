<div class="container" style="max-width: 730px;"><?php
$cpath = Yii::app ()->baseUrl . $model->img_path;
echo CHtml::image ( $cpath, $model->title, array (
		'class' => 'img-responsive center-block' 
) );
?>

<div class="page-header">
		<h2><?php echo $model['title']; ?></h2>
		<H3>
			<small class="pull-right">--<?php echo $model['author']; ?> &nbsp;&nbsp;<?php echo date("Y-m-d",strtotime($model['create_time'])); ?></small>
		</H3>

	</div>

	<div class="well well-lg"><?php echo $model['content']; ?></div>
</div>