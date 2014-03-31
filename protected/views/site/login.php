<div class="center-block" style="max-width: 543px;">
<h1>管理中心</h1>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',$htmlOptions=array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',$htmlOptions=array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">温馨提示: 暂不支持对外注册。</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('登录',$htmlOptions=array('class'=>'btn btn-lg btn-primary btn-block')); ?>
	</div>
<?php $this->endWidget(); ?>
</div>