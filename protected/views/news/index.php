<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'News',
// );

// $this->menu=array(
// 	array('label'=>'Create News', 'url'=>array('create')),
// 	array('label'=>'Manage News', 'url'=>array('admin')),
// );
// ?>

<div class="row">
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'summaryText'=>'共{count}条，当前是{page}页。',
	'emptyText'=>'未找到最新知道哦',
	'pager'=>array(
			'cssFile'=>false,
			'class'=>'CLinkPager',
			'firstPageLabel'=>'首页',
			'lastPageLabel'=>'尾页',
			'nextPageLabel'=>'下一页',
			'prevPageLabel'=>'前一页',
			'header'=>'',
	),
)); ?>
</div>