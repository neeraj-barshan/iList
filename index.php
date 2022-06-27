<!DOCTYPE html>

<?php include 'db.php';

$sql = "SELECT * FROM tasks";
$result = mysqli_query($conn, $sql);
$nums = mysqli_num_rows($result);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iList - CRUD based Todo List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 70px;">
            <center><h1>Todo List</h1></center>
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <button type="button" class="btn btn-success" data-target="#myModal" data-toggle="modal">Add Task </button>
                    <!-- <button type="button" class="btn btn-default pull-right" onclick="window.print()">Print</button> -->
                    <hr><br>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Task</h4>
      </div>
      <div class="modal-body">
          <form action="insert.php" method="post">
              <div class="form-group">
                  <label for="task">Task Name</label>
                  <input type="text" name="task" id="task" required class="form-control">
              </div>
              <input type="submit" value="Add Task" name="send" class="btn btn-success">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tasks</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while($row = mysqli_fetch_assoc($result)):?>
                      <tr>

                          <th scope="row"><?php echo $row['id'] ?></th>
                          <td class="col-md-9"><?php echo $row['name'] ?></td>
                          <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a> <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                          
                      </tr>
                        <?php endwhile; ?>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
</html>