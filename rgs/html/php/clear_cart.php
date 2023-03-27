<?php

if(isset($_POST['pp_remove_button'])){
    $byr_nme = $_SESSION['buyer_name']."_table";
    $delete_query="TRUNCATE TABLE $byr_nme;";
    $conn->query($delete_query);

    echo "<script> window.onload=function(){if(!window.location.hash){window.location - window.location = window.location + '#loaded'; window.location.reload();}}</script>";

}

?>