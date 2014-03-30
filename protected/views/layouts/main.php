<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn" lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="zh-cn" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="吃饱撑着的" />
    <meta name="author" content="CShWen" />
    <link rel="shortcut icon" href="" />
    <title>CShWen <?php echo CHtml::encode($this->pageTitle); ?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="navbar-static-top.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
      <script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media
    queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/holder.js"></script>
</head>

<body>
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>
        </div>
        <div class="navbar-collapse collapse">
	  <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'每日必知', 'url'=>array('/news')),
				array('label'=>'关于', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'联系我们', 'url'=>array('/site/contact')),
				array('label'=>'文章管理', 'url'=>array('/news/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'登录', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'退出 ('.Yii::app()->user->name.') ？', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
			'htmlOptions'=>array('class'=>'nav navbar-nav'),
		)); ?>
        </div>
	  </div>
    </div><!-- header -->

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="row">
		<div class="span12">
			<div class="carousel slide" id="carousel-494718">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-494718"></li>
					<li data-slide-to="1" data-target="#carousel-494718"></li>
					<li data-slide-to="2" data-target="#carousel-494718" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item">
						<img class="img-responsive" data-src="holder.js/100%x400" alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/Koala.jpg" />
						<div class="carousel-caption">
							<h4>棒球</h4>
							<p>棒球运动是一种以棒打球为主要特点，集体性、对抗性很强的球类运动项目，在美国、日本尤为盛行。</p>
						</div>
					</div>
					<div class="item">
						<img class="img-responsive" data-src="holder.js/100%x400" alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/2.jpg" />
						<div class="carousel-caption">
							<h4>冲浪</h4>
							<p>冲浪是以海浪为动力，利用自身的高超技巧和平衡能力，搏击海浪的一项运动。运动员站立在冲浪板上，或利用腹板、跪板、充气的橡皮垫、划艇、皮艇等驾驭海浪的一项水上运动。</p>
						</div>
					</div>
					<div class="item active">
						<img class="img-responsive" data-src="holder.js/100%x400" alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/3.jpg" />
						<div class="carousel-caption">
							<h4>自行车</h4>
							<p>以自行车为工具比赛骑行速度的体育运动。1896年第一届奥林匹克运动会上被列为正式比赛项目。环法赛为最著名的世界自行车锦标赛。</p>
						</div>
					</div>
				</div> <a data-slide="prev" href="#carousel-494718" class="left carousel-control"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a data-slide="next" href="#carousel-494718" class="right carousel-control"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
	</div>	

	<div class="page-header"></div>
	
	<div class="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->
</div>
	<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
	<script src=" <?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
</body>
</html>
