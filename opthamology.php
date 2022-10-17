<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>CodePen - Responsive Table HTML and CSS Only</title>
<style>
    *{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background-image: url("opthamology1.jpg");
    }
th{
  height: 40px;

 
}
.btn{
  margin-left: 50px;
  size: 50px;
  height: 60px;
  border-radius: 40px;
  background:white;
  width: 100px;
}
.btn:hover {
  
        background: #fe5f55 !important;
    border: 1px solid #fe5f55 !important;
    color: #fff !important;
}

h1{
    text-align: center;
    font-size: 50px;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: white;
    padding: 30px 0;

}
tr{

    text-transform: uppercase;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid black;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid black;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid black;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid black;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}


.date{


  border: 1px solid rgba(0, 0, 0, 0.1) !important;
    height: 58px !important;
    padding-left: 15px;
    padding-right: 15px;
    background: #fff !important;
    color: rgba(0, 0, 0, 0.5) !important;
    font-size: 16px;
    border-radius: 20px;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}

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
      border-radius: 10px;

  text-align: center;
  
 a:hover{
  opacity: .7;
}
  </style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
 <h1>Welcome DOC !</h1>
 <form action="" method="POST">


  <input class="date" type="date" name="get_date" style="margin-left: 500px; margin-top: 150px;" />

    <button type="submit" name="search_by_date" class="btn"> S e a r c h</button>
  </form>
  <?php
  $connection = mysqli_connect("localhost", "root", "", "appoint"); 
   if(isset($_POST['search_by_date']))
   {
   $date = $_POST['get_date'];
   $query = "SELECT * FROM appointment WHERE date='$date'";
   $query_run = mysqli_query($connection, $query);
   
    

           
     
  ?>
<div class="table-wrapper">
    <?php include("dbconn.php"); ?>
<?php
   $select =mysqli_query($conn, "SELECT * FROM appointment WHERE service='Opthalmology' ");

  
 ?>
<table class="fl-table"border="1px" style="margin-top: 100px;" >
<thead>
<tr>

<th>F i r s t n a m e</th>
    <th>L a s t n a m e</th>
    <th>S e r v i c e</th>
    <th>P h o n e</th>
  <th>D a t e</th>
  <th>T i m e</th>
  <th>M e s s a g e</th>
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
<?php

}
 ?>
<a href="logout.php" style="margin-left: 600px; margin-top: 200px;" >Logout</a>

</div>
<script src="https://static.codepen.io/assets/editor/live/css_reload-5619dc0905a68b2e6298901de54f73cefe4e079f65a75406858d92924b4938bf.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>