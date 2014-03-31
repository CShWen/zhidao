
<div class="row">
	<div class="span12">
		<div class="carousel slide" id="myCarousel">
			<ol class="carousel-indicators">
				<li data-slide-to="0" data-target="#myCarousel class="active"></li>
				<li data-slide-to="1" data-target="#myCarousel"></li>
				<li data-slide-to="2" data-target="#myCarousel"></li>
			</ol>
			<div class="carousel-inner">
					<?php for($i=0;$i<3;$i++) { ?>
						<?php if($i==0) echo '<div class="item active">';
								else echo '<div class="item">'; ?>
							<img class="center-block img-responsive" alt=""
					src="<?php echo Yii::app()->request->baseUrl; ?><?php echo $lunbo[$i]->img_path;?>" />
				<div class="carousel-caption">
					<h4><?php echo $lunbo[$i]->title;?></h4>
				</div>
			</div>
					<?php } ?>
			</div>
		<a data-slide="prev" href="#myCarousel" class="left carousel-control">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a data-slide="next" href="#myCarousel" class="right carousel-control">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>
</div>

<table class="center-block table table-hover" style="max-width: 630px;">
<th class="bs-callout-info"><H3>震惊中外排名榜</H3></th>
<?php for($i=0;$i<10;$i++) {  if($i%2==0) { ?>
<tr class="active">
		<TD><?php echo $i+1;?></TD>
		<TD>
			<a href="<?php echo $this->createUrl('site/view',array('id'=>$lunbo[$i]->id));?>"><?php echo $lunbo[$i]->title; ?></a>
		</TD>
	</tr>
<?php } else { ?>
<tr class="warning">
		<TD><?php echo $i+1;?></TD>
		<TD>
			<a href="<?php echo $this->createUrl('site/view',array('id'=>$lunbo[$i]->id));?>"><?php echo $lunbo[$i]->title; ?></a>
		</TD>
	</tr>

<?php } } ?>

</table>