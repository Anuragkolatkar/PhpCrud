<?php
            
include 'conn.php';
if(isset($_POST['done'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
   $q = "UPDATE crud SET id=$id,name='$name',pass='$pass' WHERE id=$id";

   $query = mysqli_query($conn,$q);
   header('location:display.php');

}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script>
              if(window.history.replaceState){
                window.history.replaceState(null,null,window.location.href);
              }
            </script>
    </head>
    <body>
    <div class="jumbotron text-center">
  <h1>Update Query</h1>
 
  <form method="post" action="">
  <div class="form-group">
    <label for="email">User name:</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name" id="email">
  </div>
  <div class="form-group">
    <label >Password:</label>
    <input type="password" class="form-control" name="pass" placeholder="Enter password" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" name="done" class="btn btn-primary">Submit</button>
</form>
</div>
        
        <script src="" async defer></script>
    </body>
</html>