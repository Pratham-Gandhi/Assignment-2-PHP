<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `crud` where id=$id";
        $conn->query($sql);
    }
    header('location:/crud/index.php');
    exit;
?>