<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hello, world!</title>
    <style type="text/css">
      
      a:link, a:visited {
  background-color: white;
  color: black;
  margin-top: 30px;
  border: 1px solid black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;

}

a:hover, a:active {
  background-color: green;
  color: white;
}
      a {
    
  text-align: center;
  
 a:hover{
  opacity: .7;
}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt=4">
          
          <div class="card">
          <div class="card-header">
            <h4 class="card-title">
              Enter Your Mobile Number To See Your Appointments!
            </h4>
          </div>
<div class="card-body">
  <div class="row">
    <div class="col-md-6">
      <form action="" method="POST">   
         <div class="form-group">
        <input type="text" name="get_phone" class="form-control" placeholder="Enter Mobile Number" required="">
      </div>
      <button type="submit" name="search_by_phone" class="btn btn-primary"> Search</button>
  </form>

    </div>
  
  </div>
  <?php
  $connection = mysqli_connect("localhost", "root", "", "appoint"); 
   if(isset($_POST['search_by_phone']))
   {
   $phone = $_POST['get_phone'];
   $query = "SELECT * FROM appointment WHERE phone='$phone'";
   $query_run = mysqli_query($connection, $query);
   
    

           
     
  ?>
  <div class="table-responsive">
  <table class="table table-bordered" style="margin-top: 20px">
    <thead>
      <tr>
        
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Service</th>
        <th scope="col">Phone</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Message</th>
      </tr>

    </thead>
    <tbody>
     <?php
if(mysqli_num_rows($query_run) > 0)
    {
       while($row = mysqli_fetch_array( $query_run))
       {


       ?>
      <tr>
        
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo $row['service']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['time']; ?></td>
         <td><?php echo $row['message']; ?></td>
       
        

      </tr>

<?php
  }

    }
    else
    {
      ?>

      <tr>
        <td colspan="7">No Appointments Available</td>
      </tr>
      <?php
      

      
    }



    

?>
    </tbody>



  </table>
</div>
<?php

}
 ?>


</div>


<a href="logout.php" >Logout</a>
          

             </div>

        </div>
        

      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>