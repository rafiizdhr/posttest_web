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
            <h2> '.$arr[$row][$a]['judul'].'</h2>
            <h3 style = "margin-bottom:10px;color:aliceblue;">'.$arr[$row][$a]['jenis'].'</h3>
                <div class="isi" style="margin-bottom: 5px;">
                    <p> '.$arr[$row][$a]['artis'].' </p>
                    <p> ('.$arr[$row][$a]['email'].') </p>
                </div>
            <h2> Rp. '.$arr[$row][$a]['harga'].' </h2>
            <h3 style = "margin-bottom:10px;color:aliceblue;"> '.$arr[$row][$a]['tanggal'].' </h3>
            </div>';  
            $i++;
        }
        if(isset($_SESSION['adminLogged']) && $row == count($arr)-1){
            echo '<button onclick="document.getElementById(\'form\').style.display=\'block\'" class="tambah">+';
        }
        
        echo '</div>';
        
    }
?>