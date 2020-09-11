<?php session_start();

if(isset($_SESSION["banyakInput"])){
    $data = array();
    $perhitunganFaktor=0;
    $biggest =0;
    for($index=0; $index < $_SESSION["banyakInput"]; $index++){
        $name = "input".$index;
        $data[$index] = $_POST[$name];
    }

        for($index=0; $index < count($data) ; $index++){
            $perhitunganFaktor += $data[$index]; 
            $biggest = max($data);
        }
        echo fmod($perhitunganFaktor, $biggest);
    }

?>