<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bem vindo ao <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Esta interface foi desenvolvida pela equipe da Embrapa Produtos e Mercado para dar mais flexibilidade na utilização de um servidor de conversão de arquivos PDF em PDF pesquisáveis. Usamos uma solução desenvolvida pela equipe da Anatel e disponibilizada no Portal do Software Público. Como template foi utilizado o Paper Dashboard (Creative Tim).</p>


<p> Essa interface faz upload de arquivos na pasta de entrada do Servidor OCR (Ocr-Server) e fica "escutando" a saída do processamento. Após o processamento ser concluído é adicionado um link de download para o arquivo convertido.</p>

<p>Links originais dos componentes utilizados:</p>
<ul>
	<li>OCR Server (LGPL v2.1): <code>https://softwarepublico.gov.br/gitlab/anatel/ocr-server</code></li>
	<li>Tema utilizado (Paper Dashboard  - MIT Licence): <code>https://www.creative-tim.com/product/paper-dashboard</code></li>
</ul>

<p>Sugestões / ajuda  - breno.assuncao@embrapa.br</p>
