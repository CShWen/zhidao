
<?php
$cpath = Yii::app ()->baseUrl . $model->img_path;
echo CHtml::image ( $cpath, $model->title, array (
		'class' => 'img-responsive center-block',
) );
?>

<div class="page-header"><h1><?php echo $model['title']; ?></h1>
<H2><small class="pull-right">--<?php echo $model['author']; ?> &nbsp; <?php echo $model['create_time']; ?></small></H2>
</div>

<p><?php echo $model['content']; ?></p>
<?php

$this->widget ( 'zii.widgets.CDetailView', array (
		'data' => $model,
		'attributes' => array (
				'id',
				'title',
				'content',
				'author',
				'create_time',
				'img_name',
				'img_path',
				'page_view' 
		) 
) );
?>

