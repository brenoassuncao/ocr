<?php

    $db = require(dirname(__FILE__).'/protected/config/database.php') ;
     //$ocr_folder =  '/var/www/ocr/arquivos_ocr/'; // Pasta de trabalho do OCR
     $ocr_folder =  '/arquivos_ocr/'; // Pasta de trabalho do OCR


    try {
        $conn = new PDO($db['connectionString'], $db['username'], $db['password']);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";

        //caminhos das pastas de busca
        $folder_out =  $ocr_folder.'Saida/';
        $folder_error = $ocr_folder.'Erro/';

        //Atualização do Status
        $resultados = $conn->query("select id, hash from arquivo where status = 1");

        $qtd = 0;
        // output data of each row
        while($item = $resultados->fetch(PDO::FETCH_ASSOC)) {


            if(file_exists($folder_out.$item['hash'])){
                $sql_update = "UPDATE arquivo set status = 2 where id = " . $item['id'] ;// status 2 = processamento realizado com sucesso
                $conn->query($sql_update) ;
                $qtd ++;
            }


            if(file_exists($folder_error.$item['hash'])){
                $sql_update = "UPDATE arquivo set status = 3 where id = " . $item['id'] ; // status 3 = erro no processamento
                $conn->query($sql_update) ;
                $qtd ++;
            }

        }  // while

        echo "Foram atualizados " . $qtd . " Arquivos com sucesso! ";
        //close the connection
        $conn = null; 

    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
?>
