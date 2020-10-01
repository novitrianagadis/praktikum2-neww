<?php

        if(isset($_GET['orang'])){
                $orang = $_GET['orang'];
                echo "Nama $orang <br>";
                

                $user = array(
                    array(
                        "nama" => "Arsene Lupin",
                        "nik" => "1234",
                        "jenis_kelamin" => "male",
                        "tgl_lahir" => "1902-03-23"
                    ),
                    array(
                         "nama" => "Sherlock Holmes",
                        "nik" => "4321",
                        "jenis_kelamin" => "male",
                        "tgl_lahir" => "1812-01-11"
                    ),
                    array(
                         "nama" => "Irene Adler",
                        "nik" => "7890",
                        "jenis_kelamin" => "female",
                        "tgl_lahir" => "1232-04-13"
                    )
                );
        $a=0;
        $b=0;

        foreach($user as $data){
                if(strtoupper($data["nama"]) == strtoupper($orang)){
                $a=1;
                $b=$data;
                } 
        }

        if($a){
                echo "<br><b>$orang</b></br>";
                echo "<br>NIK: ".$b["nik"]."</br>";
                echo "<br>KELAMIN: ".$b["jenis_kelamin"]."</br>";
                echo "<br>TGL LAHIR: ".$b["tgl_lahir"]."</br>";
                } 
        else{
                echo "$orang <b>Tidak Terdaftar</b> <br>";
        }
    }

?>