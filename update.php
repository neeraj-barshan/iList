<!DOCTYPE html>

<?php include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tasks WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);

// if($rows){
//     var_dump($rows);
// }

if(isset($_POST['send'])){
    $task = $_POST['task'];

    $sql1 = "UPDATE tasks SET name = '$task' WHERE id = '$id'";
    $result1 = mysqli_query($conn, $sql1);
    
    header('location : index.php');
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List - CRUD Notes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 70px;">
            <center><h1>Edit List</h1></center>
            <div class="col-md-10 col-md-offset-1">
                    <hr><br>
                    <form method="post">
                        <div class="form-group">
                            <label for="task">Task Name</label>
                            <input type="text" name="task" id="task" required class="form-control" value="<?php echo $rows['name']; ?>">
                        </div>
                            <input type="submit" value="Edit Task" name="send" class="btn btn-success">
                    </form>
            </div>
        </div>
    </div>
</body>
</html>