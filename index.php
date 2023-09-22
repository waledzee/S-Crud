<?php  include('inc/header.php'); ?>
<?php 

    $sql = "SELECT * FROM `crud_php_mysql2` ";

?>

<form class="my-2 p-3 border" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       <div class="form-group">
           <input type="text" name="search" class="form-control" placeholder="Enter name or  E-amil" id="exampleInputName1" >
           <input type="submit" name="btn" class="form-control" id="submit-btn" >

       </div>






    <h1 class="text-center col-12 bg-primary py-3 text-white my-2">All Users</h1>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

             <?php 
             if(isset($_GET["search"])){
                 $search = mysqli_escape_string($conn,$_GET["search"]);
                 $sql .= " WHERE `crud_php_mysql2`.`user_name` LIKE '%" . $search . "%' OR `crud_php_mysql2`.`user_email` LIKE '%" . $search . "%' OR `crud_php_mysql2`.`user_id` LIKE '%" . $search . "%' ";


             }



                 $result = mysqli_query($conn,$sql);


             
             ?>
                    

                <?php  if(mysqli_num_rows($result) > 0): ?>
                    <?php  while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <th><?php echo $row['user_id']; ?></th>
                        <td><?php echo $row['user_name']; ?></td>
                        <td><?php echo $row['user_email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        
                        <td>
                            <a class="btn btn-info" href="edit.php?id=<?php echo $row['user_id']; ?>"> <i class="fa fa-edit"></i> </a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['user_id']; ?>"> <i class="fa fa-close"></i> </a>
                        </td>
                    </tr>

                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="col-md-6 offset-md-3">
   
   

            
                
                </tbody>
            </table>
        </div>
    </div>

<?php  include('inc/footer.php'); ?>

 
  