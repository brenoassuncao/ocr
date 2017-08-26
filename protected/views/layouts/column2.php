<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>



 <div class="col-lg-8 col-md-7">
    <div class="card">
        <div class="header">
            <h4 class="title">
				<?php
					$this->beginWidget('zii.widgets.CPortlet', array(
						'title'=>'Operações',
					)); 
				?>
			</h4>
        </div>
        <div class="content">
		<?php	$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
           
        </div>
    </div>
</div>



<?php $this->endContent(); ?>
