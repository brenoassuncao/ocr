<?php
$this->breadcrumbs=array(
	UserModule::t('Users')=>array('/user'),
	UserModule::t('Gerenciar Usuários'),
);

$this->menu=array(
    array('label'=>UserModule::t('Criar usuário'), 'url'=>array('create')),
    array('label'=>UserModule::t('Gerenciar usuários'), 'url'=>array('admin')),
    array('label'=>UserModule::t('Gerenciar campos de perfil'), 'url'=>array('profileField/admin')),
    
);


?>


<div class="col-md-12">
    <div class="card">
		
        <div class="header">
            <h4 class="title"><?php echo UserModule::t("Gerenciar usuários"); ?></h4>
        </div>
        <div class="content table-responsive table-fll-width">


			<?php $this->widget('bootstrap.widgets.BsGridView', array(
				'id'=>'user-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'columns'=>array(
					array(
						'name' => 'id',
						'type'=>'raw',
						'filter'=> '',
						'value' => 'CHtml::link(CHtml::encode($data->id),array("admin/update","id"=>$data->id))',
					),
					array(
						'name' => 'username',
						'type'=>'raw',
						'value' => 'CHtml::link(UHtml::markSearch($data,"username"),array("admin/view","id"=>$data->id))',
					),
					array(
						'header'=>'Nome',
						'type'=>'raw',
						'value'=>'$data->profile->name',
					),
					array(
						'name'=>'email',
						'type'=>'raw',
						'value'=>'CHtml::link(UHtml::markSearch($data,"email"), "mailto:".$data->email)',
					),
					array(
						'header'=>'Setor',
						'type'=>'raw',
						'value'=>'$data->profile->setor',
					),
					// 'create_at',		
					array(
						'name'=>'lastvisit_at',
						'value'=> 'date("d/m/Y H:i",strtotime($data->lastvisit_at))',
						'type'=>'raw',						
						'filter'=> '',
					),
					/*array(
						'name'=>'superuser',
						'value'=>'User::itemAlias("AdminStatus",$data->superuser)',
						'filter'=>User::itemAlias("AdminStatus"),
					),*/
					array(
						'name'=>'status',
						'value'=>'User::itemAlias("UserStatus",$data->status)',
						'filter'=> '',
						//'filter' => User::itemAlias("UserStatus"),
					),
					array(
						'class'=>'CButtonColumn',
					),
				),
			)); ?>
        </div>
    </div>
</div>
