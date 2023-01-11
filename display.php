
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
    </head>
    <body>
      <div class="container">
          <div class="col-lg-12">
            <h1 class="text-center text-warning">Display Table</h1><br>
            
            <table class=" table teable-striped table-hover table-bordered">
                 <tr class="bg-dark text-white text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Pass</th>
                    <th>Delete</th>
                    <th>Update</th>
                 </tr>
                 <?php
include 'conn.php';
    $s = "SELECT * FROM `crud`";
    $query = mysqli_query($conn,$s);
    while($res = mysqli_fetch_array($query)){
        
?>
                 <tr class=" text-center">
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['name']; ?></td>
                    <td><?php echo $res['pass']; ?></td>
                    <td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id'];?>"class="text-white">DELETE</a></button></td>
                    <td><button class="btn-success btn"><a href="update.php?id=<?php echo $res['id'];?>"class="text-white">Update</a></button></a></td>
                 </tr>
    <?php
    }
    ?>
</table>
</div>
</div>
        
        <script src="" async defer></script>
    </body>
</html>