<?php
    if(!isset($_SESSION["koleksi"])){
        $arr = [[]];
    }else{
        $arr = $_SESSION["koleksi"];
    }

    $i = 0;
    for($row = 0; $row < count($arr);$row++){
        echo '<div class="box">';
        for($a = 0; $a < count($arr[$row]); $a++){
            echo '<div class="poto">
            <img src="https://source.unsplash.com/1000x80'.$i.'">
            <h2> '.$arr[$row][$a]['judul'].' </h2>
                <div class="isi">
                    <p> '.$arr[$row][$a]['artis'].' </p>
                </div>
            <h2> Rp. '.$arr[$row][$a]['harga'].' </h2>
            </div>';  
            $i++;
        }
        if(isset($_SESSION['isLogged']) && $row == count($arr)-1){
            echo '<button onclick="document.getElementById(\'form\').style.display=\'block\'" class="tambah">+';
        }
        
        echo '</div>';
        
    }
?>
