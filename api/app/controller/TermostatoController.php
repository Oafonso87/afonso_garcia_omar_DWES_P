<?php
require __DIR__.'/../utils/JsonDataHandler.php';

class TermostatoController{
    
    public function index(){
        echo "Hola desde el método GET";
    }

    public function update($json){
        $handler = new JsonDataHandler(__DIR__.'/../../data/dispositivos.json');        
        $handler->readAll();
        //$data = json_decode($json, true);
        /*foreach ($data as $temp) {
            if ($temp["temperatura_objetivo"] > 16 && ($temp["temperatura_objetivo"] > 22) {
                
            }
        }*/
    }

}

?>