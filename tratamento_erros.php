<?php

    try {
        echo '<h3> *** Try *** </h3>';
 
        //$sql = 'select * from clientes';
        //mysql_query($sql); 

        if (!file_exists('require_arquivo_a.php')) {
            throw new Exception('O arquivo em questão deveria estar disponivel as ' . date('d/m/Y H:i:s') . ' horas mas não estava. Vamos seguir mesmo assim');
        }

        /*
        if (!file_exists('require_arquivo_a.php')) {
            throw new Error('O arquivo em questão deveria estar disponivel as ' . date('d/m/Y H:i:s') . ' horas mas não estava. Vamos seguir mesmo assim');
        }
        */

    } catch (Error $e) {
        echo '<h3> *** Catch Error *** </h3>';
        echo '<p style="color: red">' . $e;
        //armazenando esse erro em banco de dados
    
    }catch (Exception $e) {
        echo '<h3> *** Catch Exception *** </h3>';
        echo '<p style="color: red">' . $e;
        //armazenando esse erro em banco de dados
    } 


?>