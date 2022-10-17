<style type="text/css">
   .appoint{

    height:600px;
   }
 .feed{
  height:600px; 
 }
 .responstable {
    margin: 1em 0;
    width: 100%;
    overflow: hidden;  
    background: $background-color;
    color: $text-color;
    border-radius: $border-radius;
    border: $outer-border;
  }

body {
  padding: 0 2em;
  font-family: Arial, sans-serif;
  color: #024457;
  background:#034f84

;
}
th{
  height: 40px;

  background:#878f99;
}
tr{
 background: white;
}

h1{

  color:white;
}


</style>
<div>
  <div class="appoint">
<?php include("dbconn.php"); ?>
<?php
   $select =mysqli_query($conn, "SELECT * FROM appointment");

  
 ?>

 <center><h1>Appointments</h1></center>

<table class="responstable" border="1px" cellpadding="5px">
<tr><thead>	
  
	<th>F i r s t n a m e</th>
	<th>L a s t n a m e</th>
	<th>S e r v i c e</th>
	<th>P h o n e</th>
  <th>D a t e</th>
  <th>T i m e</th>
  <th>M e s s a g e</th>
</thead>
</tr>


<tbody>
 
 <?php
   while($fetch = mysqli_fetch_array($select))
   {
      ?>
   	<tr> 
        
    	<td><?php echo $fetch['firstname'];?></td>
    	<td><?php echo $fetch['lastname'];?></td>
    	<td><?php echo $fetch['service'];?></td>
    	<td><?php echo $fetch['phone'];?></td>
      <td><?php echo $fetch['date'];?></td>
      <td><?php echo $fetch['time'];?></td>
      <td><?php echo $fetch['message'];?></td>
 
    </tr>




<?php
   }

?>

 </tbody>




    </table>
    </div>

 <div class="feed">
  <?php include("dbcon.php"); ?>
<?php
   $select =mysqli_query($conn, "SELECT * FROM feedback");

  
 ?>

 <center><h1>FEEDBACKS</h1></center>

<table class="responstable" border="1px" cellpadding="5px">
<tr><thead> 
  
  <th>Y o u r n a m e</th>
  <th>E m a i l</th>
  <th>S u b j e c t</th>
  <th>M e s s a g e</th>
 
</thead>
</tr>


<tbody>
 
 <?php
   while($fetch = mysqli_fetch_array($select))
   {
      ?>
    <tr> 
        
      <td><?php echo $fetch['yourname'];?></td>
      <td><?php echo $fetch['email'];?></td>
      <td><?php echo $fetch['subject'];?></td>
      <td><?php echo $fetch['message'];?></td>
  
    </tr>




<?php
   }

?>

 </tbody>




    </table>
 </div>
</div>





<html>
<head>
	<title></title>
    

</head>
<body>

</body>
</html>