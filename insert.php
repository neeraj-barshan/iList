<?php

include 'db.php';

if(isset($_POST['send'])){

    $name = $_POST['task'];
    $sql = "INSERT INTO tasks (name) VALUES ('$name')";
    $result = mysqli_query($conn, $sql);

    if($result == true){
        header ('location: index.php');
    }

}

?>