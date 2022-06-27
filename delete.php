<?php

include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM tasks WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if($result){
    header('location : index.php');
}
else{
    echo "Failed to Delete " . mysqli_error($conn);
}

?>