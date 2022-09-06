<?php
include("connection.php");

?>

<?php

if(isset($_GET['id'])){
    $main_id = $_GET['id'];
    $sql_update = mysqli_query($con, "UPDATE message SET status=1 WHERE id = '$main_id'");
}



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/0ae88fb172.js" crossorigin="anonymous"></script>
  </head>
  <body>


  <div class="container" id="table1">
    <div class="row">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">S.no</th>
            <th scope="col">Name</th>
            <th scope="col">Message</th>
            <th scope="col">Date</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sr_no=1;
            $sql_get = mysqli_query($con, "SELECT * FROM message WHERE status=1");
            while($main_result = mysqli_fetch_assoc($sql_get)){ 
                ?>
            <tr>
            <th scope="row"><?php echo $sr_no++; ?></th>
            <td><?php echo $main_result['name']; ?></td>
            <td><?php echo $main_result['message']; ?></td>
            <td><?php echo $main_result['cr_date']; ?></td>
            <td><a href="delete.php?id=<?php echo $main_result['id']; ?>" class="text-danger"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
  </div>
   




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>