Este projeto é um complemento do trabalho desenvolvido pelo pessoal da Anatel na construção do serviço OCR-SERVER (https://softwarepublico.gov.br/gitlab/anatel/ocr-server). O OCR-SERVER é uma solução baseada em software livre e de código aberto que processa arquivos PDF e adiciona uma camada de texto em arquivos PDF escaneados. o OCR-SERVER cria um serviço ativo no servidor, o qual que fica varrendo uma pasta de entrada à procura de arquivos PDF e os processa com um mecanismo de reconhecimento ótico de caracteres OCR, transformando pdfs não pesquisáveis em PDFs pesquisáveis. 


O projeto OCR-SERVER funciona apenas na rede local. Este projeto cria uma interface web para o OCR-SERVER e possibilita por meio do controle de usuários um maior gerenciamento dos arquivos que estão sendo processados. Além de permitir que usuários de qualquer lugar com acesso à internet possam fazer uso do serviço de conversão via OCR.

Abaixo temos a tela inicial depois de autenticado. Essa tela é bem intuitiva. Simplesmente o usuário faz upload de um arquivo e fica aguardando o processamento do mesmo. o arquivo é convertido, surge um link para fazer download do arquivo convertido.

![Tela inicial após login](https://github.com/brenoassuncao/ocr/blob/master/Sistema_de_Convers%C3%A3o_via_OCR_-_Arquivo_-_2017-08-25_17.06.15.png)


Essa interface foi desenvolvida usando o Yii-framework e um template de código aberto. 
O sistema controla os usuários e seus arquivos. Cada arquivo que o usuário faz upload, o sistema já coloca na pasta de entrada (deve ser a mesma pasta configurada no OCR server). Depois, o OCR-server processa esse arquivo e a cada 1 minuto um script varre o sistema de arquivos verificando se os arquivos novos já foram processados (verifica se tem o arquivo correspondente na pasta de saída) . Quando esse script verifica que o arquivo foi convertido ele atualiza o status no banco de dados e a interface passa a exibir um link para download do arquivo. 

**Características do sistema:**

- Pode usar uma autenticação via LDAP ou via usuário / senha convencional usando (MD5). 
- Cada arquivo que é feito upload é renomeado segundo um hash dinâmico para evitar que seja acessível diretamente pela URL. O nome original é armazenado no banco de dados. 
- O sistema permite a criação de limites de arquivos e volume total para cada usuário, evitando assim que um usuário abuse no uso do serviço. Isso é configurável na interface. 
- O sistema também possui o controle de perfis de usuário. Atualmente admin (vê /administra tudo)  e usuário autenticado (vê e exclui apenas os seus arquivos)
- *Framework:* Yii-framework - www.yiiframework.com
- *Linguagem:* PHP
- *Banco de dados:* Mysql
- *Template:* (Paper Dashboard - MIT Licence): https://www.creative-tim.com/product/paper-dashboard

*Configurações*

Para configurar o a interface WEB do OCR-SERVER no servidor deve-se seguir os passos abaixo:

1 - clonar o repositório para /var/www/ocr
```
	$ cd /var/www
	$ git clone https://github.com/brenoassuncao/ocr.git
```
	
2 - baixar a versão 1.1.18 do yii-framework e colocar na pasta /var/www/yii  (ou mais recente)
```
	$ cd /var/www
	$ wget https://github.com/yiisoft/yii/releases/download/1.1.18/yii-1.1.18.018a89.tar.gz
	$ tar xzvf yii-1.1.18.018a89.tar.gz
	$ mv yii-1.1.18.018a89 yii	
	$ chown www-data ocr -R

```

3 - criar e configurar o banco de dados chamado "ocr"
	- editar o arquivo protected/config/database.php
	- restaurar uma cópia do banco de dados 
```
	$ cd /var/www/mysql
	$ mysql -p ocr < ocr.sql
```  

4 - Configurar uma tarefa no cron para atualizar as informações sobre os arquivos processados. É importante alterar o hash usado aqui para evitar chamadas não autorizadas ao cron
	
```
	$ crontab -e
	Adicionar a seguinte linha (sugestão)
	*/1 * * * * /usr/bin/php /var/www/ocr/cron.php?cron_key=seuHashSeguroAqui
```  

para administrar a interface web:

- usuário: admin
- senha: admin

**Arquivo de configuração: protected/config/main.php**

Observar nesse arquivo as configurações para usar a autenticação Ldap ou via banco de dados. Hoje está configurado para usar o banco de dados. mas pode ser alterado para usar o LDAP. Para isso deve se alterar o parâmetro 'autentication' e 'ldap' no arquivo de configuração conforme abaixo:
```
    'autentication'        =>'bd',  // preencher com : 'ldap' OU 'bd'    
    'ldap'      => array(
        'host'            => 'ldap.exemplo.br',
        'port'            => 389,
        'admin_username'  => 'admin',
        'admin_password'  => 'admin',
        'admin_dn'        => 'ou=users,dc=exemplo,dc=br',
        'general_dn'      => 'dc=exemplo,dc=br',
    ),
```

O método de autenticação (chamado de autenticate) está implementado no arquivo protected/modules/user/components/UserIdentity.php e pode ser alterado para atender a uma maneira diferente de fazer autenticação.

Ainda no arquivo de configuração é possível definir a localização das pastas de entrada, Saída, Erro e Originais_processados do OCR-SERVER, conforme a seguir. Lembrar de usar as mesmas pastas usadas no serviço OCR-server:
*No arquivo /usr/local/bin/ocr está assim:*
```
my @BASE_DIRS = ( '/var/www/ocr/arquivos_ocr/');
my %SUB_DIRS = ( 'IN'=>'Entrada', 'OUT'=>'Saida', 'PROC'=>'Originais_Processados', 'TEMP'=>'/tmp/ocr_tmp', 'ERROR' => 'Erro' );
```

*No arquivo protected/config/main.php deve ficar assim:*
```
  'ocr_folder_in'     =>'/var/www/ocr/arquivos_ocr/Entrada/', // pasta de entrada  (arquivos para processar)
  'ocr_folder_out'    =>'/var/www/ocr/arquivos_ocr/Saida/', // pasta de saída  (arquivos convertidos)
  'ocr_folder_proc'   =>'/var/www/ocr/arquivos_ocr/Originais_Processados/', // pasta de arquivos processados 
  'ocr_folder_erro'   =>'/var/www/ocr/arquivos_ocr/Erro/', // pasta de erros 
```


*Cron*

O parâmetro cron_key usado no passo 4 (criar tarefa no cron) deve ser o mesmo usado aqui. É esse parâmetro que vai permitir que o cron execute sem problemas. crie um hash e use nos dois lugares (arquivo de configuração e tarefa do cron)

```
   'cron_key'	=> 'seuHashSeguroAqui', // Hash que será usado no cron para evitar chamadas não autorizadas ao cron
```
Sugestões / Contribuições são bem vindas ao projeto.
