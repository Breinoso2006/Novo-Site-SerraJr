<?php

require_once __DIR__.'/../connect.php';


    $sql="SELECT missao,visao FROM sobre where codSobre='1'";
    $resultado = mysqli_query($conn,$sql);
    $rowcount = mysqli_num_rows($resultado);
    
    if($rowcount>0){
        $row = mysqli_fetch_array($resultado,MYSQLI_ASSOC);  
        echo json_encode($row); // retorna os dados para conferir o json
    }else{
        echo "Erro ao carregar os dados!";
    }
 ?>