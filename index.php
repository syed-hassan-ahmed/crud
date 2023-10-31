<?php include('connection.php') ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

   <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto">
            <form action="backend.php" method="post">
               <h2 class="mt-5 text-center">Add Your Data</h2>
               <div class="mt-4">
                <input type="text" name="sname" placeholder="Name" class="form-control" required />
               </div>
               <div class="mt-4">
                <input type="text" name="saddress" placeholder="Address" class="form-control" required />
               </div>
               <div class="mt-4">
                <input type="text" name="snumber" placeholder="Number" class="form-control" required />
               </div>
               <button type="submit" value="submit" name="submit" class="btn btn-danger w-100 mt-4">Submit</button>
            </form>
        </div>
      </div>
   </div>

   <div class="container">
      <div class="row">
         <div class="col-lg-8 mx-auto">
            <div class="table-responsive mt-5">
               
               <?php
                 $conn = mysqli_connect("localhost","root","","school");
                 $res = mysqli_query($db, "SELECT * FROM school_data");
               ?>

               <table class="table">
                  <thead>
                     <tr>
                     <th>
                        Id
                     </th>
                     <th>
                        Name
                     </th>
                     <th>
                        Address
                     </th>
                     <th>
                        Number
                     </th>
                     <th>
                        Buttons
                     </th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php while($row = mysqli_fetch_array($res)) { ?>
                     <tr>
                     <td><?php echo $row['id']?></td>
                     <td><?php echo $row['sname']?></td>
                     <td><?php echo $row['saddress']?></td>
                     <td><?php echo $row['snumber']?></td>
                     <td>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                     </td>
                  </tr>
                  <?php } ?>
                  </tbody>
               </table>

            </div>
         </div>
      </div>
   </div>
    
  <script src="./assets/js/bootstrap/bundle.min.js"></script>
</body>

</html>