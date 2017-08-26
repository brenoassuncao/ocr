<?php

    $main = require(dirname(__FILE__).'/protected/config/main.php') ;

    //evita que o cron seja executado sem permissão
    // deve ser configurado o mesmo cron aqui e na chamada
    if (!isset($_GET['cron_key']) || $main['params']['cron_key'] != $_GET['cron_key']) {
      die();
    }

    $db = require(dirname(__FILE__).'/protected/config/database.php') ;
     

    try {
        $conn = new PDO($db['connectionString'], $db['username'], $db['password']);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";

        $folder_out      =  $main['params']['ocr_folder_out']; // pasta de saída do OCR (onde o OCR-server vai colocar os arquivos convertidos corretamente)
        $folder_erro     =  $main['params']['ocr_folder_erro']; // pasta de erro do OCR (onde o OCR-server vai colocar os arquivos com erro no processamento)


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


            if(file_exists($folder_erro.$item['hash'])){
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
