<?php
    include "config.php";
    if(isset($_GET['id'])){
        $dlt_id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = mysqli_query($conn, "Delete from url where shorten_url = '{$dlt_id}'");

        if($sql){
            header('location: ../url-show.php');
        }
        else{
            header('location: ../url-show.php');
        }
    }else{
        header('location: ../url-show.php');
    }
?>