<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Profile");
$this->breadcrumbs=array(
	UserModule::t("Profile"),
);

if(Yii::app()->user->checkAccess('admin')){
    $this->menu=array(
    	((UserModule::isAdmin())
    		?array('label'=>UserModule::t('Manage Users'), 'url'=>array('/user/admin'))
    		:array()),
        array('label'=>UserModule::t('List User'), 'url'=>array('/user')),
        array('label'=>UserModule::t('Edit'), 'url'=>array('edit')),
        array('label'=>UserModule::t('Change password'), 'url'=>array('changepassword')),
        array('label'=>UserModule::t('Logout'), 'url'=>array('/user/logout')),
    );
    
} else {
     $this->menu=array();
}

?>

 <div class="col-lg-4 col-md-5">
    <div class="card card-user">
        <div class="image">
            <img src="/img/background.jpg" alt="..."/>
        </div>
        <div class="content">
            <div class="author">
              <img class="avatar border-white" src="/img/faces/face.png" alt="..."/>
              <h4 class="title"><?php echo CHtml::encode($model->profile->name); ?><br />
                 <a href="#"><small>@<?php echo CHtml::encode($model->username); ?></small></a>
              </h4>
            </div>
            <!-- p class="description text-center">
                "I like the way you work it <br>
                No diggity <br>
                I wanna bag it up"
            </p -->
        </div>
        <hr>
        <div class="text-center">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <h5><?php print $model->getFilesCount() . " de ". $model->profile->limite_arquivos;?> <br /><small>Arquivos</small></h5>
                </div>
                <div class="col-md-4">
                    <h5><?php print round(($model->getFilesSize() /1024 / 1024),2)  . " de " . $model->profile->limite_espaco;?> MB<br /><small>Usados</small></h5>
                </div>  

            </div>
        </div>
    </div>


</div>

    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">Perfil</h4>
            </div>
            <div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control border-input" disabled placeholder="Company" value="<?php echo CHtml::encode($model->email); ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Data de Registro</label>
                                <input type="text" class="form-control border-input" disabled  placeholder="Username" value="<?php echo  date("d/m/Y H:i", strtotime($model->create_at)); ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Último acesso</label>
                                <input type="text" class="form-control border-input" disabled placeholder="Email" value= "<?php echo date("d/m/Y H:i",strtotime($model->lastvisit_at)); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control border-input" disabled placeholder="Company" value="<?php print ($model->status == 1)? "Ativo" : "Inativo"; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lotação</label>
                                <input type="text" class="form-control border-input" disabled placeholder="Last Name" value="<?php print $model->profile->setor; ?>">
                            </div>
                        </div>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>




