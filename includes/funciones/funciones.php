<?php
function productos_json(&$boletos, &$camisas, &$etiquetas){
    $tipo_boletos=["pase_un_dia","pase_completo","pase_dos_dias"];
    $boletos=array_combine($tipo_boletos,$boletos);
    $json = array();
    foreach($boletos as $key => $boleto){
        if((int) $boleto>0){
            $json[$key]=(int) $boleto ;
        }
    }
    if((int)$camisas>0){
        $json["camisas"]=(int)$camisas;
    }
    if((int)$etiquetas>0){
        $json["etiquetas"]=(int)$etiquetas;
    }

   


    return json_encode($json);
};

function eventos_json(&$eventos){
    $eventos_json=array();
    foreach($eventos as $evento){
     $eventos_json["eventos"][]=$evento;   
    }
    return json_encode($eventos_json);
   
};

?>