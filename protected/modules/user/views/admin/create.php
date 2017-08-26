<?php
$this->breadcrumbs=array(
	UserModule::t('Users')=>array('admin'),
	UserModule::t('Criar usuário'),
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
            <h4 class="title"><?php echo  UserModule::t('Criar usuário'); ?></h4>
        </div>
        <div class="content table-responsive ">

			<?php
				echo $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile));
			?>
        </div>
	</div>
</div>

