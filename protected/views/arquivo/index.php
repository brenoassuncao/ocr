<?php // Yii::app()->bootstrap->register(); ?>

<?php
/* @var $this ArquivoController */
/* @var $model Arquivo */


$this->breadcrumbs=array(
	'Arquivos'=>array('index'),
	'Lista de Arquivos',
);

$this->menu=array(
	array('label'=>'List Arquivo', 'url'=>array('index')),
	array('label'=>'Create Arquivo', 'url'=>array('create')),
);

$limite_arquivos = Yii::app()->getModule('user')->user()->profile->getAttribute('limite_arquivos');
$limite_espaco	 = Yii::app()->getModule('user')->user()->profile->getAttribute('limite_espaco');

$qtd_arquivos = Yii::app()->getModule('user')->user()->getFilesCount() ;
$tamanho_arquivos = round(Yii::app()->getModule('user')->user()->getFilesSize()  /1024/1024, 2) ;

?>


	<div class="col-md-6">
		<div class="card ">
			<div class="header">
	            <h4 class="title">Upload de novos Arquivos em PDF</h4>	            
	        </div>
			<div class="content">
				<div class="row">

					<?php if( Yii::app()->user->checkAccess('admin') || ($limite_arquivos > $qtd_arquivos &&  $limite_espaco > $tamanho_arquivos )): ?>
						<?php
					        $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
					        'id'=>'import-form',
					        'action' => Yii::app()->createUrl('arquivo/upload'),
					            'htmlOptions' => array('enctype' => 'multipart/form-data','class' => 'bs-example'),
					            'enableAjaxValidation'=>true,
					            'enableClientValidation'=>false,  
					        )); 
					    ?>						
			        		<div class="col-md-8 " style="overflow:hidden;">
					            <input id="ytfile" type="hidden" value="" name="file">
					            <input name="file" id="file" type="file">  

				        	</div>    
				        	<div class="col-md-4">
					                <input class="pull-right btn btn-info" onclick="return validaArquivo()" type="submit" name="yt0" value="Upload PDF">                                            
				        	</div>    
							<div class="col-md-12 " >
					        	<p>O sistema não suporta arquivos PDF que estejam girados.</p>
				        	</div>    
				        
						<?php $this->endWidget();?> 
					<?php else: ?>
						<div class="col-md-12 " >
							<div class="alert alert-danger " >
					            <p>Você atingiu o limite de arquivos reservado a você no sistema. Por favor exclua alguns arquivos já processados para liberar espaço.</p>
				        	</div>  
				        </div>  
					<?php endif; ?>

				</div>    <!-- row -->
			</div>    
		</div>
	</div>


	<div class="col-md-6">
		<div class="card ">
			<div class="header">
	            <h4 class="title">Quantidade já usada / Limite Individual</h4>	            
	        </div>
			<div class="content">

				<div class="text-center">
		            <div class="row">
		                <div class="col-md-3 col-md-offset-1">
		                    <h5><?php print $qtd_arquivos . " de ". $limite_arquivos;?> <br /><small>Arquivos</small></h5>
		                </div>
		                <div class="col-md-4">
		                    <h5><?php print $tamanho_arquivos  . " de " . $limite_espaco;?> MB<br /><small>Usados</small></h5>
		                </div>  

		            </div>
		        </div>
		    </div>
		</div>
	</div>




<div class="col-md-12" id="arquivos">
    <div class="card">
		
	        <div class="header">
	            <h4 class="title">Arquivos</h4>
	            <p class="category">Estes foram os arquivos que você fez upload</p>
	        </div>
	        <div class="content table-responsive table-fll-width">
	            <!-- table class="table table-striped" -->
	            <?php $this->widget('bootstrap.widgets.BsGridView',array(
					'id'=>'arquivo-grid',
					'dataProvider'=>$model->search(),
					// 'filter'=>$model,
					'columns'=>array(
					//	'id',
						array(
				            'name' => 'user_id',
				            'header' => 'Usuário',
				            'value'=>  "CHtml::link(\$data->usuario?\$data->usuario->profile->name:'',array('/user/admin/view/','id'=>\$data->user_id))",
				            'type'  => 'raw',
				        ),
				        array( 
				            'name' => 'nome_arquivo',
			                'header' => 'Arquivo Original',
						  	'value'=>  "CHtml::link(\$data->nome_arquivo,array('/arquivo/view/','id'=>\$data->id))",
				            'type'  => 'raw',
			             ),
				       // 'hash',
						array( 
			                'name' => 'data',
			                'header' => 'Data de Upload',
			                'value'=> 'date("d/m/Y H:i",strtotime($data->data))',
			            ),
						array( 
			                'name' => 'tamanho',
			                'header' => 'Tamanho',
			                'value'=> 'round($data->tamanho / 1024 / 1024 , 2) . " MB"',
			            ),
			            array( 
			                'name' => 'status',
			                'header' => 'Status',
			  	            'value'=>  '$data->status == 1 ? "Processando ... <span class=\'processando\'></span>": ($data->status == 2 ? "Processado":"Erro")',
				            'type'  => 'raw',
			            ),
			            array( 
			                'name' => 'status',
			                'header' => 'Download Convertido',
			  	            //'value'=>  "CHtml::link( \$data->status == 2 ? 'Download OCR':'',array('/arquivo/viewOcr/','id'=>\$data->id))",
			  	            'value'=>  " \$data->status == 2 ? CHtml::link(CHtml::encode(' Download OCR'), array('/arquivo/viewOcr', 'id'=>\$data->id),
					              array(					                
					                'class' => 'btn btn-info  btn-fill btn-d glyphicon glyphicon-download '
					              )): '' " ,
				            'type'  => 'raw',
			            ),

			            array(
	 		                'header' => 'Delete',
				            'type'  => 'raw',
				            'value'=>  "CHtml::link(CHtml::encode(' '), array('/arquivo/delete', 'id'=>\$data->id),
					              array(
					                'submit'=>array('/arquivo/delete', 'id'=>\$data->id),
					                'class' => 'btn btn-danger glyphicon glyphicon-trash  btn-fill  ','confirm'=>'Você tem certeza que deseja deletar?'
					              )
				            )"
	                                            
	                                        
			            ),
			           	
						
					),
				)); ?>

	        </div>
	    
    </div>
</div>


	
		

	
	
<script>

	function validaArquivo()
    {
        var arquivo = jQuery('#file').val();
        
        var ext = arquivo.substring(arquivo.lastIndexOf(".")).toLowerCase();
  
        if( ext != '.pdf')
        {
	        alert("Arquivo inválido, Por favor anexe um arquivo PDF.");
	             
	        return false;
        } 
        
        var size = document.getElementById('file').files[0].size ; 


		if( size > 1024 * 1024 * 30) // maior que 30 MB
        {
	        alert("Arquivo muito grande, Por favor anexe um arquivo com até 30 MB e tente novamente.");
	             
	        return false;
        } 

        return true;

    }

    // Se existirem arquivos a serem processados, a cada 10s a div com a lista de arquivos será atualizada automaticamente. 
    // Quando todos os arquivos forem processados ã função para de executar
    function autoRefresh_div() {
    	var elementos = $(".processando");
    	if(elementos.size() > 0){    		
		    $("#arquivos").load("/ #arquivos .card", function() {
		        setTimeout(autoRefresh_div, 10000);
		    });
    	}
	}
	autoRefresh_div();

</script>