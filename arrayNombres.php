<?php 
        $a = ["Day","Chris","Emilia","Jose","Tania","Armando","Rosita","Alejandra","Alejandro"];
        $sugerencia = "";

        if(empty($_GET['nombre'])){
            echo "No hay sugerencias";
        }
else{
            $nombre = $_GET['nombre'];

            if(!empty($nombre)){

                $nombre = strtolower($nombre);
                $long = strlen($nombre);
    
                foreach($a as $nom){
                    if(stristr($nombre, substr($nom, 0, $long))){
                        $sugerencia .= $nom.", ";
                    }
                }
            }
            echo ($sugerencia)? $sugerencia : "No hay sugerencia";
        }      
?>